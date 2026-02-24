<header class="sticky top-0 z-50 w-full border-b border-zinc-800/80 bg-zinc-950/90 backdrop-blur-md">
    <div class="mx-auto flex h-16 max-w-6xl items-center justify-between px-4 md:px-8">
        <a href="{{ route('home') }}" class="flex items-center gap-2 font-display text-xl font-bold tracking-tight text-white md:text-2xl">
            <div class="flex h-8 w-8 items-center justify-center rounded-lg bg-cyan-500 text-zinc-950">
                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                </svg>
            </div>
            <span>Car History <span class="text-cyan-400">Clean</span></span>
        </a>

        <div class="hidden flex-1 px-8 md:block">
            <form action="{{ route('cars.index') }}" method="GET" class="relative group">
                <input 
                    type="text" 
                    name="q" 
                    placeholder="Search VIN or Car Name..." 
                    class="w-full max-w-xs rounded-xl border border-zinc-800 bg-zinc-900/50 py-2 pl-10 pr-4 text-sm text-white transition-all focus:border-cyan-500 focus:ring-0 group-hover:bg-zinc-900"
                    value="{{ request('q') }}"
                >
                <div class="absolute left-3 top-2.5 text-zinc-500 group-hover:text-cyan-400 transition-colors">
                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
            </form>
        </div>

        <nav class="hidden items-center gap-8 md:flex">
            <a href="{{ route('home') }}" class="text-sm font-medium {{ request()->routeIs('home') ? 'text-cyan-400' : 'text-zinc-400' }} transition hover:text-cyan-400">Home</a>
            <a href="{{ url('/#steps-of-work') }}" class="text-sm font-medium text-zinc-400 transition hover:text-cyan-400">Process</a>
            <a href="{{ route('cars.index') }}" class="text-sm font-medium {{ request()->routeIs('cars.*') ? 'text-cyan-400' : 'text-zinc-400' }} transition hover:text-cyan-400">Cars</a>
            <a href="{{ route('products') }}" class="text-sm font-medium {{ request()->routeIs('products') ? 'text-cyan-400' : 'text-zinc-400' }} transition hover:text-cyan-400">Services</a>
            <a href="{{ route('blogs.index') }}" class="text-sm font-medium {{ request()->routeIs('blogs.*') ? 'text-cyan-400' : 'text-zinc-400' }} transition hover:text-cyan-400">Blog</a>
            <a href="{{ route('about') }}" class="text-sm font-medium {{ request()->routeIs('about') ? 'text-cyan-400' : 'text-zinc-400' }} transition hover:text-cyan-400">About</a>
            <a href="{{ route('contact') }}" class="text-sm font-medium {{ request()->routeIs('contact') ? 'text-cyan-400' : 'text-zinc-400' }} transition hover:text-cyan-400">Contact</a>
            
            @auth
                <a href="{{ route('admin.dashboard') }}" class="text-sm font-medium text-purple-400 transition hover:text-purple-300">Dashboard</a>
                <form action="{{ route('admin.logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="text-sm font-medium text-red-400 transition hover:text-red-300 ml-4">Logout</button>
                </form>
            @else
                <a href="{{ route('admin.login') }}" class="text-sm font-medium text-zinc-400 transition hover:text-cyan-400">Admin Login</a>
            @endauth
        </nav>

        <button type="button" onclick="document.getElementById('mobile-menu').classList.toggle('hidden')" class="flex h-11 w-11 items-center justify-center rounded-lg border border-zinc-700 text-zinc-400 md:hidden">
            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden border-t border-zinc-800/80 bg-zinc-950/95 px-4 py-4 md:hidden">
        <nav class="flex flex-col gap-1">
            <a href="{{ route('home') }}" class="rounded-lg px-4 py-3 text-base font-medium text-zinc-300 hover:bg-zinc-800/50 hover:text-cyan-400">Home</a>
            <a href="{{ url('/#steps-of-work') }}" class="rounded-lg px-4 py-3 text-base font-medium text-zinc-300 hover:bg-zinc-800/50 hover:text-cyan-400">Process</a>
            <a href="{{ route('cars.index') }}" class="rounded-lg px-4 py-3 text-base font-medium text-zinc-300 hover:bg-zinc-800/50 hover:text-cyan-400">Cars</a>
            <a href="{{ route('products') }}" class="rounded-lg px-4 py-3 text-base font-medium text-zinc-300 hover:bg-zinc-800/50 hover:text-cyan-400">Services</a>
            <a href="{{ route('blogs.index') }}" class="rounded-lg px-4 py-3 text-base font-medium text-zinc-300 hover:bg-zinc-800/50 hover:text-cyan-400">Blog</a>
            <a href="{{ route('about') }}" class="rounded-lg px-4 py-3 text-base font-medium text-zinc-300 hover:bg-zinc-800/50 hover:text-cyan-400">About</a>
            <a href="{{ route('contact') }}" class="rounded-lg px-4 py-3 text-base font-medium text-zinc-300 hover:bg-zinc-800/50 hover:text-cyan-400">Contact</a>
            @auth
                <a href="{{ route('admin.dashboard') }}" class="rounded-lg px-4 py-3 text-base font-medium text-purple-400 hover:bg-zinc-800/50">Dashboard</a>
            @else
                <a href="{{ route('admin.login') }}" class="rounded-lg px-4 py-3 text-base font-medium text-zinc-300 hover:bg-zinc-800/50 hover:text-cyan-400">Admin Login</a>
            @endauth
        </nav>
    </div>
</header>
