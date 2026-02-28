@extends('layouts.app')

@section('title', 'Car History Clean | Check VIN History in USA & Poland [2025]')
@section('description', 'Car History Clean offers permanent removal of VIN records. Check your car history report online today for 100% accurate results. Delete auction photos now.')
@section('canonical', route('products'))

@section('schema')
{{-- Article Schema --}}
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "Article",
    "mainEntityOfPage": {
        "@@type": "WebPage",
        "@@id": "{{ route('products') }}"
    },
    "headline": "Car History Clean: Permanent Car History Removal Service",
    "description": "Professional car history removal and VIN deletion from major auction platforms including autoAstat, BidCars, and BidFax.",
    "image": "https://cleanautohistory.com/storage/photos/tZkiwykw6DlxLprM23Okr7R3OpLvy1BA3n7adPh7.webp",  
    "author": {
        "@@type": "Organization",
        "name": "Car History Clean"
    },  
    "publisher": {
        "@@type": "Organization",
        "name": "Car History Clean",
        "logo": {
            "@@type": "ImageObject",
            "url": "{{ asset('favicon.svg') }}"
        }
    },
    "datePublished": "2024-01-01",
    "dateModified": "{{ date('Y-m-d') }}"
}
</script>

{{-- FAQPage Schema --}}
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "FAQPage",
    "mainEntity": [
        {
            "@@type": "Question",
            "name": "What is Car History Clean?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Car History Clean is a professional service that removes vehicle history, auction photos, and VIN records from search engines and databases permanently."
            }
        },
        {
            "@@type": "Question",
            "name": "How long does VIN removal take?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Most removals are completed within 48 to 72 hours, depending on the platform."
            }
        }
    ]
}
</script>

{{-- ItemList Schema for Services Listing --}}
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "ItemList",
    "name": "Car History Clean Services",
    "description": "Professional car history removal and VIN deletion from major auction platforms",
    "numberOfItems": {{ count($products ?? []) }},
    "itemListElement": [
        @foreach($products ?? [] as $index => $product)
        {
            "@@type": "ListItem",
            "position": {{ $index + 1 }},
            "name": "{{ $product['name'] }} History Removal",
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
            "name": "Car History Clean Services",
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
        
        <!-- Breadcrumbs Visibility -->
        <nav class="mb-8 flex text-sm text-zinc-500" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li><a href="{{ url('/') }}" class="hover:text-cyan-400">Home</a></li>
                <li><span class="mx-2">/</span></li>
                <li class="text-zinc-300" aria-current="page">Car History Clean Services</li>
            </ol>
        </nav>

        <header class="mb-16 text-center">
            <h1 class="font-display text-4xl font-bold tracking-tight text-white md:text-5xl lg:text-5xl">
                Car History Clean: <span class="gradient-text">Permanent Car History Removal Service</span>
            </h1>
            <div class="mt-4 flex flex-wrap justify-center gap-4 text-xs text-zinc-500 uppercase tracking-widest">
                <span class="flex items-center gap-1">
                    <svg class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" /></svg>
                    By <a href="{{ route('about') }}" class="hover:text-cyan-400 underline decoration-cyan-500/30">Car History Clean Expert</a>
                </span>
                <span class="flex items-center gap-1">
                    <svg class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                    Updated: <time datetime="{{ date('Y-m-d') }}">{{ date('M d, Y') }}</time>
                </span>
            </div>

            <p class="mx-auto mt-8 max-w-3xl text-lg text-zinc-400 leading-relaxed text-center">
                Welcome to <strong>Car History Clean</strong> – your trusted partner for professional car history removal and permanent VIN deletion. We provide guaranteed results for removing vehicle records from over 200+ global auction platforms including autoAstat, BidCars, and BidFax. Our <strong>Car History Clean</strong> service ensures that your vehicle's auction history is completely erased from search engines and history reports.
            </p>

            <!-- Table of Contents -->
            <div class="mt-12 inline-block rounded-2xl border border-zinc-800 bg-zinc-900/40 p-6 text-left">
                <h2 class="mb-4 text-sm font-bold text-white uppercase tracking-widest">Table of Contents</h2>
                <ul class="space-y-2 text-sm text-zinc-400">
                    <li><a href="#platforms" class="hover:text-cyan-400">1. Supported Car History Clean Platforms</a></li>
                    <li><a href="#comparison" class="hover:text-cyan-400">2. Service Type Benefits</a></li>
                    <li><a href="#faq" class="hover:text-cyan-400">3. Frequently Asked Questions</a></li>
                </ul>
            </div>
        </header>

        <!-- Dynamic Content -->
        <h2 id="platforms" class="mb-10 text-2xl font-bold text-white md:text-3xl text-center">
            Supported <span class="gradient-text">Car History Clean</span> Platforms
        </h2>

        <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
            @foreach($products ?? [] as $product)
                <article class="group relative flex flex-col overflow-hidden rounded-3xl border border-zinc-800 bg-zinc-900/40 p-6 transition-all hover:border-cyan-500/30 hover:bg-zinc-900 shadow-2xl">
                    <div class="absolute inset-0 bg-gradient-to-br from-cyan-500/5 to-transparent opacity-0 transition-opacity group-hover:opacity-100"></div>
                    
                    <a href="{{ route('services.show', $product['slug']) }}" class="relative mb-6 flex aspect-[16/9] w-full items-center justify-center rounded-2xl bg-zinc-950 p-6 border border-zinc-800 group-hover:border-zinc-700 transition-all overflow-hidden">
                        <img 
                            src="{{ $product['image'] }}" 
                            alt="Car History Clean for {{ $product['name'] }} History Removal" 
                            class="max-h-full max-w-full object-contain filter brightness-90 group-hover:brightness-110 transition-all duration-500 group-hover:scale-110"
                            onerror="this.src='https://via.placeholder.com/300x150?text={{ urlencode($product['name']) }}'"
                        >
                    </a>

                    <div class="relative flex-grow">
                        <div class="mb-4 flex items-start justify-between">
                            <h3 class="font-display text-xl font-bold text-white group-hover:text-cyan-400 transition-colors">
                                {{ $product['name'] }} Removal
                            </h3>
                            <div class="flex flex-col items-end">
                                <span class="text-[9px] font-black text-zinc-500 uppercase tracking-widest">Rate</span>
                                <span class="text-xl font-black text-cyan-400">${{ $product['price'] }}</span>
                            </div>
                        </div>
                        
                        <p class="text-sm leading-relaxed text-zinc-400 mb-8 line-clamp-3">
                            Fast and effective <strong>Car History Clean</strong> for {{ $product['name'] }}. {{ $product['description'] }}
                        </p>
                    </div>

                    <div class="relative mt-auto grid grid-cols-2 gap-4">
                        <a href="{{ route('services.show', $product['slug']) }}" 
                           class="flex h-12 items-center justify-center rounded-xl border border-zinc-700 bg-zinc-800/50 text-xs font-bold text-white transition-all hover:bg-zinc-800 hover:border-zinc-600"
                        >
                            LEARN MORE
                        </a>
                        <a href="https://wa.me/923004531248?text={{ urlencode('Hi, I want a Car History Clean from ' . $product['name'] . '. Please provide details for the $' . $product['price'] . ' service.') }}" 
                           target="_blank" rel="noopener noreferrer"
                           class="flex h-12 items-center justify-center gap-2 rounded-xl bg-cyan-500 text-xs font-bold text-zinc-950 transition-all hover:bg-cyan-400 active:scale-95 shadow-lg shadow-cyan-500/20"
                        >
                            CLEAN NOW
                        </a>
                    </div>
                </article>
            @endforeach
        </div>

        <!-- Comparison Table -->
        <div id="comparison" class="mt-24">
            <h2 class="mb-10 text-2xl font-bold text-white md:text-3xl text-center">Service Comparison Table</h2>
            <div class="overflow-x-auto rounded-3xl border border-zinc-800 bg-zinc-900/40 p-1">
                <table class="w-full text-left text-sm text-zinc-400">
                    <thead class="bg-zinc-950/50 text-xs uppercase tracking-widest text-white">
                        <tr>
                            <th class="px-6 py-4">Service Feature</th>
                            <th class="px-6 py-4">Standard Removal</th>
                            <th class="px-6 py-4 text-cyan-400">Express Clean</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-zinc-800">
                        <tr>
                            <td class="px-6 py-4 font-bold text-zinc-300">Permanent VIN Deletion</td>
                            <td class="px-6 py-4">✅ Included</td>
                            <td class="px-6 py-4 text-cyan-400 font-bold">✅ Included</td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 font-bold text-zinc-300">Photo Removal</td>
                            <td class="px-6 py-4">✅ Included</td>
                            <td class="px-6 py-4 text-cyan-400 font-bold">✅ Included</td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 font-bold text-zinc-300">Completion Time</td>
                            <td class="px-6 py-4">5-7 Days</td>
                            <td class="px-6 py-4 text-cyan-400 font-bold">24-48 Hours</td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 font-bold text-zinc-300">Success Rate</td>
                            <td class="px-6 py-4">99%</td>
                            <td class="px-6 py-4 text-cyan-400 font-bold">100%</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Definition List / FAQ -->
        <div id="faq" class="mt-24">
            <h2 class="mb-10 text-2xl font-bold text-white md:text-3xl text-center">Car History Clean Definition & FAQ</h2>
            <dl class="mx-auto max-w-3xl space-y-8">
                <div>
                    <dt class="text-lg font-bold text-cyan-400 mb-2">What is Car History Clean?</dt>
                    <dd class="text-zinc-400 leading-relaxed"><strong>Car History Clean</strong> is a specialized technical service designed to remove public vehicle information, including auction photos, salvage reports, and mileage data, from online search results and automotive databases.</dd>
                </div>
                <div>
                    <dt class="text-lg font-bold text-cyan-400 mb-2">Is the removal permanent?</dt>
                    <dd class="text-zinc-400 leading-relaxed">Yes, our removal process ensures that Once the data is deleted, it is gone from the target platforms permanently. We use official removal protocols for each auction site.</dd>
                </div>
            </dl>
        </div>

        <!-- Social Share Buttons -->
        <div class="mt-20 flex flex-col items-center border-t border-zinc-800 pt-12">
            <span class="mb-4 text-xs font-bold text-zinc-500 uppercase tracking-widest">Share this service</span>
            <div class="flex gap-4">
                <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(route('products')) }}" target="_blank" rel="noopener noreferrer" class="flex h-10 w-10 items-center justify-center rounded-lg bg-zinc-900 border border-zinc-800 text-zinc-400 hover:text-white hover:border-zinc-600 transition-all">
                    <svg class="h-5 w-5 fill-current" viewBox="0 0 24 24"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/></svg>
                </a>
                <a href="https://twitter.com/intent/tweet?url={{ urlencode(route('products')) }}&text=Check%20out%20Car%20History%20Clean%20for%20VIN%20removal" target="_blank" rel="noopener noreferrer" class="flex h-10 w-10 items-center justify-center rounded-lg bg-zinc-900 border border-zinc-800 text-zinc-400 hover:text-white hover:border-zinc-600 transition-all">
                    <svg class="h-5 w-5 fill-current" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
                </a>
                <a href="https://wa.me/?text=Professional%20VIN%20Removal%20at%20{{ urlencode(route('products')) }}" target="_blank" rel="noopener noreferrer" class="flex h-10 w-10 items-center justify-center rounded-lg bg-zinc-900 border border-zinc-800 text-zinc-400 hover:text-white hover:border-zinc-600 transition-all">
                    <svg class="h-5 w-5 fill-current" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.319 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.815-.981z"/></svg>
                </a>
            </div>
            <!-- Sources Section -->
            <div id="sources" class="mt-8 text-[10px] text-zinc-600 uppercase tracking-widest flex gap-4">
                <span>Verified by <a href="https://autostat.com" target="_blank" rel="noopener noreferrer" class="hover:text-zinc-400">AutoAstat</a></span>
                <span>Data Source: <a href="https://bidcars.com" target="_blank" rel="noopener noreferrer" class="hover:text-zinc-400">BidCars</a></span>
                <span>Reference: <a href="https://bidfax.info" target="_blank" rel="noopener noreferrer" class="hover:text-zinc-400">BidFax</a></span>
            </div>
        </div>

        <!-- Custom Request Section -->
        <div class="mt-24 relative overflow-hidden rounded-[2.5rem] border border-zinc-800 bg-gradient-to-br from-zinc-900 to-zinc-950 p-8 md:p-16 text-center">
            <div class="absolute top-0 right-0 -mr-20 -mt-20 h-64 w-64 rounded-full bg-cyan-500/10 blur-[100px]"></div>
            <div class="absolute bottom-0 left-0 -ml-20 -mb-20 h-64 w-64 rounded-full bg-violet-500/10 blur-[100px]"></div>
            
            <div class="relative max-w-3xl mx-auto">
                <span class="inline-block px-4 py-1.5 rounded-full bg-cyan-500/10 border border-cyan-500/20 text-cyan-400 text-[10px] font-black uppercase tracking-widest mb-6">Can't Find Your Site?</span>
                <h2 class="text-3xl font-bold text-white md:text-5xl leading-tight">We Cleanup <span class="gradient-text">All Sources</span></h2>
                <p class="mt-6 text-zinc-400 text-lg">If the platform containing your vehicle data isn't listed above, our <strong>Car History Clean</strong> experts can still handle it. We support 200+ specialized salvage and auction sites.</p>
                <div class="mt-10 flex flex-wrap justify-center gap-6">
                    <a href="https://wa.me/923004531248" target="_blank" rel="noopener noreferrer" class="flex h-14 items-center gap-3 rounded-2xl bg-emerald-500 px-10 text-sm font-black text-zinc-950 transition hover:bg-emerald-400 active:scale-95 shadow-xl shadow-emerald-500/30">
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
