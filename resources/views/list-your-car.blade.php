@extends('layouts.app')

@section('title', 'List Your Car for Sale in UAE | Submit Garage Car | CarHistoryRemove')
@section('description', 'Submit your car to our UAE garage marketplace. Sell your car faster to buyers in Dubai, Abu Dhabi, Sharjah. Free and paid listing options available.')
@section('keywords', 'list car UAE, sell car Dubai, submit car for sale, car listing form UAE, sell used car Abu Dhabi')

@section('content')
<section class="relative overflow-hidden border-b border-card-border px-4 py-16 md:px-8 md:py-24 bg-gradient-to-br from-blue-50 via-white to-white">
    <div class="relative mx-auto max-w-3xl">
        <div class="text-center">
            <h1 class="font-display text-3xl font-bold tracking-tight text-foreground md:text-4xl">
                List Your <span class="gradient-text">Car for Sale</span>
            </h1>
            <p class="mt-4 text-lg text-muted">
                Fill out the form below and we'll get your car listed in our UAE marketplace within 24 hours.
            </p>
        </div>
    </div>
</section>

<section class="py-16 px-4 md:px-8 bg-background-secondary">
    <div class="mx-auto max-w-3xl">
        <div class="glass-card p-8">
            <form action="#" method="POST" class="space-y-6">
                @csrf

                <div class="border-b border-card-border pb-6">
                    <h2 class="font-display text-xl font-bold text-foreground mb-4">Garage / Seller Information</h2>
                    <div class="grid md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-foreground mb-2">Garage or Seller Name *</label>
                            <input type="text" name="garage_name" required class="w-full rounded-xl border border-card-border bg-white px-4 py-3 text-sm focus:border-accent focus:outline-none">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-foreground mb-2">Owner Name</label>
                            <input type="text" name="owner_name" class="w-full rounded-xl border border-card-border bg-white px-4 py-3 text-sm focus:border-accent focus:outline-none">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-foreground mb-2">Phone Number *</label>
                            <input type="tel" name="phone" required class="w-full rounded-xl border border-card-border bg-white px-4 py-3 text-sm focus:border-accent focus:outline-none" placeholder="+971 XX XXX XXXX">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-foreground mb-2">WhatsApp Number</label>
                            <input type="tel" name="whatsapp" class="w-full rounded-xl border border-card-border bg-white px-4 py-3 text-sm focus:border-accent focus:outline-none" placeholder="Same as phone">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-foreground mb-2">Emirate *</label>
                            <select name="emirate" required class="w-full rounded-xl border border-card-border bg-white px-4 py-3 text-sm focus:border-accent focus:outline-none">
                                <option value="">Select Emirate</option>
                                <option value="Dubai">Dubai</option>
                                <option value="Abu Dhabi">Abu Dhabi</option>
                                <option value="Sharjah">Sharjah</option>
                                <option value="Ajman">Ajman</option>
                                <option value="Ras Al Khaimah">Ras Al Khaimah</option>
                                <option value="Fujairah">Fujairah</option>
                                <option value="Umm Al Quwain">Umm Al Quwain</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-foreground mb-2">Area / Location *</label>
                            <input type="text" name="location_area" required class="w-full rounded-xl border border-card-border bg-white px-4 py-3 text-sm focus:border-accent focus:outline-none" placeholder="e.g. Al Quoz, Deira">
                        </div>
                    </div>
                </div>

                <div class="border-b border-card-border pb-6">
                    <h2 class="font-display text-xl font-bold text-foreground mb-4">Car Details</h2>
                    <div class="grid md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-foreground mb-2">Make *</label>
                            <input type="text" name="make" required class="w-full rounded-xl border border-card-border bg-white px-4 py-3 text-sm focus:border-accent focus:outline-none" placeholder="e.g. Toyota">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-foreground mb-2">Model *</label>
                            <input type="text" name="model" required class="w-full rounded-xl border border-card-border bg-white px-4 py-3 text-sm focus:border-accent focus:outline-none" placeholder="e.g. Camry">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-foreground mb-2">Year *</label>
                            <input type="number" name="year" required min="1990" max="2026" class="w-full rounded-xl border border-card-border bg-white px-4 py-3 text-sm focus:border-accent focus:outline-none">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-foreground mb-2">Variant / Trim</label>
                            <input type="text" name="variant" class="w-full rounded-xl border border-card-border bg-white px-4 py-3 text-sm focus:border-accent focus:outline-none" placeholder="e.g. LE, Sport">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-foreground mb-2">VIN Number</label>
                            <input type="text" name="vin" maxlength="17" class="w-full rounded-xl border border-card-border bg-white px-4 py-3 text-sm font-mono focus:border-accent focus:outline-none" placeholder="17 character VIN">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-foreground mb-2">Mileage (KM) *</label>
                            <input type="number" name="mileage_km" required class="w-full rounded-xl border border-card-border bg-white px-4 py-3 text-sm focus:border-accent focus:outline-none" placeholder="e.g. 85000">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-foreground mb-2">Price (AED) *</label>
                            <input type="number" name="price_aed" required class="w-full rounded-xl border border-card-border bg-white px-4 py-3 text-sm focus:border-accent focus:outline-none" placeholder="e.g. 45000">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-foreground mb-2">Condition *</label>
                            <select name="condition" required class="w-full rounded-xl border border-card-border bg-white px-4 py-3 text-sm focus:border-accent focus:outline-none">
                                <option value="">Select Condition</option>
                                <option value="Excellent">Excellent</option>
                                <option value="Good">Good</option>
                                <option value="Fair">Fair</option>
                                <option value="Needs Work">Needs Work</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-foreground mb-2">Color</label>
                            <input type="text" name="color" class="w-full rounded-xl border border-card-border bg-white px-4 py-3 text-sm focus:border-accent focus:outline-none">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-foreground mb-2">Fuel Type</label>
                            <select name="fuel_type" class="w-full rounded-xl border border-card-border bg-white px-4 py-3 text-sm focus:border-accent focus:outline-none">
                                <option value="">Select Fuel Type</option>
                                <option value="Petrol">Petrol</option>
                                <option value="Diesel">Diesel</option>
                                <option value="Hybrid">Hybrid</option>
                                <option value="Electric">Electric</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-foreground mb-2">Transmission</label>
                            <select name="transmission" class="w-full rounded-xl border border-card-border bg-white px-4 py-3 text-sm focus:border-accent focus:outline-none">
                                <option value="">Select Transmission</option>
                                <option value="Automatic">Automatic</option>
                                <option value="Manual">Manual</option>
                                <option value="CVT">CVT</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-foreground mb-2">Body Type</label>
                            <select name="body_type" class="w-full rounded-xl border border-card-border bg-white px-4 py-3 text-sm focus:border-accent focus:outline-none">
                                <option value="">Select Body Type</option>
                                <option value="Sedan">Sedan</option>
                                <option value="SUV">SUV</option>
                                <option value="Hatchback">Hatchback</option>
                                <option value="Pickup">Pickup</option>
                                <option value="Coupe">Coupe</option>
                                <option value="Van">Van</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="border-b border-card-border pb-6">
                    <h2 class="font-display text-xl font-bold text-foreground mb-4">Features</h2>
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-3">
                        @php
                        $features = ['Sunroof', 'Leather Seats', 'Parking Sensors', 'Reverse Camera', 'Navigation', 'Alloy Wheels', 'Keyless Entry', 'Push Start', 'Cruise Control', 'Bluetooth', 'Climate Control', 'Power Seats'];
                        @endphp
                        @foreach($features as $feature)
                        <label class="flex items-center gap-2 cursor-pointer">
                            <input type="checkbox" name="features[]" value="{{ $feature }}" class="rounded border-card-border text-accent focus:ring-accent">
                            <span class="text-sm text-muted">{{ $feature }}</span>
                        </label>
                        @endforeach
                    </div>
                </div>

                <div class="border-b border-card-border pb-6">
                    <h2 class="font-display text-xl font-bold text-foreground mb-4">Description & Photos</h2>
                    <div class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-foreground mb-2">Description</label>
                            <textarea name="description" rows="4" class="w-full rounded-xl border border-card-border bg-white px-4 py-3 text-sm focus:border-accent focus:outline-none" placeholder="Describe your car's condition, history, and any notable features..."></textarea>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-foreground mb-2">Photo URLs (one per line, max 10)</label>
                            <textarea name="photos" rows="3" class="w-full rounded-xl border border-card-border bg-white px-4 py-3 text-sm focus:border-accent focus:outline-none" placeholder="https://example.com/car-photo1.jpg&#10;https://example.com/car-photo2.jpg"></textarea>
                            <p class="text-xs text-muted mt-1">Or email photos to info@carhistoryremove.online after submitting</p>
                        </div>
                    </div>
                </div>

                <div>
                    <h2 class="font-display text-xl font-bold text-foreground mb-4">Listing Package</h2>
                    <div class="grid md:grid-cols-3 gap-4">
                        <label class="cursor-pointer">
                            <input type="radio" name="listing_package" value="free" class="peer sr-only" checked>
                            <div class="p-4 rounded-xl border border-card-border bg-white peer-checked:border-accent peer-checked:bg-blue-50 transition-all">
                                <div class="font-bold text-foreground">Free</div>
                                <div class="text-sm text-muted">AED 0</div>
                            </div>
                        </label>
                        <label class="cursor-pointer">
                            <input type="radio" name="listing_package" value="featured" class="peer sr-only">
                            <div class="p-4 rounded-xl border border-card-border bg-white peer-checked:border-accent peer-checked:bg-blue-50 transition-all">
                                <div class="font-bold text-foreground">Featured</div>
                                <div class="text-sm text-muted">AED 49</div>
                            </div>
                        </label>
                        <label class="cursor-pointer">
                            <input type="radio" name="listing_package" value="premium" class="peer sr-only">
                            <div class="p-4 rounded-xl border border-card-border bg-white peer-checked:border-accent peer-checked:bg-blue-50 transition-all">
                                <div class="font-bold text-foreground">Premium</div>
                                <div class="text-sm text-muted">AED 199/mo</div>
                            </div>
                        </label>
                    </div>
                </div>

                <div class="flex items-start gap-3">
                    <input type="checkbox" name="history_clean" id="history_clean" class="mt-1 rounded border-card-border text-accent focus:ring-accent">
                    <label for="history_clean" class="text-sm text-muted">
                        Add <span class="badge-success text-xs">Clean History</span> badge (+AED 25) -
                        <a href="{{ route('products') }}" class="text-accent hover:underline">verify history is clean</a>
                    </label>
                </div>

                <div class="pt-4">
                    <button type="submit" class="btn-primary w-full py-4 text-lg">
                        Submit Car Listing
                    </button>
                    <p class="text-center text-sm text-muted mt-4">
                        By submitting, you agree to our <a href="{{ route('terms') }}" class="text-accent hover:underline">Terms of Service</a>
                    </p>
                </div>
            </form>
        </div>

        <!-- Alternative Contact -->
        <div class="mt-8 text-center">
            <p class="text-muted">Prefer to submit via WhatsApp?</p>
            <a href="https://wa.me/923004531248?text=Hi, I want to list my car for sale" target="_blank" class="inline-flex items-center gap-2 text-accent hover:underline mt-2">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L0 24l6.335-1.662c1.72.94 3.659 1.437 5.634 1.437h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
                Submit via WhatsApp
            </a>
        </div>
    </div>
</section>
@endsection
