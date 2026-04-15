@extends('layouts.app')

@section('title', 'Edit Auction Car | Admin')

@section('content')
<div class="min-h-screen bg-background-secondary">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Header -->
        <div class="mb-8">
            <a href="{{ route('admin.auction-cars.index') }}" class="text-sm text-muted hover:text-accent flex items-center gap-1 mb-4">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                Back to List
            </a>
            <h1 class="text-2xl font-bold text-foreground">Edit Auction Car</h1>
            <p class="text-sm text-muted mt-1">Lot: {{ $car->lot }} | VIN: {{ $car->vin }}</p>
        </div>

        <!-- Form -->
        <form action="{{ route('admin.auction-cars.update', $car->id) }}" method="POST" class="bg-white rounded-xl border border-card-border p-6 space-y-6">
            @csrf
            @method('PUT')

            <!-- Basic Info -->
            <div class="border-b border-card-border pb-6">
                <h2 class="font-display text-lg font-semibold text-foreground mb-4">Basic Information</h2>
                <div class="grid md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-foreground mb-1">Lot Number</label>
                        <input type="text" name="lot" value="{{ old('lot', $car->lot) }}" class="w-full rounded-lg border border-card-border px-4 py-2 focus:border-accent focus:outline-none">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-foreground mb-1">VIN Number</label>
                        <input type="text" name="vin" maxlength="17" value="{{ old('vin', $car->vin) }}" class="w-full rounded-lg border border-card-border px-4 py-2 font-mono focus:border-accent focus:outline-none">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-foreground mb-1">Seller</label>
                        <input type="text" name="seller" value="{{ old('seller', $car->seller) }}" class="w-full rounded-lg border border-card-border px-4 py-2 focus:border-accent focus:outline-none">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-foreground mb-1">Sale Document</label>
                        <input type="text" name="sale_document" value="{{ old('sale_document', $car->sale_document) }}" class="w-full rounded-lg border border-card-border px-4 py-2 focus:border-accent focus:outline-none">
                    </div>
                </div>
            </div>

            <!-- Vehicle Details -->
            <div class="border-b border-card-border pb-6">
                <h2 class="font-display text-lg font-semibold text-foreground mb-4">Vehicle Details</h2>
                <div class="grid md:grid-cols-3 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-foreground mb-1">Model</label>
                        <input type="text" name="model" value="{{ old('model', $car->model) }}" class="w-full rounded-lg border border-card-border px-4 py-2 focus:border-accent focus:outline-none">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-foreground mb-1">Series</label>
                        <input type="text" name="series" value="{{ old('series', $car->series) }}" class="w-full rounded-lg border border-card-border px-4 py-2 focus:border-accent focus:outline-none">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-foreground mb-1">Body Style</label>
                        <input type="text" name="body_style" value="{{ old('body_style', $car->body_style) }}" class="w-full rounded-lg border border-card-border px-4 py-2 focus:border-accent focus:outline-none">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-foreground mb-1">Exterior Color</label>
                        <input type="text" name="exterior_color" value="{{ old('exterior_color', $car->exterior_color) }}" class="w-full rounded-lg border border-card-border px-4 py-2 focus:border-accent focus:outline-none">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-foreground mb-1">Engine</label>
                        <input type="text" name="engine" value="{{ old('engine', $car->engine) }}" class="w-full rounded-lg border border-card-border px-4 py-2 focus:border-accent focus:outline-none">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-foreground mb-1">Cylinders</label>
                        <input type="text" name="cylinders" value="{{ old('cylinders', $car->cylinders) }}" class="w-full rounded-lg border border-card-border px-4 py-2 focus:border-accent focus:outline-none">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-foreground mb-1">Transmission</label>
                        <input type="text" name="transmission" value="{{ old('transmission', $car->transmission) }}" class="w-full rounded-lg border border-card-border px-4 py-2 focus:border-accent focus:outline-none">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-foreground mb-1">Fuel Type</label>
                        <input type="text" name="fuel_type" value="{{ old('fuel_type', $car->fuel_type) }}" class="w-full rounded-lg border border-card-border px-4 py-2 focus:border-accent focus:outline-none">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-foreground mb-1">Drive Type</label>
                        <input type="text" name="drive_type" value="{{ old('drive_type', $car->drive_type) }}" class="w-full rounded-lg border border-card-border px-4 py-2 focus:border-accent focus:outline-none">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-foreground mb-1">Drive Line Type</label>
                        <input type="text" name="drive_line_type" value="{{ old('drive_line_type', $car->drive_line_type) }}" class="w-full rounded-lg border border-card-border px-4 py-2 focus:border-accent focus:outline-none">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-foreground mb-1">Restraint System</label>
                        <input type="text" name="restraint_system" value="{{ old('restraint_system', $car->restraint_system) }}" class="w-full rounded-lg border border-card-border px-4 py-2 focus:border-accent focus:outline-none">
                    </div>
                </div>
            </div>

            <!-- Damage & Loss -->
            <div class="border-b border-card-border pb-6">
                <h2 class="font-display text-lg font-semibold text-foreground mb-4">Damage & Loss Information</h2>
                <div class="grid md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-foreground mb-1">Approved</label>
                        <input type="text" name="approved" value="{{ old('approved', $car->approved) }}" class="w-full rounded-lg border border-card-border px-4 py-2 focus:border-accent focus:outline-none">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-foreground mb-1">Loss</label>
                        <input type="text" name="loss" value="{{ old('loss', $car->loss) }}" class="w-full rounded-lg border border-card-border px-4 py-2 focus:border-accent focus:outline-none">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-foreground mb-1">Primary Damage</label>
                        <input type="text" name="primary_damage" value="{{ old('primary_damage', $car->primary_damage) }}" class="w-full rounded-lg border border-card-border px-4 py-2 focus:border-accent focus:outline-none">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-foreground mb-1">Secondary Damage</label>
                        <input type="text" name="secondary_damage" value="{{ old('secondary_damage', $car->secondary_damage) }}" class="w-full rounded-lg border border-card-border px-4 py-2 focus:border-accent focus:outline-none">
                    </div>
                </div>
            </div>

            <!-- Odometer & Keys -->
            <div class="border-b border-card-border pb-6">
                <h2 class="font-display text-lg font-semibold text-foreground mb-4">Odometer & Keys</h2>
                <div class="grid md:grid-cols-3 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-foreground mb-1">Odometer</label>
                        <input type="text" name="odometer" value="{{ old('odometer', $car->odometer) }}" class="w-full rounded-lg border border-card-border px-4 py-2 focus:border-accent focus:outline-none">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-foreground mb-1">Start Code</label>
                        <input type="text" name="start_code" value="{{ old('start_code', $car->start_code) }}" class="w-full rounded-lg border border-card-border px-4 py-2 focus:border-accent focus:outline-none">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-foreground mb-1">Key</label>
                        <input type="text" name="key" value="{{ old('key', $car->key) }}" class="w-full rounded-lg border border-card-border px-4 py-2 focus:border-accent focus:outline-none">
                    </div>
                </div>
            </div>

            <!-- Financial -->
            <div class="border-b border-card-border pb-6">
                <h2 class="font-display text-lg font-semibold text-foreground mb-4">Financial Information</h2>
                <div class="grid md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-foreground mb-1">ACV / ERC</label>
                        <input type="text" name="acv_erc" value="{{ old('acv_erc', $car->acv_erc) }}" class="w-full rounded-lg border border-card-border px-4 py-2 focus:border-accent focus:outline-none">
                    </div>
                </div>
            </div>

            <!-- Photos -->
            <div class="border-b border-card-border pb-6">
                <h2 class="font-display text-lg font-semibold text-foreground mb-4">Photos</h2>
                <div>
                    <label class="block text-sm font-medium text-foreground mb-1">Photo URLs (one per line)</label>
                    <textarea name="photos" rows="4" class="w-full rounded-lg border border-card-border px-4 py-2 focus:border-accent focus:outline-none font-mono text-sm">{{ old('photos', is_array($car->photos) ? implode("\n", $car->photos) : '') }}</textarea>
                    <p class="text-xs text-muted mt-1">Enter one URL per line, max 20 photos</p>
                </div>
                @if(is_array($car->photos) && count($car->photos) > 0)
                <div class="mt-4 grid grid-cols-4 gap-2">
                    @foreach($car->photos as $photo)
                    <img src="{{ $photo }}" alt="" class="w-full h-20 object-cover rounded-lg">
                    @endforeach
                </div>
                @endif
            </div>

            <!-- Status -->
            <div class="border-b border-card-border pb-6">
                <h2 class="font-display text-lg font-semibold text-foreground mb-4">Status</h2>
                <div class="grid md:grid-cols-3 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-foreground mb-1">Status</label>
                        <select name="status" class="w-full rounded-lg border border-card-border px-4 py-2 focus:border-accent focus:outline-none">
                            <option value="active" {{ $car->status == 'active' ? 'selected' : '' }}>Active</option>
                            <option value="pending" {{ $car->status == 'pending' ? 'selected' : '' }}>Pending</option>
                            <option value="sold" {{ $car->status == 'sold' ? 'selected' : '' }}>Sold</option>
                        </select>
                    </div>
                    <div class="flex items-center gap-3 pt-6">
                        <input type="checkbox" name="history_clean" id="history_clean" value="1" {{ $car->history_clean ? 'checked' : '' }} class="rounded border-card-border text-accent focus:ring-accent">
                        <label for="history_clean" class="text-sm text-foreground">History Cleaned</label>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-foreground mb-1">Featured Until</label>
                        <input type="date" name="featured_until" value="{{ $car->featured_until ? $car->featured_until->format('Y-m-d') : '' }}" class="w-full rounded-lg border border-card-border px-4 py-2 focus:border-accent focus:outline-none">
                    </div>
                </div>
            </div>

            <!-- Actions -->
            <div class="flex gap-4">
                <button type="submit" class="btn-primary flex-1 py-3">Update Car</button>
                <a href="{{ route('admin.auction-cars.index') }}" class="btn-secondary py-3 px-6">Cancel</a>
            </div>
        </form>
    </div>
</div>
@endsection
