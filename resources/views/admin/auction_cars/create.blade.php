@extends('layouts.app')

@section('title', 'Add Auction Car | Admin')

@section('content')
<div class="min-h-screen bg-background-secondary">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Header -->
        <div class="mb-8">
            <a href="{{ route('admin.auction-cars.index') }}" class="text-sm text-muted hover:text-accent flex items-center gap-1 mb-4">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                Back to List
            </a>
            <h1 class="text-2xl font-bold text-foreground">Add New Auction Car</h1>
            <p class="text-sm text-muted mt-1">All fields are optional - leave empty to show "NA"</p>
        </div>

        <!-- Form -->
        <form action="{{ route('admin.auction-cars.store') }}" method="POST" class="bg-white rounded-xl border border-card-border p-6 space-y-6">
            @csrf

            <!-- Basic Info -->
            <div class="border-b border-card-border pb-6">
                <h2 class="font-display text-lg font-semibold text-foreground mb-4">Basic Information</h2>
                <div class="grid md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-foreground mb-1">Lot Number</label>
                        <input type="text" name="lot" class="w-full rounded-lg border border-card-border px-4 py-2 focus:border-accent focus:outline-none" placeholder="e.g. 12345678">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-foreground mb-1">VIN Number</label>
                        <input type="text" name="vin" maxlength="17" class="w-full rounded-lg border border-card-border px-4 py-2 font-mono focus:border-accent focus:outline-none" placeholder="17 character VIN">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-foreground mb-1">Seller</label>
                        <input type="text" name="seller" class="w-full rounded-lg border border-card-border px-4 py-2 focus:border-accent focus:outline-none" placeholder="Insurance Company / Auction">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-foreground mb-1">Sale Document</label>
                        <input type="text" name="sale_document" class="w-full rounded-lg border border-card-border px-4 py-2 focus:border-accent focus:outline-none" placeholder="Certificate of Title">
                    </div>
                </div>
            </div>

            <!-- Vehicle Details -->
            <div class="border-b border-card-border pb-6">
                <h2 class="font-display text-lg font-semibold text-foreground mb-4">Vehicle Details</h2>
                <div class="grid md:grid-cols-3 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-foreground mb-1">Model</label>
                        <input type="text" name="model" class="w-full rounded-lg border border-card-border px-4 py-2 focus:border-accent focus:outline-none" placeholder="e.g. Toyota Camry">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-foreground mb-1">Series</label>
                        <input type="text" name="series" class="w-full rounded-lg border border-card-border px-4 py-2 focus:border-accent focus:outline-none" placeholder="e.g. LE, XLE">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-foreground mb-1">Body Style</label>
                        <input type="text" name="body_style" class="w-full rounded-lg border border-card-border px-4 py-2 focus:border-accent focus:outline-none" placeholder="e.g. Sedan, SUV">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-foreground mb-1">Exterior Color</label>
                        <input type="text" name="exterior_color" class="w-full rounded-lg border border-card-border px-4 py-2 focus:border-accent focus:outline-none" placeholder="e.g. Silver, Black">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-foreground mb-1">Engine</label>
                        <input type="text" name="engine" class="w-full rounded-lg border border-card-border px-4 py-2 focus:border-accent focus:outline-none" placeholder="e.g. 2.5L 4 Cylinder">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-foreground mb-1">Cylinders</label>
                        <input type="text" name="cylinders" class="w-full rounded-lg border border-card-border px-4 py-2 focus:border-accent focus:outline-none" placeholder="e.g. 4, 6, 8">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-foreground mb-1">Transmission</label>
                        <input type="text" name="transmission" class="w-full rounded-lg border border-card-border px-4 py-2 focus:border-accent focus:outline-none" placeholder="e.g. Automatic">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-foreground mb-1">Fuel Type</label>
                        <input type="text" name="fuel_type" class="w-full rounded-lg border border-card-border px-4 py-2 focus:border-accent focus:outline-none" placeholder="e.g. Gasoline">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-foreground mb-1">Drive Type</label>
                        <input type="text" name="drive_type" class="w-full rounded-lg border border-card-border px-4 py-2 focus:border-accent focus:outline-none" placeholder="e.g. Front Wheel Drive">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-foreground mb-1">Drive Line Type</label>
                        <input type="text" name="drive_line_type" class="w-full rounded-lg border border-card-border px-4 py-2 focus:border-accent focus:outline-none">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-foreground mb-1">Restraint System</label>
                        <input type="text" name="restraint_system" class="w-full rounded-lg border border-card-border px-4 py-2 focus:border-accent focus:outline-none">
                    </div>
                </div>
            </div>

            <!-- Damage & Loss -->
            <div class="border-b border-card-border pb-6">
                <h2 class="font-display text-lg font-semibold text-foreground mb-4">Damage & Loss Information</h2>
                <div class="grid md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-foreground mb-1">Approved</label>
                        <input type="text" name="approved" class="w-full rounded-lg border border-card-border px-4 py-2 focus:border-accent focus:outline-none">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-foreground mb-1">Loss</label>
                        <input type="text" name="loss" class="w-full rounded-lg border border-card-border px-4 py-2 focus:border-accent focus:outline-none" placeholder="e.g. Collision, Theft">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-foreground mb-1">Primary Damage</label>
                        <input type="text" name="primary_damage" class="w-full rounded-lg border border-card-border px-4 py-2 focus:border-accent focus:outline-none" placeholder="e.g. Front End">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-foreground mb-1">Secondary Damage</label>
                        <input type="text" name="secondary_damage" class="w-full rounded-lg border border-card-border px-4 py-2 focus:border-accent focus:outline-none" placeholder="e.g. Side">
                    </div>
                </div>
            </div>

            <!-- Odometer & Keys -->
            <div class="border-b border-card-border pb-6">
                <h2 class="font-display text-lg font-semibold text-foreground mb-4">Odometer & Keys</h2>
                <div class="grid md:grid-cols-3 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-foreground mb-1">Odometer</label>
                        <input type="text" name="odometer" class="w-full rounded-lg border border-card-border px-4 py-2 focus:border-accent focus:outline-none" placeholder="e.g. 85,000 km">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-foreground mb-1">Start Code</label>
                        <input type="text" name="start_code" class="w-full rounded-lg border border-card-border px-4 py-2 focus:border-accent focus:outline-none" placeholder="e.g. Run & Drive">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-foreground mb-1">Key</label>
                        <input type="text" name="key" class="w-full rounded-lg border border-card-border px-4 py-2 focus:border-accent focus:outline-none" placeholder="e.g. Present">
                    </div>
                </div>
            </div>

            <!-- Financial -->
            <div class="border-b border-card-border pb-6">
                <h2 class="font-display text-lg font-semibold text-foreground mb-4">Financial Information</h2>
                <div class="grid md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-foreground mb-1">ACV / ERC</label>
                        <input type="text" name="acv_erc" class="w-full rounded-lg border border-card-border px-4 py-2 focus:border-accent focus:outline-none" placeholder="Actual Cash Value">
                    </div>
                </div>
            </div>

            <!-- Photos -->
            <div class="border-b border-card-border pb-6">
                <h2 class="font-display text-lg font-semibold text-foreground mb-4">Photos</h2>
                <div>
                    <label class="block text-sm font-medium text-foreground mb-1">Photo URLs (one per line)</label>
                    <textarea name="photos" rows="4" class="w-full rounded-lg border border-card-border px-4 py-2 focus:border-accent focus:outline-none font-mono text-sm" placeholder="https://example.com/photo1.jpg&#10;https://example.com/photo2.jpg&#10;https://example.com/photo3.jpg"></textarea>
                    <p class="text-xs text-muted mt-1">Enter one URL per line, max 20 photos</p>
                </div>
            </div>

            <!-- Status -->
            <div class="border-b border-card-border pb-6">
                <h2 class="font-display text-lg font-semibold text-foreground mb-4">Status</h2>
                <div class="grid md:grid-cols-3 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-foreground mb-1">Status</label>
                        <select name="status" class="w-full rounded-lg border border-card-border px-4 py-2 focus:border-accent focus:outline-none">
                            <option value="active">Active</option>
                            <option value="pending">Pending</option>
                            <option value="sold">Sold</option>
                        </select>
                    </div>
                    <div class="flex items-center gap-3 pt-6">
                        <input type="checkbox" name="history_clean" id="history_clean" value="1" class="rounded border-card-border text-accent focus:ring-accent">
                        <label for="history_clean" class="text-sm text-foreground">History Cleaned</label>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-foreground mb-1">Featured Until</label>
                        <input type="date" name="featured_until" class="w-full rounded-lg border border-card-border px-4 py-2 focus:border-accent focus:outline-none">
                    </div>
                </div>
            </div>

            <!-- Actions -->
            <div class="flex gap-4">
                <button type="submit" class="btn-primary flex-1 py-3">Save Car</button>
                <a href="{{ route('admin.auction-cars.index') }}" class="btn-secondary py-3 px-6">Cancel</a>
            </div>
        </form>
    </div>
</div>
@endsection
