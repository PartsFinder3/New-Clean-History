<!DOCTYPE html>
<html lang="en" class="light">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    {{-- ===== SEO: Title & Description ===== --}}
    <title>@yield('title', 'Car History Clean – Professional VIN History Check & Removal Services')</title>
    <meta name="description" content="@yield('description', 'Professional car history removal services. Clean title, verified VIN, transparent process. Trusted by dealers & car owners worldwide.')">
    <meta name="keywords" content="@yield('keywords', 'car history removal, VIN history check, clean car history, auction history removal, hide car VIN, delete car photos, auto auction record cleaner, Copart history removal, IAAI history removal, BidFax removal service, insurance car history check, US car auction history, vehicle data removal')">
    
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
    <meta name="geo.region" content="AE">
    <meta name="geo.placename" content="Dubai, UAE">
    <meta name="geo.position" content="25.2048;55.2708">
    <meta name="ICBM" content="25.2048, 55.2708">

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
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon.svg') }}">
    
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
    
    {{-- ===== Google Fonts: Sora (headings), DM Sans (body), JetBrains Mono (VIN) ===== --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=JetBrains+Mono:wght@400;500;600;700&family=Sora:wght@400;500;600;700&display=swap" rel="stylesheet" media="print" onload="this.media='all'">
    <noscript><link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=JetBrains+Mono:wght@400;500;600;700&family=Sora:wght@400;500;600;700&display=swap" rel="stylesheet"></noscript>
    
    {{-- ===== Tailwind CSS CDN ===== --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        background: '#FFFFFF',
                        'background-secondary': '#F7F8FA',
                        foreground: '#0F172A',
                        muted: '#475569',
                        'muted-light': '#94A3B8',
                        accent: '#1D4ED8',
                        'accent-hover': '#1E40AF',
                        'accent-light': '#EFF6FF',
                        card: '#FFFFFF',
                        'card-border': '#E5E7EB',
                        success: '#16A34A',
                        warning: '#D97706',
                        danger: '#DC2626',
                        gold: '#B8860B',
                    },
                    fontFamily: {
                        sans: ['DM Sans', 'sans-serif'],
                        display: ['Sora', 'sans-serif'],
                        mono: ['JetBrains Mono', 'monospace'],
                    },
                    boxShadow: {
                        'sm': '0 1px 3px rgba(0,0,0,0.08)',
                        'md': '0 4px 16px rgba(0,0,0,0.10)',
                        'lg': '0 8px 32px rgba(0,0,0,0.12)',
                    },
                    borderRadius: {
                        'DEFAULT': '10px',
                        'lg': '16px',
                    }
                }
            }
        }
    </script>
    
    <style>
        :root {
            --background: #FFFFFF;
            --background-secondary: #F7F8FA;
            --foreground: #0F172A;
            --muted: #475569;
            --muted-light: #94A3B8;
            --accent: #1D4ED8;
            --accent-hover: #1E40AF;
            --accent-light: #EFF6FF;
            --card: #FFFFFF;
            --card-border: #E5E7EB;
            --success: #16A34A;
            --warning: #D97706;
            --danger: #DC2626;
            --gold: #B8860B;
        }

        body {
            background-color: var(--background);
            color: var(--foreground);
            font-family: 'DM Sans', sans-serif;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Sora', sans-serif;
        }

        .font-mono {
            font-family: 'JetBrains Mono', monospace;
        }

        .glass-card {
            background: var(--card);
            border: 1px solid var(--card-border);
            box-shadow: 0 1px 3px rgba(0,0,0,0.08);
            border-radius: 10px;
        }

        .glass-card:hover {
            box-shadow: 0 4px 16px rgba(0,0,0,0.10);
        }

        .gradient-text {
            background: linear-gradient(135deg, #1D4ED8 0%, #3B82F6 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .badge-success {
            background: #DCFCE7;
            color: #166534;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
        }

        .badge-verified {
            background: #DBEAFE;
            color: #1E40AF;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
        }

        .btn-primary {
            background: var(--accent);
            color: white;
            padding: 12px 24px;
            border-radius: 10px;
            font-weight: 600;
            transition: all 0.2s;
        }

        .btn-primary:hover {
            background: var(--accent-hover);
        }

        .btn-secondary {
            background: white;
            color: var(--foreground);
            border: 1px solid var(--card-border);
            padding: 12px 24px;
            border-radius: 10px;
            font-weight: 600;
            transition: all 0.2s;
        }

        .btn-secondary:hover {
            border-color: var(--accent);
            color: var(--accent);
        }

        /* WhatsApp Floating Button */
        .whatsapp-float {
            position: fixed;
            bottom: 24px;
            right: 24px;
            z-index: 50;
            background: #25D366;
            color: white;
            padding: 12px 20px;
            border-radius: 50px;
            box-shadow: 0 4px 16px rgba(37, 211, 102, 0.3);
            display: flex;
            align-items: center;
            gap: 8px;
            font-weight: 600;
            transition: all 0.3s;
        }

        .whatsapp-float:hover {
            background: #128C7E;
            transform: translateY(-2px);
            box-shadow: 0 8px 24px rgba(37, 211, 102, 0.4);
        }

        /* Cookie Consent */
        .cookie-consent {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            background: white;
            border-top: 1px solid var(--card-border);
            padding: 16px 24px;
            z-index: 100;
            box-shadow: 0 -4px 16px rgba(0,0,0,0.08);
        }

        .custom-scrollbar::-webkit-scrollbar {
            width: 6px;
        }
        .custom-scrollbar::-webkit-scrollbar-track {
            background: transparent;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #CBD5E1;
            border-radius: 10px;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb:hover {
            background: #94A3B8;
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

    {{-- ===== Floating WhatsApp Button ===== --}}
    <a href="https://wa.me/923004531248?text=Hi, I need car history removal service" target="_blank" rel="noopener" class="whatsapp-float" aria-label="Contact us on WhatsApp">
        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L0 24l6.335-1.662c1.72.94 3.659 1.437 5.634 1.437h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
        </svg>
        <span>Free Audit</span>
    </a>

    {{-- ===== Cookie Consent Banner ===== --}}
    <div id="cookie-consent" class="cookie-consent hidden">
        <div class="max-w-6xl mx-auto flex flex-col sm:flex-row items-center justify-between gap-4">
            <p class="text-sm text-gray-600">We use cookies to improve your experience. By using this site you agree to our <a href="{{ route('privacy-policy') }}" class="text-blue-600 hover:underline">Privacy Policy</a>.</p>
            <div class="flex gap-3">
                <button onclick="declineCookies()" class="px-4 py-2 text-sm font-medium text-gray-600 hover:text-gray-900 transition">Decline</button>
                <button onclick="acceptCookies()" class="px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 transition">Accept</button>
            </div>
        </div>
    </div>

    {{-- ===== Back to Top Button ===== --}}
    <button id="back-to-top" class="fixed bottom-24 right-6 z-40 flex h-12 w-12 translate-y-20 items-center justify-center rounded-xl bg-accent text-white opacity-0 shadow-lg transition-all duration-300 hover:bg-accent-hover active:scale-95">
        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 15l7-7 7 7" />
        </svg>
    </button>

    <script>
        // Back to top button
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

        // Cookie Consent
        function acceptCookies() {
            localStorage.setItem('cookiesAccepted', 'true');
            document.getElementById('cookie-consent').classList.add('hidden');
            // Load analytics here if needed
        }

        function declineCookies() {
            localStorage.setItem('cookiesAccepted', 'false');
            document.getElementById('cookie-consent').classList.add('hidden');
        }

        // Show cookie banner if not set
        if (localStorage.getItem('cookiesAccepted') === null) {
            document.getElementById('cookie-consent').classList.remove('hidden');
        }
    </script>

    @yield('scripts')
</body>
</html>
