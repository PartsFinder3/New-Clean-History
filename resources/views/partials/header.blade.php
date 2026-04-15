{{-- Top Bar --}}
<div class="bg-accent text-white text-sm py-2">
    <div class="max-w-6xl mx-auto px-4 md:px-8 flex items-center justify-between">
        <div class="flex items-center gap-4">
            <span class="flex items-center gap-2">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                <span>+971 XX XXX XXXX</span>
            </span>
            <span class="hidden sm:inline text-blue-200">|</span>
            <span class="hidden sm:inline">Serving UAE, USA & Europe</span>
        </div>
        <div class="flex items-center gap-4">
            <span class="text-blue-100 text-xs">EN</span>
            <span class="text-blue-200 text-xs">|</span>
            <span class="text-blue-200 text-xs hover:text-white cursor-pointer">AR</span>
        </div>
    </div>
</div>

<header class="sticky top-0 z-50 w-full border-b border-card-border bg-white/95 backdrop-blur-md shadow-sm">
    <div class="mx-auto flex h-16 max-w-6xl items-center justify-between px-4 md:px-8">
        <a href="{{ route('home') }}" class="flex items-center gap-2 font-display text-xl font-bold tracking-tight text-foreground md:text-2xl">
            <div class="flex h-8 w-8 items-center justify-center rounded-lg overflow-hidden bg-accent-light">
                <img src="{{ asset('favicon.svg') }}" alt="Logo" class="h-full w-full object-cover">
            </div>
            <span>Car History <span class="text-accent">Clean</span></span>
        </a>

        <div class="hidden flex-1 px-8 md:block">
            <form action="{{ route('cars.index') }}" method="GET" class="relative group">
                <input 
                    type="text" 
                    name="q" 
                    placeholder="Search VIN or Car Name..." 
                    class="w-full max-w-xs rounded-xl border border-card-border bg-background-secondary py-2 pl-10 pr-4 text-sm text-foreground transition-all focus:border-accent focus:ring-0 focus:outline-none focus:bg-white"
                    value="{{ request('q') }}"
                >
                <div class="absolute left-3 top-2.5 text-muted group-hover:text-accent transition-colors">
                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
            </form>
        </div>

        <nav class="hidden items-center gap-8 md:flex">
            <a href="{{ route('home') }}" class="text-sm font-medium {{ request()->routeIs('home') ? 'text-accent' : 'text-muted' }} transition hover:text-accent">Home</a>
            <a href="{{ route('products') }}" class="text-sm font-medium {{ request()->routeIs('products') ? 'text-accent' : 'text-muted' }} transition hover:text-accent">Services</a>
            <a href="{{ route('cars.index') }}" class="text-sm font-medium {{ request()->routeIs('cars.*') ? 'text-accent' : 'text-muted' }} transition hover:text-accent">Garage Cars</a>
            <a href="{{ route('blogs.index') }}" class="text-sm font-medium {{ request()->routeIs('blogs.*') ? 'text-accent' : 'text-muted' }} transition hover:text-accent">Blog</a>
            <a href="{{ route('about') }}" class="text-sm font-medium {{ request()->routeIs('about') ? 'text-accent' : 'text-muted' }} transition hover:text-accent">About</a>
            <a href="{{ route('contact') }}" class="text-sm font-medium {{ request()->routeIs('contact') ? 'text-accent' : 'text-muted' }} transition hover:text-accent">Contact</a>
            
            <a href="https://wa.me/923004531248?text=Hi, I want a free VIN audit" target="_blank" class="btn-primary text-sm py-2 px-4">Get Free Audit</a>
            
            @php
                try {
                    $isAdminLoggedIn = auth()->check();
                } catch (\Exception $e) {
                    $isAdminLoggedIn = false;
                }
            @endphp
            @if($isAdminLoggedIn)
                <a href="{{ route('admin.dashboard') }}" class="text-sm font-medium text-accent hover:text-accent-hover ml-4">Dashboard</a>
                <form action="{{ route('admin.logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="text-sm font-medium text-danger transition hover:text-red-700 ml-2">Logout</button>
                </form>
            @endif
        </nav>

        <button type="button" onclick="document.getElementById('mobile-menu').classList.toggle('hidden')" class="flex h-11 w-11 items-center justify-center rounded-lg border border-card-border text-muted md:hidden hover:text-accent hover:border-accent transition">
            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden border-t border-card-border bg-white px-4 py-4 md:hidden shadow-lg">
        <nav class="flex flex-col gap-1">
            <a href="{{ route('home') }}" class="rounded-lg px-4 py-3 text-base font-medium text-foreground hover:bg-background-secondary hover:text-accent">Home</a>
            <a href="{{ route('products') }}" class="rounded-lg px-4 py-3 text-base font-medium text-foreground hover:bg-background-secondary hover:text-accent">Services</a>
            <a href="{{ route('cars.index') }}" class="rounded-lg px-4 py-3 text-base font-medium text-foreground hover:bg-background-secondary hover:text-accent">Garage Cars</a>
            <a href="{{ route('blogs.index') }}" class="rounded-lg px-4 py-3 text-base font-medium text-foreground hover:bg-background-secondary hover:text-accent">Blog</a>
            <a href="{{ route('about') }}" class="rounded-lg px-4 py-3 text-base font-medium text-foreground hover:bg-background-secondary hover:text-accent">About</a>
            <a href="{{ route('contact') }}" class="rounded-lg px-4 py-3 text-base font-medium text-foreground hover:bg-background-secondary hover:text-accent">Contact</a>
            <a href="https://wa.me/923004531248?text=Hi, I want a free VIN audit" target="_blank" class="mt-2 btn-primary text-center">Get Free Audit</a>
            @if($isAdminLoggedIn)
                <a href="{{ route('admin.dashboard') }}" class="rounded-lg px-4 py-3 text-base font-medium text-accent hover:bg-background-secondary">Dashboard</a>
            @endif
        </nav>
    </div>
</header>
