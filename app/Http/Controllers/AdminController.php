<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\AuctionCar;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;

class AdminController extends Controller
{
    public function dashboard()
    {
        $cars = Car::orderBy('id', 'desc')->paginate(20);
        // Don't pass settings here since AppServiceProvider already shares siteSettings globally
        return view('admin.dashboard', compact('cars'));
    }

    public function updateSettings(Request $request)
    {
        if (!Schema::hasTable('settings')) {
            return back()->with('error', 'Settings table does not exist. Please run migrations.');
        }
        
        $settings = $request->except('_token');
        
        foreach ($settings as $key => $value) {
            Setting::updateOrCreate(
                ['key' => $key],
                ['value' => $value]
            );
        }

        // Clear the settings cache
        \Illuminate\Support\Facades\Cache::forget('site_settings');

        return back()->with('success', 'Settings updated successfully!');
    }

    public function login()
    {
        try {
            if (Auth::check()) {
                return redirect()->route('admin.dashboard');
            }
        } catch (\Exception $e) {
            // DB unreachable — just show the login page
        }
        return view('admin.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        try {
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
                return redirect()->intended('admin');
            }
        } catch (\Exception $e) {
            return back()->withErrors([
                'email' => 'DB Error: ' . $e->getMessage(),
            ]);
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'car_name' => 'required|string',
            'vin' => 'required|string|unique:cars,vin',
            'description' => 'nullable|string',
            'car_image_url' => 'nullable|string',
            'mileage' => 'nullable|string',
            'location' => 'nullable|string',
            'damage' => 'nullable|string',
        ]);

        $validated['vin'] = strtoupper(trim($validated['vin']));
        
        // Use car name for slug instead of VIN, enforce lowercase
        $validated['slug'] = strtolower($this->generateUniqueSlug($validated['car_name']));
        
        Car::create($validated);
        $this->clearFrontendCaches();

        return back()->with('success', 'Car added successfully!');
    }

    public function checkVins(Request $request)
    {
        // Normalize incoming VINs to Uppercase and Trimmed
        $vins = array_map(function($v) {
            return strtoupper(trim($v));
        }, $request->input('vins', []));

        $existingVins = Car::whereIn('vin', $vins)->pluck('vin')->toArray();
        return response()->json(['existingVins' => $existingVins]);
    }

    public function bulkStore(Request $request)
    {
        $carsData = $request->input('cars', []);
        
        if (empty($carsData)) {
            return response()->json(['success' => false, 'error' => 'No data provided'], 400);
        }

        $count = 0;
        foreach ($carsData as $data) {
            if (empty($data['vin']) || empty($data['car_name'])) continue;

            // Normalize VIN
            $cleanVin = strtoupper(trim($data['vin']));
            
            // Use car name for slug instead of VIN
            $slug = $this->generateUniqueSlug($data['car_name']);
            
            Car::updateOrCreate(
                ['vin' => $cleanVin], // Use normalized VIN for matching
                [
                    'car_name' => trim($data['car_name']),
                    'description' => $data['description'] ?? null,
                    'car_image_url' => $data['car_image_url'] ?? null,
                    'mileage' => $data['mileage'] ?? null,
                    'location' => $data['location'] ?? null,
                    'damage' => $data['damage'] ?? null,
                    'slug' => strtolower($slug)
                ]
            );
            $count++;
        }

        $this->clearFrontendCaches();
        return response()->json(['success' => true, 'count' => $count]);
    }

    public function destroy($id)
    {
        $car = Car::findOrFail($id);
        $car->delete();
        $this->clearFrontendCaches();

        return back()->with('success', 'Car deleted successfully!');
    }

    public function destroyAll()
    {
        Car::truncate();
        $this->clearFrontendCaches();
        return back()->with('success', 'All cars deleted!');
    }

    public function bulkDelete(Request $request)
    {
        $idsRaw = $request->input('ids');
        $ids = is_string($idsRaw) ? json_decode($idsRaw, true) : $idsRaw;
        
        if (empty($ids)) {
            return back()->with('error', 'No objects selected for deletion.');
        }

        Car::whereIn('id', $ids)->delete();
        $this->clearFrontendCaches();

        return back()->with('success', count($ids) . ' records deleted successfully!');
    }

    private function generateUniqueSlug($title)
    {
        $baseSlug = Str::slug($title);
        if (empty($baseSlug)) {
            $baseSlug = 'vehicle';
        }
        
        $slug = $baseSlug;
        $count = 1;

        // Check for uniqueness
        while (Car::where('slug', $slug)->exists()) {
            $slug = "{$baseSlug}-" . Str::lower(Str::random(4));
            // Just one level of random suffix to avoid deep loops
            if ($count > 1) break; 
            $count++;
        }

        return $slug;
    }

    private function clearFrontendCaches()
    {
        try {
            \Illuminate\Support\Facades\Cache::flush();
        } catch (\Exception $e) {
            // Fallback: clear the most critical one if flush fails
            \Illuminate\Support\Facades\Cache::forget('featured_cars');
        }
    }

    // ==================== AUCTION CARS ====================

    public function auctionCarsIndex(Request $request)
    {
        $query = AuctionCar::query();

        // Search
        if ($search = $request->get('search')) {
            $query->where(function($q) use ($search) {
                $q->where('vin', 'like', "%{$search}%")
                  ->orWhere('model', 'like', "%{$search}%")
                  ->orWhere('lot', 'like', "%{$search}%");
            });
        }

        // Status filter
        if ($status = $request->get('status')) {
            $query->where('status', $status);
        }

        $cars = $query->orderBy('id', 'desc')->paginate(20);

        // Stats
        $stats = [
            'total' => AuctionCar::count(),
            'active' => AuctionCar::where('status', 'active')->count(),
            'sold' => AuctionCar::where('status', 'sold')->count(),
            'featured' => AuctionCar::whereNotNull('featured_until')->where('featured_until', '>', now())->count(),
        ];

        return view('admin.auction_cars.index', compact('cars', 'stats'));
    }

    public function auctionCarsCreate()
    {
        return view('admin.auction_cars.create');
    }

    public function auctionCarsStore(Request $request)
    {
        $data = $request->all();

        // Convert photos textarea to array
        if (!empty($data['photos'])) {
            $data['photos'] = array_filter(array_map('trim', explode("\n", $data['photos'])));
        } else {
            $data['photos'] = [];
        }

        // Handle checkbox
        $data['history_clean'] = $request->has('history_clean');

        // Handle empty strings as null
        foreach ($data as $key => $value) {
            if ($value === '' && in_array($key, [
                'lot', 'vin', 'seller', 'sale_document', 'approved', 'loss',
                'primary_damage', 'secondary_damage', 'odometer', 'start_code',
                'key', 'acv_erc', 'body_style', 'exterior_color', 'engine',
                'transmission', 'fuel_type', 'drive_type', 'model', 'series',
                'cylinders', 'restraint_system', 'drive_line_type'
            ])) {
                $data[$key] = null;
            }
        }

        AuctionCar::create($data);

        return redirect()->route('admin.auction-cars.index')->with('success', 'Auction car added successfully!');
    }

    public function auctionCarsEdit($id)
    {
        $car = AuctionCar::findOrFail($id);
        return view('admin.auction_cars.edit', compact('car'));
    }

    public function auctionCarsUpdate(Request $request, $id)
    {
        $car = AuctionCar::findOrFail($id);
        $data = $request->all();

        // Convert photos textarea to array
        if (!empty($data['photos'])) {
            $data['photos'] = array_filter(array_map('trim', explode("\n", $data['photos'])));
        } else {
            $data['photos'] = [];
        }

        // Handle checkbox
        $data['history_clean'] = $request->has('history_clean');

        // Handle empty strings as null
        foreach ($data as $key => $value) {
            if ($value === '' && in_array($key, [
                'lot', 'vin', 'seller', 'sale_document', 'approved', 'loss',
                'primary_damage', 'secondary_damage', 'odometer', 'start_code',
                'key', 'acv_erc', 'body_style', 'exterior_color', 'engine',
                'transmission', 'fuel_type', 'drive_type', 'model', 'series',
                'cylinders', 'restraint_system', 'drive_line_type'
            ])) {
                $data[$key] = null;
            }
        }

        $car->update($data);

        return redirect()->route('admin.auction-cars.index')->with('success', 'Auction car updated successfully!');
    }

    public function auctionCarsDestroy($id)
    {
        $car = AuctionCar::findOrFail($id);
        $car->delete();

        return back()->with('success', 'Auction car deleted successfully!');
    }
}
