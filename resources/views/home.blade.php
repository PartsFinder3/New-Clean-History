@extends('layouts.app')

@section('title', 'Car History Removal UAE | Clean VIN Records | CarHistoryRemove')
@section('description', 'Professional car history removal service in UAE. Permanently delete vehicle records from Copart, IAAI, BidFax, AutoAstat. Trusted by UAE dealers. Serving Dubai, Abu Dhabi & Sharjah.')
@section('keywords', 'car history removal UAE, remove car history Dubai, VIN deletion service Dubai, clean car records UAE, auction history removal Abu Dhabi, BidFax removal UAE, Copart history remove UAE, used car history clean Dubai, salvage title removal UAE, car record deletion service, إزالة تاريخ السيارة الإمارات')

@section('schema')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "WebSite",
    "name": "Car History Clean",
    "url": "{{ url('/') }}",
    "potentialAction": {
        "@@type": "SearchAction",
        "target": "{{ url('/cars') }}?q={search_term_string}",
        "query-input": "required name=search_term_string"
    }
}
</script>
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "LocalBusiness",
    "name": "Car History Clean",
    "image": "{{ asset('favicon.ico') }}",
    "@@id": "{{ url('/') }}",
    "url": "{{ url('/') }}",
    "telephone": "+971XXXXXXXX",
    "email": "info@carhistoryremove.online",
    "address": {
        "@type": "PostalAddress",
        "addressCountry": "AE",
        "addressRegion": "Dubai"
    },
    "areaServed": ["AE", "US", "EU", "GE"],
    "openingHoursSpecification": {
        "@@type": "OpeningHoursSpecification",
        "dayOfWeek": [
            "Monday",
            "Tuesday",
            "Wednesday",
            "Thursday",
            "Friday",
            "Saturday",
            "Sunday"
        ],
        "opens": "00:00",
        "closes": "23:59"
    }
}
</script>
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "FAQPage",
    "mainEntity": [
        {
            "@type": "Question",
            "name": "How long does VIN history removal take in UAE?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "The process typically takes 3–7 business days depending on number of platforms. We serve Dubai, Abu Dhabi, Sharjah and all UAE emirates."
            }
        },
        {
            "@type": "Question",
            "name": "Can you remove car history records in Dubai?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. We serve UAE dealers and private owners, removing records from Copart, IAAI, BidFax and 200+ platforms. Based in Dubai with local support."
            }
        },
        {
            "@type": "Question",
            "name": "Is the history removal permanent?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "We remove your vehicle data from 200+ third-party auction aggregator platforms. Original source records at Copart/IAAI may remain internally but are de-indexed from public search engines."
            }
        },
        {
            "@type": "Question",
            "name": "Which auction sites do you cover in UAE?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "We cover Copart, IAAI, BidFax, AutoAstat, and 200+ other platforms. We also remove cached images from Google and Bing search results."
            }
        }
    ]
}
</script>
@endsection

@section('content')
<section class="relative overflow-hidden border-b border-card-border px-4 py-20 md:px-8 md:py-28 bg-gradient-to-br from-blue-50 via-white to-white">
    <div class="absolute inset-0 bg-[url('/grid.svg')] opacity-5"></div>
    <div class="relative mx-auto max-w-6xl">
        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-blue-100 text-blue-700 text-sm font-medium mb-6">
            <span class="w-2 h-2 rounded-full bg-green-500"></span>
            Serving UAE, USA & Europe
        </div>
        <h1 class="font-display text-4xl font-bold tracking-tight text-foreground md:text-5xl lg:text-6xl">
            Car History <span class="gradient-text">Removal</span> UAE
        </h1>
        <p class="mt-6 max-w-2xl text-lg text-muted md:text-xl leading-relaxed">
            Professional VIN history removal service in Dubai & UAE. Delete auction photos from Copart, IAAI, BidFax. Trusted by UAE car dealers to restore vehicle resale value.
        </p>
        <div class="mt-4 p-4 bg-yellow-50 border border-yellow-200 rounded-lg max-w-2xl">
            <p class="text-sm text-yellow-800">
                <strong>Disclaimer:</strong> We remove your vehicle data from 200+ third-party auction aggregator platforms. Original source records at Copart/IAAI may remain internally but are de-indexed from public search engines.
            </p>
        </div>
        <div class="mt-8 flex flex-wrap gap-4">
            <a href="https://wa.me/923004531248?text=Hi, I need car history removal service in UAE" target="_blank" class="btn-primary inline-flex items-center gap-2">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                Get Free WhatsApp Audit
            </a>
            <a href="{{ route('cars.index') }}" class="btn-secondary inline-flex items-center">
                Browse Garage Cars
            </a>
        </div>
    </div>
</section>

<!-- UAE Garage Cars Section (Priority placement below header) -->
<section class="border-b border-card-border bg-white px-4 py-20 md:px-8">
    <div class="mx-auto max-w-6xl">
        <div class="text-center mb-16">
            <h2 class="font-display text-3xl font-bold text-foreground md:text-5xl lg:text-6xl">
                UAE Garage <span class="gradient-text">Cars for Sale</span>
            </h2>
            <div class="mt-4 flex flex-wrap justify-center gap-3 text-sm font-bold uppercase tracking-widest text-muted">
                <span class="px-3 py-1 rounded-full bg-blue-50 border border-blue-100">Dubai</span>
                <span class="px-3 py-1 rounded-full bg-blue-50 border border-blue-100">Abu Dhabi</span>
                <span class="px-3 py-1 rounded-full bg-blue-50 border border-blue-100">Sharjah</span>
            </div>
            <p class="text-muted mt-6 text-lg max-w-2xl mx-auto leading-relaxed">
                Premium used car marketplace in UAE. Browse verified inventory from leading dealerships and private sellers in Dubai, Abu Dhabi, and across the Emirates.
            </p>
        </div>

        <!-- This section is ready for manual entries as requested -->
        <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
            <!-- Manual Entry Placeholder 1 -->
            <div class="premium-car-card group flex flex-col bg-white rounded-[2.5rem] border border-card-border overflow-hidden shadow-sm hover:shadow-2xl hover:-translate-y-2 transition-all duration-500">
                <div class="relative aspect-[4/3] overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1503376780353-7e6692767b70?auto=format&fit=crop&q=80&w=800" alt="Premium Car Dubai" class="object-cover w-full h-full group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute top-4 left-4 flex gap-2">
                        <span class="px-3 py-1 rounded-full bg-accent text-white text-[10px] font-black uppercase tracking-widest">Featured</span>
                    </div>
                </div>
                <div class="p-8 flex flex-col flex-1">
                    <h3 class="text-xl font-bold text-foreground mb-4 group-hover:text-accent transition-colors font-display">Porsche 911 Carrera</h3>
                    <div class="grid grid-cols-2 gap-4 mb-6">
                        <div class="text-xs font-bold text-muted-light uppercase tracking-widest">Location: <span class="text-foreground">Dubai Marina</span></div>
                        <div class="text-xs font-bold text-muted-light uppercase tracking-widest">Year: <span class="text-foreground">2022</span></div>
                    </div>
                    <div class="mt-auto flex items-center justify-between border-t border-card-border pt-6">
                        <div class="text-2xl font-black text-foreground">AED 425,000</div>
                        <a href="{{ route('contact') }}" class="w-12 h-12 rounded-2xl bg-blue-50 text-accent flex items-center justify-center hover:bg-accent hover:text-white transition-all">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Manual Entry Placeholder 2 -->
            <div class="premium-car-card group flex flex-col bg-white rounded-[2.5rem] border border-card-border overflow-hidden shadow-sm hover:shadow-2xl hover:-translate-y-2 transition-all duration-500">
                <div class="relative aspect-[4/3] overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1555215695-3004980ad54e?auto=format&fit=crop&q=80&w=800" alt="Premium Car Abu Dhabi" class="object-cover w-full h-full group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute top-4 left-4 flex gap-2">
                        <span class="px-3 py-1 rounded-full bg-success text-white text-[10px] font-black uppercase tracking-widest">Verified</span>
                    </div>
                </div>
                <div class="p-8 flex flex-col flex-1">
                    <h3 class="text-xl font-bold text-foreground mb-4 group-hover:text-accent transition-colors font-display">BMW X7 xDrive40i</h3>
                    <div class="grid grid-cols-2 gap-4 mb-6">
                        <div class="text-xs font-bold text-muted-light uppercase tracking-widest">Location: <span class="text-foreground">Abu Dhabi</span></div>
                        <div class="text-xs font-bold text-muted-light uppercase tracking-widest">Year: <span class="text-foreground">2023</span></div>
                    </div>
                    <div class="mt-auto flex items-center justify-between border-t border-card-border pt-6">
                        <div class="text-2xl font-black text-foreground">AED 385,000</div>
                        <a href="{{ route('contact') }}" class="w-12 h-12 rounded-2xl bg-blue-50 text-accent flex items-center justify-center hover:bg-accent hover:text-white transition-all">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Manual Entry Placeholder 3 -->
            <div class="premium-car-card group flex flex-col bg-white rounded-[2.5rem] border border-card-border overflow-hidden shadow-sm hover:shadow-2xl hover:-translate-y-2 transition-all duration-500">
                <div class="relative aspect-[4/3] overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1542281286-9e0a16bb7366?auto=format&fit=crop&q=80&w=800" alt="Premium Car UAE" class="object-cover w-full h-full group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute top-4 left-4 flex gap-2">
                        <span class="px-3 py-1 rounded-full bg-blue-600 text-white text-[10px] font-black uppercase tracking-widest">Hot Deal</span>
                    </div>
                </div>
                <div class="p-8 flex flex-col flex-1">
                    <h3 class="text-xl font-bold text-foreground mb-4 group-hover:text-accent transition-colors font-display">Mercedes-Benz G63 AMG</h3>
                    <div class="grid grid-cols-2 gap-4 mb-6">
                        <div class="text-xs font-bold text-muted-light uppercase tracking-widest">Location: <span class="text-foreground">Sharjah Auto</span></div>
                        <div class="text-xs font-bold text-muted-light uppercase tracking-widest">Year: <span class="text-foreground">2021</span></div>
                    </div>
                    <div class="mt-auto flex items-center justify-between border-t border-card-border pt-6">
                        <div class="text-2xl font-black text-foreground">AED 650,000</div>
                        <a href="{{ route('contact') }}" class="w-12 h-12 rounded-2xl bg-blue-50 text-accent flex items-center justify-center hover:bg-accent hover:text-white transition-all">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-16 text-center">
            <a href="{{ route('cars.index') }}" class="btn-primary inline-flex items-center gap-3">
                Explore Full UAE Inventory
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </a>
        </div>
    </div>
</section>

<!-- Latest Auction Discoveries (Automatic Database Integration) -->
<section class="border-b border-card-border bg-background-secondary px-4 py-20 md:px-8">
    <div class="mx-auto max-w-6xl">
        <div class="flex items-end justify-between mb-12">
            <div>
                <h2 class="font-display text-3xl font-bold text-foreground md:text-4xl">
                    Latest Auction <span class="gradient-text">Discoveries</span>
                </h2>
                <p class="text-muted mt-3 text-lg leading-relaxed">Direct vehicle records from global insurance and salvage platforms</p>
            </div>
        </div>

        @if($featuredCars->count() > 0)
            <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
                @foreach($featuredCars as $car)
                    @include('partials.car-card', ['car' => $car])
                @endforeach
            </div>
        @else
            <div class="text-center py-20 rounded-[2.5rem] bg-white border border-card-border shadow-sm">
                <p class="text-muted font-medium">Syncing latest global auction records...</p>
            </div>
        @endif    </div>
</section>

<section id="steps-of-work" class="relative bg-background-secondary py-20 px-4 md:px-8 border-b border-card-border">
    <div class="mx-auto max-w-6xl">
        <div class="text-center mb-16">
            <h2 class="font-display text-3xl font-bold text-foreground md:text-4xl">
                How Car History <span class="gradient-text">Removal Works</span> in UAE
            </h2>
            <p class="mt-4 text-muted max-w-2xl mx-auto">
                Our proven 4-step process ensures your vehicle history is cleared from 200+ platforms including Copart, IAAI, and BidFax.
            </p>
        </div>

        <div class="grid gap-8 md:grid-cols-4 relative">
            <!-- Connector Line (Desktop) -->
            <div class="hidden md:block absolute top-1/4 left-0 right-0 h-0.5 bg-gradient-to-r from-blue-200 via-blue-300 to-blue-200 -z-10"></div>

            <!-- Step 1 -->
            <div class="group relative flex flex-col items-center text-center">
                <div class="w-16 h-16 rounded-2xl bg-white border border-card-border flex items-center justify-center mb-6 group-hover:border-accent group-hover:shadow-lg transition-all duration-300">
                    <span class="text-2xl font-bold gradient-text">01</span>
                </div>
                <h3 class="text-lg font-bold text-foreground mb-2 font-display">Free VIN Audit</h3>
                <p class="text-sm text-muted">Send us your VIN via WhatsApp. We search 200+ auction sites and search engines for your car's history.</p>
            </div>

            <!-- Step 2 -->
            <div class="group relative flex flex-col items-center text-center">
                <div class="w-16 h-16 rounded-2xl bg-white border border-card-border flex items-center justify-center mb-6 group-hover:border-accent group-hover:shadow-lg transition-all duration-300">
                    <span class="text-2xl font-bold gradient-text">02</span>
                </div>
                <h3 class="text-lg font-bold text-foreground mb-2 font-display">Expert Analysis</h3>
                <p class="text-sm text-muted">Our UAE-based team analyzes where your vehicle data appears and creates a custom removal strategy.</p>
            </div>

            <!-- Step 3 -->
            <div class="group relative flex flex-col items-center text-center">
                <div class="w-16 h-16 rounded-2xl bg-white border border-card-border flex items-center justify-center mb-6 group-hover:border-accent group-hover:shadow-lg transition-all duration-300">
                    <span class="text-2xl font-bold gradient-text">03</span>
                </div>
                <h3 class="text-lg font-bold text-foreground mb-2 font-display">Data Removal</h3>
                <p class="text-sm text-muted">We submit legal removal requests to BidFax, Copart aggregators, Google, and Bing. 3-7 business days.</p>
            </div>

            <!-- Step 4 -->
            <div class="group relative flex flex-col items-center text-center">
                <div class="w-16 h-16 rounded-2xl bg-white border border-card-border flex items-center justify-center mb-6 group-hover:border-success group-hover:shadow-lg transition-all duration-300">
                    <span class="text-2xl font-bold text-success">04</span>
                </div>
                <h3 class="text-lg font-bold text-foreground mb-2 font-display">Clean Report</h3>
                <p class="text-sm text-muted">Receive confirmation that your VIN history has been removed from public databases and search results.</p>
            </div>
        </div>
    </div>
</section>

<section class="mx-auto max-w-6xl px-4 py-20 md:px-8">
    <div class="grid md:grid-cols-2 gap-12 items-center">
        <div>
            <h2 class="font-display text-3xl font-bold text-foreground md:text-4xl leading-tight">
                Remove <span class="gradient-text">Auction Photos</span> from Google & BidFax
            </h2>
            <p class="mt-6 text-muted text-lg leading-relaxed">
                Damaged car photos and accident records appearing in search results can reduce your vehicle's resale value by 15-25%. Our specialized service removes:
            </p>
            <ul class="mt-8 space-y-4">
                <li class="flex items-start gap-3">
                    <div class="mt-1 flex-shrink-0 w-5 h-5 rounded-full bg-blue-100 flex items-center justify-center">
                        <svg class="w-3 h-3 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                    </div>
                    <div>
                        <span class="text-foreground font-semibold">BidFax & Copart Aggregators:</span>
                        <p class="text-sm text-muted">Remove records from 200+ third-party platforms that scrape auction data.</p>
                    </div>
                </li>
                <li class="flex items-start gap-3">
                    <div class="mt-1 flex-shrink-0 w-5 h-5 rounded-full bg-blue-100 flex items-center justify-center">
                        <svg class="w-3 h-3 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                    </div>
                    <div>
                        <span class="text-foreground font-semibold">Google & Bing Images:</span>
                        <p class="text-sm text-muted">De-index cached photos from search engines. Works for Dubai, Abu Dhabi, and global markets.</p>
                    </div>
                </li>
            </ul>
        </div>
        <div class="relative group">
            <div class="absolute inset-0 bg-blue-100 blur-3xl rounded-full opacity-50"></div>
            <div class="relative glass-card p-8">
                <div class="grid grid-cols-2 gap-4">
                    <div class="p-4 rounded-xl bg-white border border-card-border">
                        <span class="text-xs text-muted uppercase tracking-wider font-semibold">Resale Value</span>
                        <p class="text-2xl font-bold text-foreground mt-1">+15-20%</p>
                    </div>
                    <div class="p-4 rounded-xl bg-white border border-card-border">
                        <span class="text-xs text-muted uppercase tracking-wider font-semibold">Satisfaction</span>
                        <p class="text-2xl font-bold text-foreground mt-1">98%</p>
                    </div>
                    <div class="col-span-2 p-4 rounded-xl bg-blue-50 border border-blue-200">
                        <p class="text-xs text-accent font-bold uppercase tracking-wider">Countries Served</p>
                        <p class="text-xl text-foreground font-bold mt-1">UAE, USA, Europe & 12+ Countries</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="pricing" class="relative bg-background-secondary py-20 px-4 md:px-8 border-y border-card-border">
    <div class="mx-auto max-w-6xl text-center mb-16">
        <h2 class="font-display text-3xl font-bold text-foreground md:text-4xl">
            Car History Removal <span class="gradient-text">Pricing</span> Plans
        </h2>
        <p class="mt-4 text-muted max-w-2xl mx-auto">
            Choose the package that fits your needs. Bulk discounts available for multiple VINs. Prices in USD.
        </p>
    </div>

    <div class="mx-auto max-w-6xl grid gap-8 md:grid-cols-3">
        <!-- Basic Plan -->
        <div class="glass-card flex flex-col p-8 transition-all hover:border-accent">
            <h3 class="text-foreground font-display text-xl font-bold mb-2">Bronze Plan</h3>
            <div class="flex items-baseline gap-1 mb-6">
                <span class="text-4xl font-black text-foreground">$40</span>
                <span class="text-muted text-sm">/per site</span>
            </div>
            <ul class="space-y-4 mb-8 text-sm text-muted text-left">
                <li class="flex items-center gap-2">
                    <svg class="w-4 h-4 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    Single Site Removal
                </li>
                <li class="flex items-center gap-2">
                    <svg class="w-4 h-4 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    Data Removal from Aggregators
                </li>
                <li class="flex items-center gap-2">
                    <svg class="w-4 h-4 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    Google Cache Removal
                </li>
                <li class="flex items-center gap-2 opacity-50">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                    Multiple Site Discount
                </li>
            </ul>
            <a href="https://wa.me/923004531248?text=I want to order the Bronze Plan ($40) for 1 site removal." target="_blank" class="mt-auto w-full py-3 rounded-xl bg-white border border-card-border text-foreground font-bold hover:border-accent hover:text-accent transition-colors text-center">
                Order Bronze Plan
            </a>
        </div>

        <!-- Popular Plan -->
        <div class="relative glass-card flex flex-col p-8 border-2 border-accent shadow-lg">
            <div class="absolute -top-4 left-1/2 -translate-x-1/2 bg-accent text-white text-xs font-bold uppercase px-4 py-1.5 rounded-full tracking-wider">
                Most Popular
            </div>
            <h3 class="text-foreground font-display text-xl font-bold mb-2">Silver Plan</h3>
            <div class="flex items-baseline gap-1 mb-6">
                <span class="text-4xl font-black text-foreground">$100</span>
                <span class="text-muted text-sm">/for 3 sites</span>
            </div>
            <ul class="space-y-4 mb-8 text-sm text-muted text-left">
                <li class="flex items-center gap-2">
                    <svg class="w-4 h-4 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    3 Site Removal
                </li>
                <li class="flex items-center gap-2 font-bold text-foreground">
                    <svg class="w-4 h-4 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    Save $20 instantly
                </li>
                <li class="flex items-center gap-2">
                    <svg class="w-4 h-4 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    Data Removal from Aggregators
                </li>
                <li class="flex items-center gap-2">
                    <svg class="w-4 h-4 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    Google & Bing Cache Removal
                </li>
            </ul>
            <a href="https://wa.me/923004531248?text=I want to order the Silver Plan ($100) for 3 sites removal." target="_blank" class="mt-auto w-full py-3 rounded-xl bg-accent text-white font-bold hover:bg-accent-hover active:scale-95 transition-all text-center">
                Order Silver Plan
            </a>
        </div>

        <!-- Premium Plan -->
        <div class="glass-card flex flex-col p-8 transition-all hover:border-accent">
            <h3 class="text-foreground font-display text-xl font-bold mb-2">Gold Plan</h3>
            <div class="flex items-baseline gap-1 mb-6">
                <span class="text-4xl font-black text-foreground">$150</span>
                <span class="text-muted text-sm">/for 5 sites</span>
            </div>
            <ul class="space-y-4 mb-8 text-sm text-muted text-left">
                <li class="flex items-center gap-2">
                    <svg class="w-4 h-4 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    5 Site Removal
                </li>
                <li class="flex items-center gap-2 font-bold text-foreground">
                    <svg class="w-4 h-4 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    Save $50 instantly
                </li>
                <li class="flex items-center gap-2">
                    <svg class="w-4 h-4 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    Data Removal from Aggregators
                </li>
                <li class="flex items-center gap-2">
                    <svg class="w-4 h-4 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    Priority Processing
                </li>
            </ul>
            <a href="https://wa.me/923004531248?text=I want to order the Gold Plan ($150) for 5 sites removal." target="_blank" class="mt-auto w-full py-3 rounded-xl bg-white border border-card-border text-foreground font-bold hover:border-accent hover:text-accent transition-colors text-center">
                Order Gold Plan
            </a>
        </div>
    </div>
</section>

<section class="bg-white border-t border-card-border px-4 py-20 md:px-8">
    <div class="mx-auto max-w-6xl">
        <h2 class="font-display text-2xl font-semibold text-foreground md:text-3xl text-center mb-4">
            Frequently Asked Questions
        </h2>
        <p class="text-muted text-center mb-12 max-w-2xl mx-auto">Common questions about our car history removal service in Dubai and UAE</p>
        <div class="grid md:grid-cols-2 gap-6">
            <div class="glass-card p-6">
                <h3 class="text-foreground font-bold mb-2">How long does VIN removal take in UAE?</h3>
                <p class="text-sm text-muted leading-relaxed">The process typically takes 3–7 business days depending on number of platforms. Dubai and UAE clients get priority processing.</p>
            </div>
            <div class="glass-card p-6">
                <h3 class="text-foreground font-bold mb-2">Can you remove car history in Dubai?</h3>
                <p class="text-sm text-muted leading-relaxed">Yes. We serve UAE dealers and private owners, removing records from Copart, IAAI, BidFax and 200+ platforms. Based in Dubai with local support.</p>
            </div>
            <div class="glass-card p-6">
                <h3 class="text-foreground font-bold mb-2">Is the history removal permanent?</h3>
                <p class="text-sm text-muted leading-relaxed">We remove your vehicle data from 200+ third-party auction aggregator platforms. Original source records at Copart/IAAI may remain internally but are de-indexed from public search engines.</p>
            </div>
            <div class="glass-card p-6">
                <h3 class="text-foreground font-bold mb-2">Which auction sites do you cover?</h3>
                <p class="text-sm text-muted leading-relaxed">We cover Copart, IAAI, BidFax, AutoAstat, and 200+ other platforms. We also remove cached images from Google and Bing search results.</p>
            </div>
        </div>
    </div>
</section>

<section class="relative overflow-hidden bg-gradient-to-br from-blue-50 via-white to-blue-50 border-t border-card-border px-4 py-20 md:px-8">
    <div class="absolute inset-0 bg-[url('/grid.svg')] opacity-5"></div>
    <div class="relative mx-auto max-w-4xl text-center">
        <h2 class="font-display text-3xl font-bold text-foreground md:text-4xl">
            Ready to <span class="gradient-text">Clean</span> Your Car History?
        </h2>
        <p class="mt-6 text-muted text-lg max-w-2xl mx-auto">
            Get a professional VIN audit and permanent removal from 200+ auction sites. Serving Dubai, Abu Dhabi & global markets since 2018.
        </p>
        <div class="mt-10 flex flex-wrap justify-center gap-4">
            <a href="https://wa.me/923004531248?text=Hi, I want a free VIN audit for car history removal" target="_blank" class="btn-primary inline-flex items-center gap-2 shadow-lg hover:shadow-xl translate-y-0 hover:-translate-y-1 transition-all">
                <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L0 24l6.335-1.662c1.72.94 3.659 1.437 5.634 1.437h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
                Free WhatsApp Audit
            </a>
            <a href="{{ route('contact') }}" class="btn-secondary flex items-center gap-2">
                Inquire via Form
            </a>
        </div>
    </div>
</section>
@endsection
