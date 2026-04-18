@extends('layouts.app')

@section('title', 'Car History Removal Services UAE | VIN Cleaning Dubai & Abu Dhabi')
@section('description', 'Professional car history removal services in UAE. Remove auction records from Copart, IAAI, BidFax, AutoAstat. Dubai-based team serving UAE dealers. WhatsApp +971XXXXXXXX')
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
    "headline": "Car History Removal Services UAE | Dubai & Abu Dhabi VIN Cleaning",
    "description": "Professional car history removal services in UAE. Remove auction records from Copart, IAAI, BidFax, AutoAstat. Based in Dubai, serving UAE dealers.",
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
<section class="relative overflow-hidden bg-white px-4 py-20 md:px-8">
    <div class="absolute inset-0 bg-gradient-to-b from-blue-50/30 via-transparent to-transparent"></div>
    <div class="relative mx-auto max-w-7xl">
        
        <!-- Breadcrumbs Visibility -->
        <nav class="mb-8 flex text-sm text-muted" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li><a href="{{ url('/') }}" class="hover:text-accent font-medium">Home</a></li>
                <li><span class="mx-2 text-muted-light">/</span></li>
                <li class="text-foreground font-bold" aria-current="page">Car History Removal Services</li>
            </ol>
        </nav>

        <header class="mb-16 text-center">
            <h1 class="font-display text-4xl font-bold tracking-tight text-foreground md:text-5xl lg:text-5xl">
                Car History <span class="gradient-text">Removal Services</span> UAE
            </h1>
            <div class="mt-4 flex flex-wrap justify-center gap-4 text-[10px] text-muted uppercase tracking-widest font-bold">
                <span class="flex items-center gap-1.5">
                    <svg class="h-3 w-3 text-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" /></svg>
                    By <a href="{{ route('about') }}" class="hover:text-accent underline decoration-accent/30">Car History Experts</a>
                </span>
                <span class="flex items-center gap-1.5">
                    <svg class="h-3 w-3 text-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                    Updated: <time datetime="{{ date('Y-m-d') }}">{{ date('M d, Y') }}</time>
                </span>
            </div>

            <p class="mx-auto mt-8 max-w-3xl text-lg text-muted leading-relaxed text-center">
                Welcome to <strong>Car History Clean</strong> – your trusted partner for professional car history removal and permanent VIN deletion in Dubai. We provide guaranteed results for removing records from over 200+ global auction platforms.
            </p>

            <!-- Table of Contents -->
            <div class="mt-12 inline-block rounded-2xl border border-card-border bg-background-secondary p-6 text-left">
                <h2 class="mb-4 text-xs font-black text-foreground uppercase tracking-widest opacity-60">Table of Contents</h2>
                <ul class="space-y-2 text-sm font-medium text-muted">
                    <li><a href="#platforms" class="hover:text-accent transition-colors flex items-center gap-2">
                        <span class="h-1 w-1 rounded-full bg-accent"></span> 1. Supported Removal Platforms</a>
                    </li>
                    <li><a href="#comparison" class="hover:text-accent transition-colors flex items-center gap-2">
                        <span class="h-1 w-1 rounded-full bg-accent"></span> 2. Service Level Comparison</a>
                    </li>
                    <li><a href="#faq" class="hover:text-accent transition-colors flex items-center gap-2">
                        <span class="h-1 w-1 rounded-full bg-accent"></span> 3. Frequently Asked Questions</a>
                    </li>
                </ul>
            </div>
        </header>

        <!-- Dynamic Content -->
        <h2 id="platforms" class="mb-10 text-2xl font-bold text-foreground md:text-3xl text-center font-display">
            Supported <span class="gradient-text">Removal</span> Platforms
        </h2>

        <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
            @foreach($products ?? [] as $product)
                <article class="group relative flex flex-col overflow-hidden rounded-3xl border border-card-border bg-white p-6 transition-all hover:border-accent hover:shadow-xl">
                    <div class="absolute inset-0 bg-gradient-to-br from-blue-50/50 to-transparent opacity-0 transition-opacity group-hover:opacity-100"></div>
                    
                    <a href="{{ route('services.show', $product['slug']) }}" class="relative mb-6 flex aspect-[16/9] w-full items-center justify-center rounded-2xl bg-background-secondary p-6 border border-card-border group-hover:border-blue-100 transition-all overflow-hidden">
                        <img 
                            src="{{ $product['image'] }}" 
                            alt="Professional Removal for {{ $product['name'] }}" 
                            class="max-h-full max-w-full object-contain transition-all duration-500 group-hover:scale-105"
                            onerror="this.src='https://via.placeholder.com/300x150?text={{ urlencode($product['name']) }}'"
                        >
                    </a>

                    <div class="relative flex-grow">
                        <div class="mb-4 flex items-start justify-between">
                            <h3 class="font-display text-xl font-bold text-foreground group-hover:text-accent transition-colors">
                                {{ $product['name'] }}
                            </h3>
                            <div class="flex flex-col items-end">
                                <span class="text-[9px] font-black text-muted-light uppercase tracking-widest">Starts At</span>
                                <span class="text-xl font-black text-accent">${{ $product['price'] }}</span>
                            </div>
                        </div>
                        
                        <p class="text-sm leading-relaxed text-muted mb-8 line-clamp-3">
                            {{ $product['description'] }}
                        </p>
                    </div>

                    <div class="relative mt-auto grid grid-cols-2 gap-4">
                        <a href="{{ route('services.show', $product['slug']) }}" 
                           class="btn-secondary h-12 flex items-center justify-center text-xs font-bold"
                        >
                            LEARN MORE
                        </a>
                        <a href="https://wa.me/923004531248?text={{ urlencode('Hi, I want a Car History Clean from ' . $product['name'] . '. Please provide details for the $' . $product['price'] . ' service.') }}" 
                           target="_blank" rel="noopener noreferrer"
                           class="btn-primary h-12 flex items-center justify-center gap-2 text-xs font-bold shadow-lg shadow-accent/20"
                        >
                            CLEAN NOW
                        </a>
                    </div>
                </article>
            @endforeach
        </div>

        <!-- Comparison Table -->
        <div id="comparison" class="mt-32">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-foreground font-display">Service Comparison</h2>
                <p class="mt-2 text-muted">Choose the speed and intensity that fits your needs</p>
            </div>
            <div class="overflow-hidden rounded-3xl border border-card-border bg-white shadow-lg">
                <table class="w-full text-left text-sm text-muted">
                    <thead class="bg-background-secondary text-xs uppercase tracking-widest text-foreground font-bold">
                        <tr>
                            <th class="px-8 py-5">Service Feature</th>
                            <th class="px-8 py-5">Standard Removal</th>
                            <th class="px-8 py-5 text-accent">Express Clean</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-card-border">
                        <tr class="hover:bg-blue-50/30 transition-colors">
                            <td class="px-8 py-5 font-bold text-foreground">Permanent VIN Deletion</td>
                            <td class="px-8 py-5 text-green-600 font-bold">✓ Included</td>
                            <td class="px-8 py-5 text-accent font-black">✓ Included</td>
                        </tr>
                        <tr class="hover:bg-blue-50/30 transition-colors">
                            <td class="px-8 py-5 font-bold text-foreground">Photo Removal</td>
                            <td class="px-8 py-5 text-green-600 font-bold">✓ Included</td>
                            <td class="px-8 py-5 text-accent font-black">✓ Included</td>
                        </tr>
                        <tr class="hover:bg-blue-50/30 transition-colors">
                            <td class="px-8 py-5 font-bold text-foreground">Completion Time</td>
                            <td class="px-8 py-5">5-7 Business Days</td>
                            <td class="px-8 py-5 text-accent font-black">24-48 Hours</td>
                        </tr>
                        <tr class="hover:bg-blue-50/30 transition-colors">
                            <td class="px-8 py-5 font-bold text-foreground">Success Rate</td>
                            <td class="px-8 py-5">99% Guaranteed</td>
                            <td class="px-8 py-5 text-accent font-black">100% Guaranteed</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Definition List / FAQ -->
        <div id="faq" class="mt-32">
            <h2 class="mb-12 text-3xl font-bold text-foreground text-center font-display">Common Questions</h2>
            <div class="mx-auto max-w-4xl grid md:grid-cols-2 gap-8">
                <div class="bg-background-secondary p-8 rounded-2xl border border-card-border">
                    <h3 class="text-lg font-bold text-foreground mb-3">What is VIN Deletion?</h3>
                    <p class="text-muted leading-relaxed"><strong>VIN Deletion</strong> is a technical removal process that purges vehicle data from auction aggregators, ensuring images and pricing records are gone permanently.</p>
                </div>
                <div class="bg-background-secondary p-8 rounded-2xl border border-card-border">
                    <h3 class="text-lg font-bold text-foreground mb-3">Is it Permanent?</h3>
                    <p class="text-muted leading-relaxed">Yes. Our removal process follows official protocols for each platform. Once the data is deleted, it is removed from their server archives permanently.</p>
                </div>
            </div>
        </div>

        <!-- Custom Request Section -->
        <div class="mt-32 relative overflow-hidden rounded-[2.5rem] border border-card-border bg-gradient-to-br from-blue-600 to-blue-800 p-8 md:p-20 text-center shadow-2xl">
            <div class="absolute inset-0 bg-[url('/grid.svg')] opacity-10"></div>
            
            <div class="relative max-w-3xl mx-auto">
                <span class="inline-block px-4 py-1.5 rounded-full bg-white/10 border border-white/20 text-white text-[10px] font-black uppercase tracking-widest mb-6">Can't Find Your Site?</span>
                <h2 class="text-3xl font-bold text-white md:text-5xl leading-tight font-display">We Cleanup <span class="text-blue-200">All Sources</span></h2>
                <p class="mt-6 text-blue-50 text-lg opacity-90">If the platform containing your vehicle data isn't listed above, our experts can still handle it. We support 200+ specialized platforms.</p>
                <div class="mt-10 flex flex-wrap justify-center gap-6">
                    <a href="https://wa.me/923004531248" target="_blank" rel="noopener noreferrer" class="flex h-16 items-center gap-3 rounded-2xl bg-white px-10 text-sm font-black text-blue-700 transition hover:bg-blue-50 active:scale-95 shadow-xl">
                        WHATSAPP EXPERT
                    </a>
                    <a href="{{ route('contact') }}" class="flex h-16 items-center rounded-2xl border border-white/30 bg-white/10 px-10 text-sm font-black text-white transition hover:bg-white/20 active:scale-95">
                        GET CUSTOM QUOTE
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
