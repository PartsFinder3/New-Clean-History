<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $featuredCars = Car::orderBy('id', 'desc')->take(6)->get();
        return view('home', compact('featuredCars'));
    }

    public function cars(Request $request)
    {
        $cars = Car::orderBy('id', 'desc')->paginate(24);
        return view('cars.index', compact('cars'));
    }

    public function carDetail($slug)
    {
        $car = Car::where('slug', $slug)->firstOrFail();
        return view('cars.show', compact('car'));
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function products()
    {
        $products = [
            [
                'name' => 'autoAstat',
                'description' => 'Comprehensive deletion of car history from autoAstat. Ensure a clear technical record for your US insurance vehicle.',
                'price' => '45',
                'image' => 'https://cleanautohistory.com/storage/products/September2023/C9C8q2Uis5o9YjB1lA5U.png'
            ],
            [
                'name' => 'BidCars',
                'description' => 'Full removal of photos and auction history from BidCars. Essential for maintaining vehicle value privacy.',
                'price' => '40',
                'image' => 'https://cleanautohistory.com/storage/products/September2023/G6m8c3N3j0x7V2B9lA5U.png'
            ],
            [
                'name' => 'AuctionHistory IO',
                'description' => 'Permanent erasure of sales data and high-res photos from AuctionHistory.io database.',
                'price' => '50',
                'image' => 'https://cleanautohistory.com/storage/products/September2023/H8m2c6N5j0x1V4B3lA5U.png'
            ],
            [
                'name' => 'BidFax',
                'description' => 'Specialized service to hide Copart and IAAI auction history from the popular BidFax platform.',
                'price' => '35',
                'image' => 'https://cleanautohistory.com/storage/products/September2023/J2m4c1N9j8x5V0B7lA5U.png'
            ],
            [
                'name' => 'autoauctions.io',
                'description' => 'Clean your global auction record. We remove VIN data from autoauctions.io permanently.',
                'price' => '55',
                'image' => 'https://cleanautohistory.com/storage/products/September2023/K0m6c2N1j4x9V2B5lA5U.png'
            ],
            [
                'name' => 'Carfast Express',
                'description' => 'Delete auction photos and pricing history from Carfast Express for any US or Canadian vehicle.',
                'price' => '45',
                'image' => 'https://cleanautohistory.com/storage/products/September2023/L4m8c4N3j2x7V6B9lA5U.png'
            ],
            [
                'name' => 'Atlantic Express',
                'description' => 'Reliable information removal from Atlantic Express database. Protect your VIN from public search.',
                'price' => '40',
                'image' => 'https://cleanautohistory.com/storage/products/September2023/M2m0c6N5j8x1V4B3lA5U.png'
            ],
            [
                'name' => 'Auto Bid Master',
                'description' => 'Erasing your car history from Auto Bid Master. No more public record of your insurance purchase.',
                'price' => '45',
                'image' => 'https://cleanautohistory.com/storage/products/September2023/N6m4c8N1j4x9V2B5lA5U.png'
            ],
            [
                'name' => 'Stat Vin',
                'description' => 'Remove detailed auction statistics and salvage history from the StatVin global database.',
                'price' => '50',
                'image' => 'https://cleanautohistory.com/storage/products/September2023/O0m2c0N9j8x5V0B7lA5U.png'
            ],
            [
                'name' => 'PLC GROUP',
                'description' => 'Complete vehicle data removal from PLC Group registry. High-speed processing for all US cars.',
                'price' => '40',
                'image' => 'https://cleanautohistory.com/storage/products/September2023/P4m8c4N3j2x7V6B9lA5U.png'
            ],
            [
                'name' => 'AutoAuctionHistory',
                'description' => 'Wipe clean your auction history from AutoAuctionHistory.com. Full privacy for your vehicle VIN.',
                'price' => '45',
                'image' => 'https://cleanautohistory.com/storage/products/September2023/Q8m2c6N5j0x1V4B3lA5U.png'
            ],
            [
                'name' => 'America Motors',
                'description' => 'Remove your car details from America Motors. We ensure no photos or data remain public.',
                'price' => '40',
                'image' => 'https://cleanautohistory.com/storage/products/September2023/R2m4c1N9j8x5V0B7lA5U.png'
            ],
            [
                'name' => 'AuctionAuto UA',
                'description' => 'Professional cleaning of vehicle history from AuctionAuto UA results. Verified and permanent.',
                'price' => '50',
                'image' => 'https://cleanautohistory.com/storage/products/September2023/S0m6c2N1j4x9V2B5lA5U.png'
            ],
        ];
        return view('products', compact('products'));
    }
}
