<footer class="border-t border-card-border bg-foreground">
    <div class="mx-auto max-w-6xl px-4 py-12 md:px-8">
        {{-- Main Footer Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-8">
            {{-- Column 1: Logo & Contact --}}
            <div>
                <a href="{{ route('home') }}" class="font-display text-lg font-bold text-white">
                    Car History <span class="text-blue-400">Clean</span>
                </a>
                <p class="mt-3 text-sm text-gray-400 max-w-xs">
                    Professional car history removal and UAE resale car marketplace. Trusted by dealers worldwide.
                </p>
                <div class="mt-4 space-y-2">
                    <a href="https://wa.me/923004531248" target="_blank" rel="noopener noreferrer" class="flex items-center gap-2 text-sm text-gray-400 hover:text-white transition">
                        <svg class="h-4 w-4 text-green-400" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                        WhatsApp: +971 XX XXX XXXX
                    </a>
                    <p class="text-sm text-gray-400">Dubai, United Arab Emirates</p>
                </div>
            </div>

            {{-- Column 2: Quick Links --}}
            <div>
                <h4 class="text-white font-semibold mb-4 text-sm uppercase tracking-wider">Quick Links</h4>
                <nav class="flex flex-col gap-2">
                    <a href="{{ route('home') }}" class="text-sm text-gray-400 hover:text-white transition">Home</a>
                    <a href="{{ route('products') }}" class="text-sm text-gray-400 hover:text-white transition">Services</a>
                    <a href="{{ route('cars.index') }}" class="text-sm text-gray-400 hover:text-white transition">Garage Cars</a>
                    <a href="{{ route('blogs.index') }}" class="text-sm text-gray-400 hover:text-white transition">Blog</a>
                    <a href="{{ route('about') }}" class="text-sm text-gray-400 hover:text-white transition">About</a>
                    <a href="{{ route('contact') }}" class="text-sm text-gray-400 hover:text-white transition">Contact</a>
                </nav>
            </div>

            {{-- Column 3: Services --}}
            <div>
                <h4 class="text-white font-semibold mb-4 text-sm uppercase tracking-wider">Services</h4>
                <nav class="flex flex-col gap-2">
                    <a href="{{ route('products') }}" class="text-sm text-gray-400 hover:text-white transition">BidFax Removal</a>
                    <a href="{{ route('products') }}" class="text-sm text-gray-400 hover:text-white transition">Copart History</a>
                    <a href="{{ route('products') }}" class="text-sm text-gray-400 hover:text-white transition">Google Cache</a>
                    <a href="{{ route('products') }}" class="text-sm text-gray-400 hover:text-white transition">VIN Audit</a>
                </nav>
            </div>

            {{-- Column 4: UAE Locations --}}
            <div>
                <h4 class="text-white font-semibold mb-4 text-sm uppercase tracking-wider">UAE Locations</h4>
                <nav class="flex flex-col gap-2">
                    <span class="text-sm text-gray-400">Dubai</span>
                    <span class="text-sm text-gray-400">Abu Dhabi</span>
                    <span class="text-sm text-gray-400">Sharjah</span>
                    <span class="text-sm text-gray-400">Ajman</span>
                </nav>
            </div>
        </div>

        <!-- Social & DMCA -->
        <div class="border-y border-gray-700 py-6 flex flex-wrap items-center justify-between gap-6">
            <div class="flex flex-wrap gap-3">
                {{-- Twitter --}}
                <a href="https://twitter.com/carhistoryclean" target="_blank" class="h-10 w-10 flex items-center justify-center rounded-lg bg-gray-800 border border-gray-700 text-gray-400 hover:border-blue-400 hover:text-blue-400 transition-all">
                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                </a>
                {{-- Facebook --}}
                <a href="https://facebook.com/carhistoryclean" target="_blank" class="h-10 w-10 flex items-center justify-center rounded-lg bg-gray-800 border border-gray-700 text-gray-400 hover:border-blue-400 hover:text-blue-400 transition-all">
                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"/></svg>
                </a>
                {{-- LinkedIn --}}
                <a href="https://linkedin.com/company/carhistoryclean" target="_blank" class="h-10 w-10 flex items-center justify-center rounded-lg bg-gray-800 border border-gray-700 text-gray-400 hover:border-blue-400 hover:text-blue-400 transition-all">
                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                </a>
                {{-- YouTube --}}
                <a href="https://youtube.com/@carhistoryclean" target="_blank" class="h-10 w-10 flex items-center justify-center rounded-lg bg-gray-800 border border-gray-700 text-gray-400 hover:border-red-400 hover:text-red-400 transition-all">
                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505a3.017 3.017 0 0 0-2.122 2.136C0 8.055 0 12 0 12s0 3.945.501 5.814a3.017 3.017 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.945 24 12 24 12s0-3.945-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                </a>
                {{-- Instagram --}}
                <a href="https://instagram.com/carhistoryclean" target="_blank" class="h-10 w-10 flex items-center justify-center rounded-lg bg-gray-800 border border-gray-700 text-gray-400 hover:border-pink-400 hover:text-pink-400 transition-all">
                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.981 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 1 0 0 12.324 6.162 6.162 0 0 0 0-12.324zM12 16a4.162 4.162 0 1 1 0-8.324A4.162 4.162 0 0 1 12 16zm6.406-11.845a1.44 1.44 0 1 0 0 2.881 1.44 1.44 0 0 0 0-2.881z"/></svg>
                </a>
                {{-- RSS Feed --}}
                <a href="{{ route('rss') }}" class="h-10 w-10 flex items-center justify-center rounded-lg bg-gray-800 border border-gray-700 text-gray-400 hover:border-orange-400 hover:text-orange-400 transition-all">
                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 5c7.18 0 13 5.82 13 13M6 11a7 7 0 017 7m-6 0a1 1 0 11-2 0 1 1 0 012 0z"/></svg>
                </a>
            </div>

            <div class="flex items-center gap-6">
                {{-- SSL Badge --}}
                <div class="flex items-center gap-2 text-xs font-bold uppercase tracking-wider text-gray-500">
                    <svg class="h-4 w-4 text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                    256-bit SSL Secure
                </div>
            </div>
        </div>
        
        <!-- Bottom Bar -->
        <div class="pt-6 flex flex-col md:flex-row items-center justify-between gap-4 text-xs text-gray-500">
            <div>
                &copy; {{ date('Y') }} Car History Clean. All rights reserved.
            </div>
            <div class="flex flex-wrap justify-center gap-6">
                <a href="{{ route('terms') }}" class="hover:text-white transition">Terms of Service</a>
                <a href="{{ route('disclaimer') }}" class="hover:text-white transition">Disclaimer</a>
                <a href="{{ route('privacy-policy') }}" class="hover:text-white transition">Privacy Policy</a>
                <a href="{{ route('sitemap-html') }}" class="hover:text-white transition">Sitemap</a>
            </div>
        </div>
    </div>
</footer>
