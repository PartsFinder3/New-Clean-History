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
                <li><a href="{{ url('/services/bidfax') }}" class="hover:text-cyan-400 transition">BidFax Removal</a></li>
                <li><a href="{{ url('/services/autoastat') }}" class="hover:text-cyan-400 transition">AutoAstat Cleaning</a></li>
                <li><a href="{{ url('/services/stat-vin') }}" class="hover:text-cyan-400 transition">StatVin Data Purge</a></li>
                <li><a href="{{ url('/services/bidcars') }}" class="hover:text-cyan-400 transition">BidCars Privacy</a></li>
                <li><a href="{{ url('/services/auctionhistory-io') }}" class="hover:text-cyan-400 transition">AuctionHistory.io Removal</a></li>
            </ul>
        </section>
    </div>
</div>
@endsection
