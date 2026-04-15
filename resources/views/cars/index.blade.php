@extends('layouts.app')

@section('title', 'UAE Garage Cars for Sale | Used Cars Dubai & Abu Dhabi | CarHistoryRemove')
@section('description', 'Browse verified used cars from UAE garages. Toyota, Honda, Nissan, BMW & more. Direct from Dubai, Abu Dhabi, Sharjah garages. Clean history, best prices.')
@section('canonical', route('cars.index'))

@section('schema')
{{-- CollectionPage Schema --}}
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "CollectionPage",
    "name": "UAE Garage Cars for Sale - Car History Clean",
    "url": "{{ route('cars.index') }}",
    "description": "Browse verified used cars from Dubai, Abu Dhabi & Sharjah garages with clean history.",
    "mainEntity": {
        "@@type": "ItemList",
        "numberOfItems": {{ $cars->total() }},
        "itemListElement": [
            @foreach($cars as $index => $car)
            {
                "@@type": "ListItem",
                "position": {{ $index + 1 }},
                "url": "{{ route('cars.show', $car->slug) }}",
                "name": "{{ $car->car_name }}"
            }@if(!$loop->last),@endif
            @endforeach
        ]
    }
}
</script>

{{-- BreadcrumbList --}}
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "BreadcrumbList",
    "itemListElement": [
        {
            "@@type": "ListItem",
            "position": 1,
            "name": "Home",
            "item": "{{ url('/') }}"
        },
        {
            "@@type": "ListItem",
            "position": 2,
            "name": "Cars",
            "item": "{{ route('cars.index') }}"
        }
    ]
}
</script>
@endsection

@section('content')
<div class="mx-auto max-w-7xl px-4 py-12 md:px-8 md:py-16">
    <header class="mb-10">
        <h1 class="font-display text-3xl font-bold text-foreground md:text-4xl">
            UAE Garage Cars for Sale
        </h1>
        <div class="mt-2 flex flex-wrap items-center gap-3">
            <p class="text-muted">
                Verified used cars from Dubai, Abu Dhabi & Sharjah garages. Clean history, best prices.
            </p>
            @if($cars->total() > 0)
                <span class="inline-flex items-center gap-1.5 rounded-full border border-card-border bg-white px-3 py-1 text-xs font-medium text-muted shadow-sm">
                    <span class="font-bold text-accent">{{ $cars->total() }}</span> cars
                    @if($cars->lastPage() > 1)
                        — Page <span class="font-bold text-foreground">{{ $cars->currentPage() }}</span> of <span class="font-bold text-foreground">{{ $cars->lastPage() }}</span>
                    @endif
                </span>
            @endif
        </div>
    </header>

    @if($cars->count() > 0)
        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            @foreach($cars as $car)
                @include('partials.car-card', ['car' => $car])
            @endforeach
        </div>

        <div class="mt-12">
            {{ $cars->links('partials.pagination') }}
        </div>
    @else
        <div class="rounded-2xl border border-dashed border-card-border bg-background-secondary px-6 py-20 text-center text-muted">
            <p class="mb-4">No cars listed yet. Be the first to list your car!</p>
            <a href="{{ route('garage.submit') }}" class="btn-primary">List Your Car</a>
        </div>
    @endif
</div>
@endsection
