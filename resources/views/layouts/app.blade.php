<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Car History Remover') | Professional VIN & Title Services</title>
    <meta name="description" content="@yield('description', 'Professional car history removal services. Clean title, verified VIN, transparent process.')">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS CDN -->
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
    
    @yield('scripts')
</body>
</html>
