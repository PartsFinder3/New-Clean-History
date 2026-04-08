@extends('layouts.app')

@section('title', 'HTML Sitemap | Car History Clean')
@section('description', 'Navigate through Car History Clean website with our comprehensive HTML sitemap. Find all our services, cars, and blog posts easily.')
@section('canonical', route('sitemap-html'))

@section('content')
<div class="mx-auto max-w-6xl px-4 py-16 md:px-8 md:py-24">
    <h1 class="font-display text-3xl font-bold text-white md:text-5xl mb-12">
        Site <span class="gradient-text">Map</span>
    </h1>

    <div class="grid gap-12 md:grid-cols-3">
        {{-- Main Pages --}}
        <section class="space-y-6">
            <h2 class="text-xl font-bold text-white flex items-center gap-2">
                <span class="w-1 h-6 bg-cyan-500 rounded-full"></span>
                Main Pages
            </h2>
            <ul class="space-y-4 text-zinc-400">
                <li><a href="{{ route('home') }}" class="hover:text-cyan-400 transition">Home Page</a></li>
                <li><a href="{{ route('cars.index') }}" class="hover:text-cyan-400 transition">Browse Vehicles</a></li>
                <li><a href="{{ route('products') }}" class="hover:text-cyan-400 transition">Our Services</a></li>
                <li><a href="{{ route('blogs.index') }}" class="hover:text-cyan-400 transition">Latest News (Blog)</a></li>
                <li><a href="{{ route('about') }}" class="hover:text-cyan-400 transition">About Company</a></li>
                <li><a href="{{ route('contact') }}" class="hover:text-cyan-400 transition">Contact Support</a></li>
            </ul>
        </section>

        {{-- Legal & Info --}}
        <section class="space-y-6">
            <h2 class="text-xl font-bold text-white flex items-center gap-2">
                <span class="w-1 h-6 bg-violet-500 rounded-full"></span>
                Legal & Info
            </h2>
            <ul class="space-y-4 text-zinc-400">
                <li><a href="{{ route('terms') }}" class="hover:text-cyan-400 transition">Terms of Service</a></li>
                <li><a href="{{ route('privacy-policy') }}" class="hover:text-cyan-400 transition">Privacy Policy</a></li>
                <li><a href="{{ route('disclaimer') }}" class="hover:text-cyan-400 transition">Disclaimer</a></li>
                <li><a href="{{ url('/sitemap.xml') }}" class="hover:text-cyan-400 transition" target="_blank">XML Sitemap (Bots)</a></li>
                <li><a href="{{ route('rss') }}" class="hover:text-cyan-400 transition">RSS Feed</a></li>
            </ul>
        </section>

        {{-- Service Specialized Pages --}}
        <section class="space-y-6">
            <h2 class="text-xl font-bold text-white flex items-center gap-2">
                <span class="w-1 h-6 bg-emerald-500 rounded-full"></span>
                Specialized Services
            </h2>
            <ul class="space-y-4 text-zinc-400">
                <li><a href="{{ route('services.show', 'bidfax') }}" class="hover:text-cyan-400 transition">BidFax Removal</a></li>
                <li><a href="{{ route('services.show', 'autoastat') }}" class="hover:text-cyan-400 transition">AutoAstat Cleaning</a></li>
                <li><a href="{{ route('services.show', 'stat-vin') }}" class="hover:text-cyan-400 transition">StatVin Data Purge</a></li>
                <li><a href="{{ route('services.show', 'bidcars') }}" class="hover:text-cyan-400 transition">BidCars Privacy</a></li>
                <li><a href="{{ route('services.show', 'auctionhistory-io') }}" class="hover:text-cyan-400 transition">AuctionHistory.io Removal</a></li>
                <li><a href="{{ route('services.show', 'autoauctions-io') }}" class="hover:text-cyan-400 transition">AutoAuctions.io Clean</a></li>
                <li><a href="{{ route('services.show', 'carfast-express') }}" class="hover:text-cyan-400 transition">Carfast Express Removal</a></li>
            </ul>
        </section>
    </div>

    <!-- SEO Content Expansion -->
    <div class="mt-20 border-t border-zinc-800 pt-16">
        <div class="max-w-4xl">
            <h2 class="text-2xl font-bold text-white mb-6">Navigating Car History Clean</h2>
            <div class="space-y-6 text-zinc-400 leading-relaxed text-sm">
                <p>
                    This HTML Sitemap is designed to help both users and search engines easily navigate the various sections and specialized services offered by <span class="text-white font-semibold">Car History Clean</span>. Our website is organized to provide quick access to our core business functions: vehicle history auditing, permanent data removal, and informational blog resources.
                </p>
                <p>
                    The <strong>Main Pages</strong> section provides the foundation of our site, including our homepage where you can find an overview of our 4-step work process, our browse page for viewing recently cleaned vehicles, and our contact page for direct inquiries. Our <strong>Legal & Info</strong> section ensures that our operations are transparent, providing detailed documentation on our privacy protocols and terms of service, which are essential for maintaining trust in a data-sensitive industry.
                </p>
                <p>
                    Our <strong>Specialized Services</strong> links lead to dedicated landing pages for various third-party platforms. We understand that every auction site — whether it's Copart, IAAI, BidFax, or AutoAstat — has different technical requirements for data deletion. These pages explain the unique approach we take for each platform to ensure your VIN's digital footprint is properly and permanently erased. By utilizing this sitemap, you can find the specific service that matches your vehicle's online presence.
                </p>
                <p>
                    If you are looking for technical car history insights or the latest news in the global auto auction market, our <strong>Blog</strong> section is the primary resource. We regularly update our repository with tips for US car exporters, guidance on reading VIN reports, and legal updates regarding digital privacy in the automotive sector.
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
