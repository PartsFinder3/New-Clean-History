<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    {{-- ===== SEO: Title & Description ===== --}}
    <title>@yield('title', 'Car History Clean – Professional VIN History Check & Removal Services')</title>
    <meta name="description" content="@yield('description', 'Professional car history removal services. Clean title, verified VIN, transparent process. Trusted by dealers & car owners worldwide.')">
    
    @if(isset($siteSettings['google_search_console']))
        {!! $siteSettings['google_search_console'] !!}
    @else
        <meta name="google-site-verification" content="j2Dhat1GiXvzh-sU-dREKsek23bMGon3GS_A5cyC0gQ" />
    @endif

    @if(isset($siteSettings['bing_webmaster']))
        {!! $siteSettings['bing_webmaster'] !!}
    @endif

    @if(isset($siteSettings['yandex_webmaster']))
        {!! $siteSettings['yandex_webmaster'] !!}
    @endif

    @if(isset($siteSettings['microsoft_clarity']))
        {!! $siteSettings['microsoft_clarity'] !!}
    @endif

    @if(isset($siteSettings['google_analytics']))
        {!! $siteSettings['google_analytics'] !!}
    @endif

    @if(isset($siteSettings['header_scripts']))
        {!! $siteSettings['header_scripts'] !!}
    @endif

    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    
    {{-- ===== SEO: Canonical URL ===== --}}
    <link rel="canonical" href="@yield('canonical', url()->current())">
    
    {{-- ===== SEO: Open Graph Meta Tags ===== --}}
    <meta property="og:type" content="@yield('og_type', 'website')">
    <meta property="og:title" content="@yield('title', 'Car History Clean – Professional VIN History Check & Removal Services')">
    <meta property="og:description" content="@yield('description', 'Professional car history removal services. Clean title, verified VIN, transparent process.')">
    <meta property="og:url" content="@yield('canonical', url()->current())">
    <meta property="og:site_name" content="Car History Clean">
    <meta property="og:locale" content="en_US">
    <meta property="og:image" content="@yield('og_image')">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    
    {{-- ===== SEO: Twitter Card Meta Tags ===== --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('title', 'Car History Clean – Professional VIN History Check & Removal Services')">
    <meta name="twitter:description" content="@yield('description', 'Professional car history removal services. Clean title, verified VIN, transparent process.')">
    <meta name="twitter:image" content="@yield('og_image')">
    
    {{-- ===== SEO: Favicon ===== --}}
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon.ico') }}">
    
    {{-- ===== SEO: JSON-LD Structured Data ===== --}}
    @yield('schema')
    
    {{-- ===== SEO: Organization Schema (Global – every page) ===== --}}
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "@id": "{{ url('/') }}#organization",
        "name": "Car History Clean",
        "url": "{{ url('/') }}",
        "logo": {
            "@type": "ImageObject",
            "url": "{{ asset('favicon.ico') }}",
            "width": 112,
            "height": 112
        },
        "description": "Professional car history removal services. Clean title, verified VIN, transparent process.",
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+923004531248",
            "contactType": "customer service",
            "email": "mateenali1122@gmail.com",
            "availableLanguage": ["English"]
        },
        "sameAs": [
            "https://twitter.com/carhistoryclean",
            "https://facebook.com/carhistoryclean",
            "https://linkedin.com/company/carhistoryclean",
            "https://youtube.com/@carhistoryclean",
            "https://instagram.com/carhistoryclean",
            "https://pinterest.com/carhistoryclean",
            "https://tiktok.com/@carhistoryclean"
        ]
    }
    </script>

    {{-- ===== SiteNavigationElement Schema ===== --}}
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "ItemList",
        "itemListElement": [
            {
                "@type": "SiteNavigationElement",
                "position": 1,
                "name": "Home",
                "url": "{{ route('home') }}"
            },
            {
                "@type": "SiteNavigationElement",
                "position": 2,
                "name": "Cars",
                "url": "{{ route('cars.index') }}"
            },
            {
                "@type": "SiteNavigationElement",
                "position": 3,
                "name": "Services",
                "url": "{{ route('products') }}"
            },
            {
                "@type": "SiteNavigationElement",
                "position": 4,
                "name": "Blog",
                "url": "{{ route('blogs.index') }}"
            },
            {
                "@type": "SiteNavigationElement",
                "position": 5,
                "name": "About",
                "url": "{{ route('about') }}"
            },
            {
                "@type": "SiteNavigationElement",
                "position": 6,
                "name": "Contact",
                "url": "{{ route('contact') }}"
            }
        ]
    }
    </script>
    
    {{-- ===== Google Fonts ===== --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet" media="print" onload="this.media='all'">
    <noscript><link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet"></noscript>
    
    {{-- ===== Tailwind CSS CDN (Restored for Shared Hosting) ===== --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        background: '#0a0a0b',
                        foreground: '#fafafa',
                        muted: '#71717a',
                        accent: '#22d3ee',
                        'accent-hover': '#06b6d4',
                        card: '#18181b',
                        'card-border': '#27272a',
                    },
                    fontFamily: {
                        sans: ['Plus Jakarta Sans', 'sans-serif'],
                        display: ['Outfit', 'sans-serif'],
                    },
                }
            }
        }
    </script>
    
    <style>
        :root {
            --background: #0a0a0b;
            --foreground: #fafafa;
            --muted: #71717a;
            --accent: #22d3ee;
            --accent-hover: #06b6d4;
            --card: #18181b;
            --card-border: #27272a;
        }

        body {
            background-color: var(--background);
            color: var(--foreground);
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        .glass-card {
            background: rgba(24, 24, 27, 0.8);
            border: 1px solid var(--card-border);
            backdrop-filter: blur(12px);
        }

        .gradient-text {
            background: linear-gradient(135deg, #22d3ee 0%, #a78bfa 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .custom-scrollbar::-webkit-scrollbar {
            width: 6px;
        }
        .custom-scrollbar::-webkit-scrollbar-track {
            background: transparent;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #27272a;
            border-radius: 10px;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb:hover {
            background: #3f3f46;
        }
    </style>
    @yield('head')
</head>
<body class="min-h-screen antialiased">
    @include('partials.header')
    
    <main class="min-h-[calc(100vh-8rem)]">
        @yield('content')
    </main>
    
    @include('partials.footer')
    
    {{-- ===== Back to Top Button ===== --}}
    <button id="back-to-top" class="fixed bottom-8 right-8 z-50 flex h-12 w-12 translate-y-20 items-center justify-center rounded-xl bg-cyan-500 text-zinc-950 opacity-0 shadow-lg shadow-cyan-500/20 transition-all duration-300 hover:bg-cyan-400 active:scale-95">
        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 15l7-7 7 7" />
        </svg>
    </button>

    <script>
        const backToTop = document.getElementById('back-to-top');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 500) {
                backToTop.classList.remove('translate-y-20', 'opacity-0');
            } else {
                backToTop.classList.add('translate-y-20', 'opacity-0');
            }
        });
        backToTop.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    </script>

    @yield('scripts')
</body>
</html>
