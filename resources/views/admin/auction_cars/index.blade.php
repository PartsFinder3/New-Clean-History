@extends('layouts.app')

@section('title', 'Auction Cars Management | Admin')

@section('content')
<div class="min-h-screen bg-background-secondary">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Header -->
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-8">
            <div>
                <h1 class="text-2xl font-bold text-foreground">Auction Cars</h1>
                <p class="text-sm text-muted mt-1">Manage salvage/auction vehicle listings</p>
            </div>
            <div class="mt-4 sm:mt-0 flex gap-3">
                <a href="{{ route('admin.auction-cars.create') }}" class="btn-primary inline-flex items-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                    Add New Car
                </a>
            </div>
        </div>

        <!-- Stats -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-6">
            <div class="bg-white rounded-xl p-4 border border-card-border">
                <div class="text-2xl font-bold text-foreground">{{ $stats['total'] ?? 0 }}</div>
                <div class="text-sm text-muted">Total Cars</div>
            </div>
            <div class="bg-white rounded-xl p-4 border border-card-border">
                <div class="text-2xl font-bold text-success">{{ $stats['active'] ?? 0 }}</div>
                <div class="text-sm text-muted">Active</div>
            </div>
            <div class="bg-white rounded-xl p-4 border border-card-border">
                <div class="text-2xl font-bold text-warning">{{ $stats['sold'] ?? 0 }}</div>
                <div class="text-sm text-muted">Sold</div>
            </div>
            <div class="bg-white rounded-xl p-4 border border-card-border">
                <div class="text-2xl font-bold text-accent">{{ $stats['featured'] ?? 0 }}</div>
                <div class="text-sm text-muted">Featured</div>
            </div>
        </div>

        <!-- Search -->
        <div class="bg-white rounded-xl border border-card-border p-4 mb-6">
            <form action="{{ route('admin.auction-cars.index') }}" method="GET" class="flex gap-4">
                <input type="text" name="search" value="{{ request('search') }}" placeholder="Search by VIN, Model, or Lot..." class="flex-1 rounded-lg border border-card-border px-4 py-2 focus:border-accent focus:outline-none">
                <select name="status" class="rounded-lg border border-card-border px-4 py-2 focus:border-accent focus:outline-none">
                    <option value="">All Status</option>
                    <option value="active" {{ request('status') == 'active' ? 'selected' : '' }}>Active</option>
                    <option value="sold" {{ request('status') == 'sold' ? 'selected' : '' }}>Sold</option>
                    <option value="pending" {{ request('status') == 'pending' ? 'selected' : '' }}>Pending</option>
                </select>
                <button type="submit" class="btn-primary">Search</button>
                @if(request('search') || request('status'))
                    <a href="{{ route('admin.auction-cars.index') }}" class="btn-secondary">Clear</a>
                @endif
            </form>
        </div>

        <!-- Table -->
        <div class="bg-white rounded-xl border border-card-border overflow-hidden">
            <table class="w-full">
                <thead class="bg-background-secondary">
                    <tr>
                        <th class="px-4 py-3 text-left text-xs font-semibold text-muted uppercase tracking-wider">Lot / VIN</th>
                        <th class="px-4 py-3 text-left text-xs font-semibold text-muted uppercase tracking-wider">Vehicle</th>
                        <th class="px-4 py-3 text-left text-xs font-semibold text-muted uppercase tracking-wider">Damage</th>
                        <th class="px-4 py-3 text-left text-xs font-semibold text-muted uppercase tracking-wider">Odometer</th>
                        <th class="px-4 py-3 text-left text-xs font-semibold text-muted uppercase tracking-wider">Status</th>
                        <th class="px-4 py-3 text-right text-xs font-semibold text-muted uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-card-border">
                    @forelse($cars as $car)
                    <tr class="hover:bg-background-secondary/50">
                        <td class="px-4 py-4">
                            <div class="font-mono text-sm font-medium text-foreground">{{ $car->lot }}</div>
                            <div class="font-mono text-xs text-muted">{{ $car->vin }}</div>
                        </td>
                        <td class="px-4 py-4">
                            <div class="text-sm font-medium text-foreground">{{ $car->model }} {{ $car->series }}</div>
                            <div class="text-xs text-muted">{{ $car->body_style }} • {{ $car->exterior_color }}</div>
                        </td>
                        <td class="px-4 py-4">
                            <div class="text-sm text-danger">{{ $car->primary_damage }}</div>
                            @if($car->secondary_damage && $car->secondary_damage != 'NA')
                                <div class="text-xs text-warning">{{ $car->secondary_damage }}</div>
                            @endif
                        </td>
                        <td class="px-4 py-4">
                            <span class="text-sm text-foreground">{{ $car->odometer }}</span>
                        </td>
                        <td class="px-4 py-4">
                            @if($car->status == 'active')
                                <span class="badge-success">Active</span>
                            @elseif($car->status == 'sold')
                                <span class="badge-secondary">Sold</span>
                            @else
                                <span class="badge-warning">{{ ucfirst($car->status) }}</span>
                            @endif
                            @if($car->history_clean)
                                <span class="badge-success ml-1">Clean</span>
                            @endif
                        </td>
                        <td class="px-4 py-4 text-right">
                            <div class="flex items-center justify-end gap-2">
                                <a href="{{ route('admin.auction-cars.edit', $car->id) }}" class="p-2 text-accent hover:bg-accent/10 rounded-lg transition">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                                </a>
                                <form action="{{ route('admin.auction-cars.destroy', $car->id) }}" method="POST" class="inline" onsubmit="return confirm('Delete this car?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="p-2 text-danger hover:bg-danger/10 rounded-lg transition">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="px-4 py-12 text-center text-muted">
                            <p>No auction cars found.</p>
                            <a href="{{ route('admin.auction-cars.create') }}" class="btn-primary mt-4 inline-block">Add First Car</a>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        @if($cars->hasPages())
        <div class="mt-6">
            {{ $cars->links() }}
        </div>
        @endif
    </div>
</div>
@endsection
