@extends('layouts.app')

@section('title', 'Our Services | Professional Car History Removal - VIN Cleaner')
@section('description', 'Professional car history removal from major auction sites. We delete VIN information from autoAstat, BidCars, BidFax, and more permanently.')
@section('canonical', route('products'))

@section('schema')
{{-- ItemList Schema for Services Listing --}}
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "ItemList",
    "name": "Car History Removal Services",
    "description": "Professional car history removal from major auction platforms",
    "numberOfItems": {{ count($products) }},
    "itemListElement": [
        @foreach($products as $index => $product)
        {
            "@@type": "ListItem",
            "position": {{ $index + 1 }},
            "name": "{{ $product['name'] }}",
            "url": "{{ route('services.show', $product['slug']) }}",
            "item": {
                "@@type": "Service",
                "name": "{{ $product['name'] }} History Removal",
                "description": "{{ $product['description'] }}",
                "url": "{{ route('services.show', $product['slug']) }}",
                "provider": {
                    "@@type": "Organization",
                    "name": "Car History Clean",
                    "telephone": "+923004531248",
                    "email": "mateenali1122@gmail.com"
                },
                "offers": {
                    "@@type": "Offer",
                    "price": "{{ $product['price'] }}",
                    "priceCurrency": "USD",
                    "availability": "https://schema.org/InStock"
                },
                "image": "{{ $product['image'] }}"
            }
        }@if(!$loop->last),@endif
        @endforeach
    ]
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
            "name": "Services",
            "item": "{{ route('products') }}"
        }
    ]
}
</script>
@endsection

@section('content')
<section class="relative overflow-hidden bg-zinc-950 px-4 py-20 md:px-8">
    <div class="absolute inset-0 bg-gradient-to-b from-cyan-500/5 via-transparent to-transparent"></div>
    <div class="relative mx-auto max-w-7xl">
        <header class="mb-16 text-center">
            <h1 class="font-display text-4xl font-bold tracking-tight text-white md:text-5xl lg:text-6xl">
                Supported <span class="gradient-text">Platforms</span>
            </h1>
            <p class="mx-auto mt-6 max-w-2xl text-lg text-zinc-400">
                We provide guaranteed, permanent removal of vehicle history and auction photos from over 200+ global automotive databases and search engines.
            </p>
        </header>

        <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
            @foreach($products as $product)
                <article class="group relative flex flex-col overflow-hidden rounded-3xl border border-zinc-800 bg-zinc-900/40 p-6 transition-all hover:border-cyan-500/30 hover:bg-zinc-900 shadow-2xl">
                    <div class="absolute inset-0 bg-gradient-to-br from-cyan-500/5 to-transparent opacity-0 transition-opacity group-hover:opacity-100"></div>
                    
                    <a href="{{ route('services.show', $product['slug']) }}" class="relative mb-6 flex aspect-[16/9] w-full items-center justify-center rounded-2xl bg-zinc-950 p-6 border border-zinc-800 group-hover:border-zinc-700 transition-all overflow-hidden">
                        <img 
                            src="{{ $product['image'] }}" 
                            alt="{{ $product['name'] }} History Removal" 
                            class="max-h-full max-w-full object-contain filter brightness-90 group-hover:brightness-110 transition-all duration-500 group-hover:scale-110"
                            onerror="this.src='https://via.placeholder.com/300x150?text={{ urlencode($product['name']) }}'"
                        >
                    </a>

                    <div class="relative flex-grow">
                        <div class="mb-4 flex items-start justify-between">
                            <h2 class="font-display text-xl font-bold text-white group-hover:text-cyan-400 transition-colors">
                                {{ $product['name'] }}
                            </h2>
                            <div class="flex flex-col items-end">
                                <span class="text-[9px] font-black text-zinc-500 uppercase tracking-widest">Rate</span>
                                <span class="text-xl font-black text-cyan-400">${{ $product['price'] }}</span>
                            </div>
                        </div>
                        
                        <p class="text-sm leading-relaxed text-zinc-400 mb-8 line-clamp-3">
                            {{ $product['description'] }}
                        </p>
                    </div>

                    <div class="relative mt-auto grid grid-cols-2 gap-4">
                        <a href="{{ route('services.show', $product['slug']) }}" 
                           class="flex h-12 items-center justify-center rounded-xl border border-zinc-700 bg-zinc-800/50 text-xs font-bold text-white transition-all hover:bg-zinc-800 hover:border-zinc-600"
                        >
                            LEARN MORE
                        </a>
                        <a href="https://wa.me/923004531248?text={{ urlencode('Hi, I want to delete my car history from ' . $product['name'] . '. Please provide details for the $' . $product['price'] . ' service.') }}" 
                           target="_blank"
                           class="flex h-12 items-center justify-center gap-2 rounded-xl bg-cyan-500 text-xs font-bold text-zinc-950 transition-all hover:bg-cyan-400 active:scale-95 shadow-lg shadow-cyan-500/20"
                        >
                            CLEAN NOW
                        </a>
                    </div>
                </article>
            @endforeach
        </div>

        <!-- Custom Request Section -->
        <div class="mt-24 relative overflow-hidden rounded-[2.5rem] border border-zinc-800 bg-gradient-to-br from-zinc-900 to-zinc-950 p-8 md:p-16 text-center">
            <div class="absolute top-0 right-0 -mr-20 -mt-20 h-64 w-64 rounded-full bg-cyan-500/10 blur-[100px]"></div>
            <div class="absolute bottom-0 left-0 -ml-20 -mb-20 h-64 w-64 rounded-full bg-violet-500/10 blur-[100px]"></div>
            
            <div class="relative max-w-3xl mx-auto">
                <span class="inline-block px-4 py-1.5 rounded-full bg-cyan-500/10 border border-cyan-500/20 text-cyan-400 text-[10px] font-black uppercase tracking-widest mb-6">Can't Find Your Site?</span>
                <h2 class="text-3xl font-bold text-white md:text-5xl leading-tight">We Cleanup <span class="gradient-text">All Sources</span></h2>
                <p class="mt-6 text-zinc-400 text-lg">If the platform containing your vehicle data isn't listed above, our experts can still handle it. We support 200+ specialized salvage and auction sites.</p>
                <div class="mt-10 flex flex-wrap justify-center gap-6">
                    <a href="https://wa.me/923004531248" target="_blank" class="flex h-14 items-center gap-3 rounded-2xl bg-emerald-500 px-10 text-sm font-black text-zinc-950 transition hover:bg-emerald-400 active:scale-95 shadow-xl shadow-emerald-500/30">
                        WHATSAPP EXPERT
                    </a>
                    <a href="{{ route('contact') }}" class="flex h-14 items-center rounded-2xl border border-zinc-700 bg-zinc-900/50 px-10 text-sm font-black text-white transition hover:border-zinc-500 active:scale-95">
                        GET CUSTOM QUOTE
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@endsection
