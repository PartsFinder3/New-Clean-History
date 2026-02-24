@extends('layouts.app')

@section('title', 'About Us | Car History Clean - Trusted VIN & Vehicle History Reports')
@section('description', 'Learn about Car History Clean, your trusted partner for accurate vehicle history reports and VIN checks in USA, Germany, Poland, and Australia.')
@section('canonical', route('about'))

@section('schema')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "AboutPage",
    "name": "About Car History Clean",
    "url": "{{ route('about') }}",
    "description": "Learn about Car History Clean, your trusted partner for accurate vehicle history reports and VIN checks.",
    "mainEntity": {
        "@@type": "Organization",
        "name": "Car History Clean",
        "url": "{{ url('/') }}",
        "telephone": "+923004531248",
        "email": "mateenali1122@gmail.com",
        "foundingDate": "2024",
        "description": "Professional car history removal services. Clean title, verified VIN, transparent process.",
        "knowsAbout": ["VIN History Removal", "Car Auction History Cleaning", "Vehicle Privacy Services", "Title Cleaning"]
    }
}
</script>

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
            "name": "About Us",
            "item": "{{ route('about') }}"
        }
    ]
}
</script>
@endsection

@section('content')
<div class="mx-auto max-w-6xl px-4 py-16 md:px-8 md:py-24">
    <header class="text-center mb-20">
        <h1 class="font-display text-4xl font-bold text-white md:text-5xl lg:text-6xl">
            Our <span class="gradient-text">Mission</span> & Vision
        </h1>
        <p class="mt-6 text-xl text-zinc-400 max-w-3xl mx-auto leading-relaxed">
            At Car History Clean, we believe that every vehicle owner deserves privacy and a fair market value. We are dedicated to providing the most reliable VIN cleaning services globally.
        </p>
    </header>

    <div class="grid md:grid-cols-2 gap-16 items-center mb-24">
        <div class="space-y-8 text-lg text-zinc-300 leading-relaxed">
            <p>
                Founded in 2024, <span class="text-cyan-400 font-bold">Car History Clean</span> was established by a team of automotive experts and tech professionals who saw a growing need for digital privacy in the used car market. 
            </p>
            <p>
                Old auction records, salvage photos, and outdated pricing data on public websites can unfairly penalize a vehicle's resale value, even after it has been fully restored and certified. We bridge this gap by offering a legal, permanent way to purge this data from the web.
            </p>
            <div class="p-6 rounded-2xl bg-zinc-900 border border-zinc-800">
                <h3 class="text-white font-bold mb-3">Global Reach</h3>
                <p class="text-sm text-zinc-500">We operate across the USA, Canada, UAE, Europe, and Asia, supporting over 200+ different auction platforms and car history databases.</p>
            </div>
        </div>
        <div class="relative">
            <div class="absolute inset-0 bg-cyan-500/10 blur-3xl"></div>
            <div class="relative glass-card rounded-3xl p-1 shadow-2xl overflow-hidden">
                <div class="grid grid-cols-2 gap-px bg-zinc-800/50">
                    <div class="bg-zinc-950 p-10 text-center">
                        <div class="text-4xl font-black gradient-text mb-2">15k+</div>
                        <div class="text-xs uppercase tracking-widest text-zinc-500 font-bold">Cars Cleaned</div>
                    </div>
                    <div class="bg-zinc-950 p-10 text-center">
                        <div class="text-4xl font-black gradient-text mb-2">200+</div>
                        <div class="text-xs uppercase tracking-widest text-zinc-500 font-bold">Platforms</div>
                    </div>
                    <div class="bg-zinc-950 p-10 text-center">
                        <div class="text-4xl font-black gradient-text mb-2">99%</div>
                        <div class="text-xs uppercase tracking-widest text-zinc-500 font-bold">Success Rate</div>
                    </div>
                    <div class="bg-zinc-950 p-10 text-center">
                        <div class="text-4xl font-black gradient-text mb-2">24/7</div>
                        <div class="text-xs uppercase tracking-widest text-zinc-500 font-bold">Support</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="max-w-none mt-24">
        <h2 class="font-display text-3xl font-bold text-white text-center mb-12">
            Meet the <span class="gradient-text">Experts</span>
        </h2>
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
            {{-- Member 1 --}}
            <div class="group p-1 rounded-3xl bg-gradient-to-br from-zinc-800 to-zinc-900 border border-zinc-700/50 hover:border-cyan-500/50 transition-all duration-500">
                <div class="bg-zinc-950 rounded-[22px] overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&q=80&w=400&h=500" alt="Mateen Ali" class="w-full aspect-[4/5] object-cover grayscale group-hover:grayscale-0 transition-all duration-500">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-white">Mateen Ali</h3>
                        <p class="text-sm text-cyan-400 font-medium">Founder & Head of Operations</p>
                    </div>
                </div>
            </div>
            {{-- Member 2 --}}
            <div class="group p-1 rounded-3xl bg-gradient-to-br from-zinc-800 to-zinc-900 border border-zinc-700/50 hover:border-violet-500/50 transition-all duration-500">
                <div class="bg-zinc-950 rounded-[22px] overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&q=80&w=400&h=500" alt="Sarah Johnson" class="w-full aspect-[4/5] object-cover grayscale group-hover:grayscale-0 transition-all duration-500">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-white">Sarah Johnson</h3>
                        <p class="text-sm text-violet-400 font-medium">Data Privacy Specialist</p>
                    </div>
                </div>
            </div>
            {{-- Member 3 --}}
            <div class="group p-1 rounded-3xl bg-gradient-to-br from-zinc-800 to-zinc-900 border border-zinc-700/50 hover:border-emerald-500/50 transition-all duration-500">
                <div class="bg-zinc-950 rounded-[22px] overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?auto=format&fit=crop&q=80&w=400&h=500" alt="David Chen" class="w-full aspect-[4/5] object-cover grayscale group-hover:grayscale-0 transition-all duration-500">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-white">David Chen</h3>
                        <p class="text-sm text-emerald-400 font-medium">Lead Technical Auditor</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="max-w-none mt-24">
        <h2 class="font-display text-3xl font-bold text-white text-center mb-12">
            Why We Are Different
        </h2>
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="p-6 rounded-2xl bg-zinc-900/50 border border-zinc-800/50">
                <div class="w-10 h-10 rounded-lg bg-cyan-500/10 flex items-center justify-center text-cyan-400 mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                </div>
                <h3 class="text-white font-bold mb-2">Legal Accuracy</h3>
                <p class="text-sm text-zinc-500">We use professional legal channels and DMCA protocols to ensure permanent data removal.</p>
            </div>
            <div class="p-6 rounded-2xl bg-zinc-900/50 border border-zinc-800/50">
                <div class="w-10 h-10 rounded-lg bg-emerald-500/10 flex items-center justify-center text-emerald-400 mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                </div>
                <h3 class="text-white font-bold mb-2">Fast Execution</h3>
                <p class="text-sm text-zinc-500">Most removals are completed within 48 to 72 hours of verification.</p>
            </div>
            <div class="p-6 rounded-2xl bg-zinc-900/50 border border-zinc-800/50">
                <div class="w-10 h-10 rounded-lg bg-violet-500/10 flex items-center justify-center text-violet-400 mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <h3 class="text-white font-bold mb-2">24/7 Audit</h3>
                <p class="text-sm text-zinc-500">Our team is available round the clock for free VIN audits and technical consultations.</p>
            </div>
            <div class="p-6 rounded-2xl bg-zinc-900/50 border border-zinc-800/50">
                <div class="w-10 h-10 rounded-lg bg-cyan-500/10 flex items-center justify-center text-cyan-400 mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"></path></svg>
                </div>
                <h3 class="text-white font-bold mb-2">Transparency</h3>
                <p class="text-sm text-zinc-500">No upfront hidden costs. We provide evidence of removal before final completion.</p>
            </div>
        </div>
    </section>
</div>
@endsection
