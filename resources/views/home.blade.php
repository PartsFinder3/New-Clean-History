@extends('layouts.app')

@section('title', 'Car History Clean – Check VIN History in USA, Germany, Poland & Australia')
@section('description', 'Check your car history clean report online. Get accurate VIN check reports for vehicles in USA, Germany, Poland, and Australia. Detect accidents, mileage fraud, theft records instantly.')

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
    "telephone": "+923004531248",
    "email": "mateenali1122@gmail.com",
    "address": {
        "@@type": "PostalAddress",
        "streetAddress": "Main Road",
        "addressLocality": "Lahore",
        "addressRegion": "Punjab",
        "postalCode": "54000",
        "addressCountry": "PK"
    },
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
@endsection

@section('content')
<section class="relative overflow-hidden border-b border-zinc-800/80 px-4 py-20 md:px-8 md:py-28">
    <div class="absolute inset-0 bg-gradient-to-br from-cyan-950/20 via-transparent to-violet-950/10"></div>
    <div class="relative mx-auto max-w-6xl">
        <h1 class="font-display text-4xl font-bold tracking-tight text-white md:text-5xl lg:text-6xl">
            Permanent <span class="gradient-text">Car History</span> Removal Service
        </h1>
        <p class="mt-6 max-w-2xl text-lg text-zinc-400 md:text-xl leading-relaxed">
            Clean title, deleted auction photos, and legal record removal. Trusted by dealers and private owners to restore vehicle privacy and resale value.
        </p>
        <div class="mt-10 flex flex-wrap gap-4">
            <a href="#steps-of-work" class="inline-flex min-h-[44px] items-center justify-center rounded-xl bg-cyan-500 px-8 py-3 text-sm font-bold text-zinc-950 transition hover:bg-cyan-400 active:scale-95 shadow-lg shadow-cyan-500/20">
                HOW IT WORKS
            </a>
            <a href="{{ route('cars.index') }}" class="inline-flex min-h-[44px] items-center justify-center rounded-xl border border-zinc-700 bg-zinc-900/50 px-8 py-3 text-sm font-bold text-zinc-300 transition hover:border-cyan-500/50 hover:text-cyan-400 active:scale-95">
                BROWSE CARS
            </a>
        </div>
    </div>
</section>

<section id="steps-of-work" class="relative bg-zinc-950/50 py-20 px-4 md:px-8 border-y border-zinc-800/80">
    <div class="mx-auto max-w-6xl">
        <div class="text-center mb-16">
            <h2 class="font-display text-3xl font-bold text-white md:text-4xl">
                How It <span class="gradient-text">Works</span>
            </h2>
            <p class="mt-4 text-zinc-400 max-w-2xl mx-auto">
                Our proven 4-step process ensures your vehicle history is permanently cleared from public databases and search engines.
            </p>
        </div>

        <div class="grid gap-8 md:grid-cols-4 relative">
            <!-- Connector Line (Desktop) -->
            <div class="hidden md:block absolute top-1/4 left-0 right-0 h-0.5 bg-gradient-to-r from-cyan-500/20 via-violet-500/20 to-cyan-500/20 -z-10"></div>
            
            <!-- Step 1 -->
            <div class="group relative flex flex-col items-center text-center">
                <div class="w-16 h-16 rounded-2xl bg-zinc-900 border border-zinc-800 flex items-center justify-center mb-6 group-hover:border-cyan-500/50 group-hover:shadow-[0_0_20px_rgba(34,211,238,0.15)] transition-all duration-300">
                    <span class="text-2xl font-bold gradient-text">01</span>
                </div>
                <h3 class="text-lg font-bold text-white mb-2 font-display">VIN Audit</h3>
                <p class="text-sm text-zinc-500">Provide your VIN number for a free comprehensive search across all auction sites and search engines.</p>
            </div>

            <!-- Step 2 -->
            <div class="group relative flex flex-col items-center text-center">
                <div class="w-16 h-16 rounded-2xl bg-zinc-900 border border-zinc-800 flex items-center justify-center mb-6 group-hover:border-violet-500/50 group-hover:shadow-[0_0_20px_rgba(167,139,250,0.15)] transition-all duration-300">
                    <span class="text-2xl font-bold gradient-text">02</span>
                </div>
                <h3 class="text-lg font-bold text-white mb-2 font-display">Expert Analysis</h3>
                <p class="text-sm text-zinc-500">Our experts analyze the source data to determine the most effective legal removal strategy for your specific vehicle.</p>
            </div>

            <!-- Step 3 -->
            <div class="group relative flex flex-col items-center text-center">
                <div class="w-16 h-16 rounded-2xl bg-zinc-900 border border-zinc-800 flex items-center justify-center mb-6 group-hover:border-cyan-500/50 group-hover:shadow-[0_0_20px_rgba(34,211,238,0.15)] transition-all duration-300">
                    <span class="text-2xl font-bold gradient-text">03</span>
                </div>
                <h3 class="text-lg font-bold text-white mb-2 font-display">Data Purge</h3>
                <p class="text-sm text-zinc-500">We work directly with auction sites (Copart, IAAI) and search engines (Google, Bing) to permanently delete records.</p>
            </div>

            <!-- Step 4 -->
            <div class="group relative flex flex-col items-center text-center">
                <div class="w-16 h-16 rounded-2xl bg-zinc-900 border border-zinc-800 flex items-center justify-center mb-6 group-hover:border-emerald-500/50 group-hover:shadow-[0_0_20px_rgba(16,185,129,0.15)] transition-all duration-300">
                    <span class="text-2xl font-bold gradient-text">04</span>
                </div>
                <h3 class="text-lg font-bold text-white mb-2 font-display">Final Clean Report</h3>
                <p class="text-sm text-zinc-500">Once the process is complete, we provide a final report confirming your vehicle history is now clean and hidden.</p>
            </div>
        </div>
    </div>
</section>

<section class="mx-auto max-w-6xl px-4 py-20 md:px-8">
    <div class="grid md:grid-cols-2 gap-12 items-center">
        <div>
            <h2 class="font-display text-3xl font-bold text-white md:text-4xl leading-tight">
                Remove <span class="gradient-text">Auction Photos</span> & History from Google
            </h2>
            <p class="mt-6 text-zinc-400 text-lg leading-relaxed">
                Damaged car photos and accident records on Google can significantly reduce your car's resale value. Our specialized VIN cleaner service targets:
            </p>
            <ul class="mt-8 space-y-4">
                <li class="flex items-start gap-3">
                    <div class="mt-1 flex-shrink-0 w-5 h-5 rounded-full bg-cyan-500/10 border border-cyan-500/50 flex items-center justify-center">
                        <svg class="w-3 h-3 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                    </div>
                    <div>
                        <span class="text-white font-semibold">Legacy Data Removal:</span>
                        <p class="text-sm text-zinc-500">Eliminate records from Copart, IAAI, BidFax, and 20+ other platforms.</p>
                    </div>
                </li>
                <li class="flex items-start gap-3">
                    <div class="mt-1 flex-shrink-0 w-5 h-5 rounded-full bg-violet-500/10 border border-violet-500/50 flex items-center justify-center">
                        <svg class="w-3 h-3 text-violet-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                    </div>
                    <div>
                        <span class="text-white font-semibold">Google Image Deletion:</span>
                        <p class="text-sm text-zinc-500">We ensure cached images of your damaged car are removed from search results.</p>
                    </div>
                </li>
            </ul>
        </div>
        <div class="relative group">
            <div class="absolute inset-0 bg-cyan-500/5 blur-3xl group-hover:bg-cyan-500/10 transition-colors"></div>
            <div class="relative glass-card rounded-3xl p-8 border-zinc-800">
                <div class="grid grid-cols-2 gap-4">
                    <div class="p-4 rounded-2xl bg-zinc-950 border border-zinc-800/50">
                        <span class="text-xs text-zinc-500 uppercase tracking-widest font-bold">Resale Value</span>
                        <p class="text-2xl font-bold text-white mt-1">+15-20%</p>
                    </div>
                    <div class="p-4 rounded-2xl bg-zinc-950 border border-zinc-800/50">
                        <span class="text-xs text-zinc-500 uppercase tracking-widest font-bold">Privacy Rate</span>
                        <p class="text-2xl font-bold text-white mt-1">100%</p>
                    </div>
                    <div class="col-span-2 p-4 rounded-2xl bg-gradient-to-br from-cyan-900/40 to-violet-900/40 border border-cyan-500/20">
                        <p class="text-xs text-cyan-300 font-bold uppercase tracking-widest">Global Coverage</p>
                        <p class="text-xl text-white font-bold mt-1">USA, Europe, UAE & Asia</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="pricing" class="relative bg-zinc-950 py-20 px-4 md:px-8">
    <div class="mx-auto max-w-6xl text-center mb-16">
        <h2 class="font-display text-3xl font-bold text-white md:text-4xl">
            Flexible <span class="gradient-text">Pricing</span> Plans
        </h2>
        <p class="mt-4 text-zinc-400 max-w-2xl mx-auto">
            Choose the package that fits your needs. We offer guaranteed removal with bulk discounts for multiple sites.
        </p>
    </div>

    <div class="mx-auto max-w-6xl grid gap-8 md:grid-cols-3">
        <!-- Basic Plan -->
        <div class="glass-card flex flex-col rounded-3xl p-8 border border-zinc-800 transition-all hover:border-cyan-500/30">
            <h3 class="text-white font-display text-xl font-bold mb-2">Bronze Plan</h3>
            <div class="flex items-baseline gap-1 mb-6">
                <span class="text-4xl font-black text-white">$40</span>
                <span class="text-zinc-500 text-sm">/per site</span>
            </div>
            <ul class="space-y-4 mb-8 text-sm text-zinc-400 text-left">
                <li class="flex items-center gap-2">
                    <svg class="w-4 h-4 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    Single Site Removal
                </li>
                <li class="flex items-center gap-2">
                    <svg class="w-4 h-4 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    Permanent Data Deletion
                </li>
                <li class="flex items-center gap-2">
                    <svg class="w-4 h-4 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    Google Cache Flush
                </li>
                <li class="flex items-center gap-2 opacity-30">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                    Multiple Site Discount
                </li>
            </ul>
            <a href="https://wa.me/923004531248?text=I want to order the Bronze Plan ($40) for 1 site removal." class="mt-auto w-full py-3 rounded-xl bg-zinc-900 border border-zinc-800 text-white font-bold hover:bg-zinc-800 transition-colors text-center">
                CHOOSE BRONZE
            </a>
        </div>

        <!-- Popular Plan -->
        <div class="relative glass-card flex flex-col rounded-3xl p-8 border-2 border-cyan-500/50 shadow-[0_0_40px_rgba(34,211,238,0.1)]">
            <div class="absolute -top-4 left-1/2 -translate-x-1/2 bg-cyan-500 text-zinc-950 text-[10px] font-black uppercase px-4 py-1.5 rounded-full tracking-widest">
                Most Popular
            </div>
            <h3 class="text-white font-display text-xl font-bold mb-2">Silver Plan</h3>
            <div class="flex items-baseline gap-1 mb-6">
                <span class="text-4xl font-black text-white">$100</span>
                <span class="text-zinc-500 text-sm">/for 3 sites</span>
            </div>
            <ul class="space-y-4 mb-8 text-sm text-zinc-400 text-left">
                <li class="flex items-center gap-2">
                    <svg class="w-4 h-4 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    3 Site Removal
                </li>
                <li class="flex items-center gap-2 font-bold text-zinc-300">
                    <svg class="w-4 h-4 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    Save $20 instantly
                </li>
                <li class="flex items-center gap-2">
                    <svg class="w-4 h-4 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    Permanent Data Deletion
                </li>
                <li class="flex items-center gap-2">
                    <svg class="w-4 h-4 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    Google Cache Flush
                </li>
            </ul>
            <a href="https://wa.me/923004531248?text=I want to order the Silver Plan ($100) for 3 sites removal." class="mt-auto w-full py-3 rounded-xl bg-cyan-500 text-zinc-950 font-bold hover:bg-cyan-400 active:scale-95 transition-all text-center">
                CHOOSE SILVER
            </a>
        </div>

        <!-- Premium Plan -->
        <div class="glass-card flex flex-col rounded-3xl p-8 border border-zinc-800 transition-all hover:border-violet-500/30">
            <h3 class="text-white font-display text-xl font-bold mb-2">Gold Plan</h3>
            <div class="flex items-baseline gap-1 mb-6">
                <span class="text-4xl font-black text-white">$150</span>
                <span class="text-zinc-500 text-sm">/for 5 sites</span>
            </div>
            <ul class="space-y-4 mb-8 text-sm text-zinc-400 text-left">
                <li class="flex items-center gap-2">
                    <svg class="w-4 h-4 text-violet-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    5 Site Removal
                </li>
                <li class="flex items-center gap-2 font-bold text-zinc-300">
                    <svg class="w-4 h-4 text-violet-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    Save $50 instantly
                </li>
                <li class="flex items-center gap-2">
                    <svg class="w-4 h-4 text-violet-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    Permanent Data Deletion
                </li>
                <li class="flex items-center gap-2">
                    <svg class="w-4 h-4 text-violet-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    Google Cache Flush
                </li>
            </ul>
            <a href="https://wa.me/923004531248?text=I want to order the Gold Plan ($150) for 5 sites removal." class="mt-auto w-full py-3 rounded-xl bg-zinc-900 border border-zinc-800 text-white font-bold hover:bg-zinc-800 transition-colors text-center">
                CHOOSE GOLD
            </a>
        </div>
    </div>
</section>

<section class="bg-zinc-950/30 border-t border-zinc-800/80 px-4 py-20 md:px-8">
    <div class="mx-auto max-w-6xl">
        <h2 class="font-display text-2xl font-semibold text-white md:text-3xl text-center mb-12">
            Frequently Asked Questions
        </h2>
        <div class="grid md:grid-cols-2 gap-6">
            <div class="glass-card rounded-2xl p-6">
                <h3 class="text-white font-bold mb-2">How long does the VIN removal take?</h3>
                <p class="text-sm text-zinc-500 leading-relaxed">The entire process typically takes 3 to 7 business days, depending on the number of sites the data is present on.</p>
            </div>
            <div class="glass-card rounded-2xl p-6">
                <h3 class="text-white font-bold mb-2">Is the history removal permanent?</h3>
                <p class="text-sm text-zinc-500 leading-relaxed">Yes, we work with the source databases to ensure the records are permanently deleted, not just hidden from search results.</p>
            </div>
            <div class="glass-card rounded-2xl p-6">
                <h3 class="text-white font-bold mb-2">Which auction sites do you cover?</h3>
                <p class="text-sm text-zinc-500 leading-relaxed">We cover all major global auctions including Copart, IAAI, Impact Auto Auction, and hundreds of local salvage platforms.</p>
            </div>
            <div class="glass-card rounded-2xl p-6">
                <h3 class="text-white font-bold mb-2">Can I remove photos from Google Search?</h3>
                <p class="text-sm text-zinc-500 leading-relaxed">Absolutely. Our service includes requesting the removal of cached images and snippets from Google, Bing, and other search engines.</p>
            </div>
        </div>
    </div>
</section>

<section class="mx-auto max-w-6xl px-4 py-20 md:px-8">
    <div class="flex items-end justify-between mb-8">
        <h2 class="font-display text-2xl font-bold text-white md:text-3xl">
            Recent Cleaned <span class="gradient-text">Vehicles</span>
        </h2>
        <a href="{{ route('cars.index') }}" class="text-sm font-medium text-cyan-400 hover:text-cyan-300 flex items-center gap-1">
            Browse All <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
        </a>
    </div>
    
    @if($featuredCars->count() > 0)
        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @foreach($featuredCars as $car)
                @include('partials.car-card', ['car' => $car])
            @endforeach
        </div>
    @else
        <div class="rounded-3xl border border-dashed border-zinc-800 bg-zinc-900/20 px-6 py-20 text-center">
            <p class="text-zinc-500 font-medium">No vehicles listed at the moment.</p>
        </div>
    @endif
</section>

<section class="relative overflow-hidden bg-gradient-to-br from-zinc-950 to-zinc-900 border-t border-zinc-800/80 px-4 py-20 md:px-8">
    <div class="absolute inset-0 bg-[url('/grid.svg')] opacity-5"></div>
    <div class="relative mx-auto max-w-4xl text-center">
        <h2 class="font-display text-3xl font-bold text-white md:text-4xl">
            Ready to <span class="gradient-text">Restore</span> Your Car's Privacy?
        </h2>
        <p class="mt-6 text-zinc-400 text-lg">
            Stop letting old records dictate your vehicle's value. Get a free audit today and see how we can clear your car history.
        </p>
        <div class="mt-10 flex flex-wrap justify-center gap-4">
            <a href="https://wa.me/923004531248?text=I want to audit my VIN for history removal." class="inline-flex items-center gap-2 rounded-xl bg-emerald-500 px-8 py-4 text-sm font-bold text-zinc-950 transition hover:bg-emerald-400 active:scale-95 shadow-xl shadow-emerald-500/20">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L0 24l6.335-1.662c1.72.94 3.659 1.437 5.634 1.437h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
                FREE WHATSAPP AUDIT
            </a>
            <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 rounded-xl border border-zinc-700 bg-zinc-900/50 px-8 py-4 text-sm font-bold text-white transition hover:bg-zinc-800 active:scale-95">
                SUBMIT CONTACT FORM
            </a>
        </div>
    </div>
</section>
@endsection
