@extends('layouts.app')

@section('title', 'HTML Sitemap | Car History Clean')
@section('description', 'Navigate through Car History Clean website with our comprehensive HTML sitemap. Find all our services, cars, and blog posts easily.')
@section('canonical', route('sitemap-html'))

@section('content')
<div class="mx-auto max-w-6xl px-4 py-16 md:px-8 md:py-24 text-center md:text-left">
    <h1 class="font-display text-4xl font-bold text-foreground md:text-5xl lg:text-5xl mb-16">
        Site <span class="gradient-text">Map</span>
    </h1>

    <div class="grid gap-12 md:grid-cols-3">
        {{-- Main Pages --}}
        <section class="space-y-8 bg-white p-8 rounded-3xl border border-card-border shadow-sm">
            <h2 class="text-2xl font-bold text-foreground flex items-center gap-3 font-display">
                <span class="w-1.5 h-8 bg-accent rounded-full"></span>
                Main Pages
            </h2>
            <ul class="space-y-4 text-muted font-medium">
                <li><a href="{{ route('home') }}" class="hover:text-accent transition-colors flex items-center gap-2">
                    <svg class="w-4 h-4 text-blue-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                    Home Page
                </a></li>
                <li><a href="{{ route('cars.index') }}" class="hover:text-accent transition-colors flex items-center gap-2">
                    <svg class="w-4 h-4 text-blue-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0"></path></svg>
                    Browse Vehicles
                </a></li>
                <li><a href="{{ route('products') }}" class="hover:text-accent transition-colors flex items-center gap-2">
                    <svg class="w-4 h-4 text-blue-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    Our Services
                </a></li>
                <li><a href="{{ route('blogs.index') }}" class="hover:text-accent transition-colors flex items-center gap-2">
                    <svg class="w-4 h-4 text-blue-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10l4 4v10a2 2 0 01-2 2z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 2v4a2 2 0 002 2h4"></path></svg>
                    Latest News (Blog)
                </a></li>
                <li><a href="{{ route('about') }}" class="hover:text-accent transition-colors flex items-center gap-2">
                    <svg class="w-4 h-4 text-blue-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                    About Company
                </a></li>
                <li><a href="{{ route('contact') }}" class="hover:text-accent transition-colors flex items-center gap-2">
                    <svg class="w-4 h-4 text-blue-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    Contact Support
                </a></li>
            </ul>
        </section>

        {{-- Legal & Info --}}
        <section class="space-y-8 bg-white p-8 rounded-3xl border border-card-border shadow-sm">
            <h2 class="text-2xl font-bold text-foreground flex items-center gap-3 font-display">
                <span class="w-1.5 h-8 bg-violet-400 rounded-full"></span>
                Legal & Info
            </h2>
            <ul class="space-y-4 text-muted font-medium">
                <li><a href="{{ route('terms') }}" class="hover:text-accent transition-colors">Terms of Service</a></li>
                <li><a href="{{ route('privacy-policy') }}" class="hover:text-accent transition-colors">Privacy Policy</a></li>
                <li><a href="{{ route('disclaimer') }}" class="hover:text-accent transition-colors">Disclaimer</a></li>
                <li><a href="{{ url('/sitemap.xml') }}" class="hover:text-accent transition-colors" target="_blank">XML Sitemap (Bots)</a></li>
                <li><a href="{{ route('rss') }}" class="hover:text-accent transition-colors">RSS Feed</a></li>
            </ul>
        </section>

        {{-- Service Specialized Pages --}}
        <section class="space-y-8 bg-white p-8 rounded-3xl border border-card-border shadow-sm">
            <h2 class="text-2xl font-bold text-foreground flex items-center gap-3 font-display">
                <span class="w-1.5 h-8 bg-emerald-400 rounded-full"></span>
                Specialized Services
            </h2>
            <ul class="space-y-4 text-muted font-medium">
                <li><a href="{{ route('services.show', 'bidfax') }}" class="hover:text-accent transition-colors">BidFax Removal</a></li>
                <li><a href="{{ route('services.show', 'autoastat') }}" class="hover:text-accent transition-colors">AutoAstat Cleaning</a></li>
                <li><a href="{{ route('services.show', 'stat-vin') }}" class="hover:text-accent transition-colors">StatVin Data Purge</a></li>
                <li><a href="{{ route('services.show', 'bidcars') }}" class="hover:text-accent transition-colors">BidCars Privacy</a></li>
                <li><a href="{{ route('services.show', 'auctionhistory-io') }}" class="hover:text-accent transition-colors">AuctionHistory.io Removal</a></li>
                <li><a href="{{ route('services.show', 'autoauctions-io') }}" class="hover:text-accent transition-colors">AutoAuctions.io Clean</a></li>
                <li><a href="{{ route('services.show', 'carfast-express') }}" class="hover:text-accent transition-colors">Carfast Express Removal</a></li>
            </ul>
        </section>
    </div>

    <!-- SEO Content Expansion -->
    <div class="mt-24 border-t border-card-border pt-16 text-left">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl font-bold text-foreground mb-8 font-display">Navigating Car History Clean</h2>
            <div class="space-y-6 text-muted leading-relaxed font-medium">
                <p>
                    This HTML Sitemap is designed to help both users and search engines easily navigate the various sections and specialized services offered by <span class="text-foreground font-bold">Car History Clean</span>. Our website is organized to provide quick access to our core business functions: vehicle history auditing, permanent data removal, and informational blog resources.
                </p>
                <div class="p-6 bg-blue-50/50 rounded-3xl border border-blue-100">
                    <p>The <strong>Main Pages</strong> section provides the foundation of our site, including our homepage where you can find an overview of our 4-step work process, our browse page for viewing recently cleaned vehicles, and our contact page for direct inquiries.</p>
                </div>
                <p>
                    Our <strong>Specialized Services</strong> links lead to dedicated landing pages for various third-party platforms. We understand that every auction site — whether it's Copart, IAAI, BidFax, or AutoAstat — has different technical requirements for data deletion. These pages explain the unique approach we take for each platform.
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
