@extends('layouts.app')

@section('title', $product['meta_title'])
@section('description', $product['meta_description'])
@section('canonical', route('services.show', $product['slug']))
@section('og_image', $product['image'])

@section('schema')
{{-- Service Schema --}}
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "Service",
    "name": "{{ $product['name'] }} History Removal",
    "url": "{{ route('services.show', $product['slug']) }}",
    "description": "{{ $product['full_description'] }}",
    "image": "{{ $product['image'] }}",
    "provider": {
        "@@type": "Organization",
        "name": "Car History Clean",
        "url": "{{ url('/') }}",
        "telephone": "+923004531248",
        "email": "mateenali1122@gmail.com"
    },
    "serviceType": "VIN History Removal",
    "areaServed": {
        "@@type": "Country",
        "name": "Worldwide"
    },
    "offers": {
        "@@type": "Offer",
        "price": "{{ $product['price'] }}",
        "priceCurrency": "USD",
        "availability": "https://schema.org/InStock",
        "priceValidUntil": "{{ date('Y-12-31') }}",
        "seller": {
            "@@type": "Organization",
            "name": "Car History Clean",
            "telephone": "+923004531248",
            "email": "mateenali1122@gmail.com"
        }
    },
    "aggregateRating": {
        "@@type": "AggregateRating",
        "ratingValue": "4.8",
        "reviewCount": "500",
        "bestRating": "5",
        "worstRating": "1"
    }
}
</script>

{{-- BreadcrumbList --}}
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
            "name": "Services",
            "item": "{{ route('products') }}"
        },
        {
            "@@type": "ListItem",
            "position": 3,
            "name": "{{ $product['name'] }}",
            "item": "{{ route('services.show', $product['slug']) }}"
        }
    ]
}
</script>

{{-- FAQPage Schema --}}
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "FAQPage",
    "mainEntity": [
        {
            "@@type": "Question",
            "name": "Is this removal permanent?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Yes. Once we remove the data from {{ $product['name'] }}, it is purged from their database and cannot be recovered by public users."
            }
        },
        {
            "@@type": "Question",
            "name": "Will it also disappear from Google?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "After the site source is cleared, Google usually updates its index within a few days, removing the links and images from search results."
            }
        },
        {
            "@@type": "Question",
            "name": "How long does the {{ $product['name'] }} removal take?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Our team typically completes {{ $product['name'] }} history removal within 24-72 hours after receiving your VIN."
            }
        },
        {
            "@@type": "Question",
            "name": "How much does {{ $product['name'] }} removal cost?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Our {{ $product['name'] }} removal service starts at ${{ $product['price'] }}. Contact us via WhatsApp for a detailed quote."
            }
        }
    ]
}
</script>
@endsection

@@section('content')
<div class="mx-auto max-w-7xl px-4 py-12 md:px-8 md:py-20">
    <!-- Breadcrumbs -->
    <nav class="mb-12 flex items-center gap-2 text-sm text-muted">
        <a href="{{ route('home') }}" class="hover:text-accent font-medium">Home</a>
        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
        <a href="{{ route('products') }}" class="hover:text-accent font-medium">Services</a>
        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
        <span class="text-foreground font-bold">{{ $product['name'] }}</span>
    </nav>

    <div class="grid gap-16 lg:grid-cols-12">
        <!-- Left: Image and Key Info -->
        <div class="lg:col-span-5">
            <div class="sticky top-28">
                <div class="relative overflow-hidden rounded-3xl border border-card-border bg-white p-8 shadow-lg">
                    <div class="absolute inset-0 bg-gradient-to-br from-blue-50/50 via-transparent to-transparent"></div>
                    
                    <div class="relative flex aspect-video w-full items-center justify-center rounded-2xl bg-background-secondary p-10 border border-card-border mb-8">
                        <img 
                            src="{{ $product['image'] }}" 
                            alt="{{ $product['name'] }} history removal service" 
                            class="max-h-full max-w-full object-contain"
                            onerror="this.src='https://via.placeholder.com/400x200?text={{ urlencode($product['name']) }}'"
                        >
                    </div>

                    <div class="flex items-center justify-between">
                        <div>
                            <h1 class="font-display text-4xl font-bold text-foreground mb-2">{{ $product['name'] }}</h1>
                            <p class="text-muted font-medium">Professional Removal</p>
                        </div>
                        <div class="text-right">
                            <span class="text-xs font-bold uppercase tracking-widest text-muted">Starts At</span>
                            <div class="text-3xl font-black text-accent">${{ $product['price'] }}</div>
                        </div>
                    </div>

                    <div class="mt-10 space-y-4">
                        <a href="https://wa.me/923004531248?text={{ urlencode('Hi, I want to delete my car history from ' . $product['name'] . '. Please assist me with the $' . $product['price'] . ' service.') }}" 
                           target="_blank"
                           class="btn-primary flex w-full items-center justify-center gap-3 py-4 text-lg shadow-xl hover:shadow-2xl transition-all"
                        >
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L0 24l6.335-1.662c1.72.94 3.659 1.437 5.634 1.437h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                            </svg>
                            Delete Car History
                        </a>
                        <a href="https://wa.me/923004531248?text={{ urlencode('Hi, I\'d like to see a sample history removal report for ' . $product['name'] . '.') }}" 
                           target="_blank"
                           class="btn-secondary w-full text-center py-4">
                            View Sample Report
                        </a>
                    </div>

                    <div class="mt-8 border-t border-card-border pt-8 flex items-center gap-4">
                        <div class="flex -space-x-2">
                            <div class="h-8 w-8 rounded-full border-2 border-white bg-blue-100 flex items-center justify-center text-[10px] font-bold text-blue-600">JD</div>
                            <div class="h-8 w-8 rounded-full border-2 border-white bg-blue-100 flex items-center justify-center text-[10px] font-bold text-blue-600">AJ</div>
                            <div class="h-8 w-8 rounded-full border-2 border-white bg-blue-100 flex items-center justify-center text-[10px] font-bold text-blue-600">MK</div>
                        </div>
                        <span class="text-xs text-muted">Joined by 12,000+ happy car owners</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right: SEO Optimized Content -->
        <div class="lg:col-span-7">
            <div class="prose prose-slate max-w-none">
                <h2 class="text-3xl font-bold text-foreground mb-6 font-display leading-tight">Mastering Vehicle Privacy: <span class="gradient-text">{{ $product['name'] }}</span> Removal Service</h2>
                
                <p class="text-lg leading-relaxed text-muted mb-10">
                    {{ $product['full_description'] }}
                </p>

                <h3 class="text-2xl font-bold text-foreground mb-4 font-display">Why Clean Your {{ $product['name'] }} History?</h3>
                <div class="grid gap-6 sm:grid-cols-2 mb-12">
                    <div class="rounded-2xl border border-card-border bg-white p-6 shadow-sm hover:shadow-md transition-shadow">
                        <div class="mb-4 text-accent">
                            <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                        </div>
                        <h4 class="text-foreground font-bold mb-2">Maximum Privacy</h4>
                        <p class="text-sm text-muted">Keep your vehicle purchase details, auction photos, and pricing strictly confidential from everyone.</p>
                    </div>
                    <div class="rounded-2xl border border-card-border bg-white p-6 shadow-sm hover:shadow-md transition-shadow">
                        <div class="mb-4 text-green-600">
                            <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
                        </div>
                        <h4 class="text-foreground font-bold mb-2">Higher Resale Value</h4>
                        <p class="text-sm text-muted">Prevent potential buyers from seeing salvage records or low auction prices that decrease value.</p>
                    </div>
                </div>

                <h3 class="text-2xl font-bold text-foreground mb-6 font-display">Our Removal Process</h3>
                <div class="space-y-8 mb-16">
                    <div class="flex gap-6">
                        <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-accent-light text-accent font-black border border-blue-100 shadow-sm">1</div>
                        <div>
                            <h4 class="text-foreground font-bold text-lg">VIN Submission</h4>
                            <p class="text-muted mt-1 leading-relaxed">Send us your vehicle's VIN code via WhatsApp. We analyze the digital footprint for free.</p>
                        </div>
                    </div>
                    <div class="flex gap-6">
                        <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-accent-light text-accent font-black border border-blue-100 shadow-sm">2</div>
                        <div>
                            <h4 class="text-foreground font-bold text-lg">Deep Analysis</h4>
                            <p class="text-muted mt-1 leading-relaxed">We scan {{ $product['name'] }} and 50+ other databases to identify every online archive of your car.</p>
                        </div>
                    </div>
                    <div class="flex gap-6">
                        <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-accent-light text-accent font-black border border-blue-100 shadow-sm">3</div>
                        <div>
                            <h4 class="text-foreground font-bold text-lg">Permanent Deletion</h4>
                            <p class="text-muted mt-1 leading-relaxed">Our legal team cleans logs, auction data, and photos. Usually completed within 24-72 hours.</p>
                        </div>
                    </div>
                </div>

                <div class="rounded-3xl bg-background-secondary p-8 border border-card-border">
                    <h3 class="text-foreground font-bold mb-6 font-display">Frequently Asked Questions</h3>
                    <div class="space-y-6">
                        <div class="bg-white p-5 rounded-xl border border-card-border shadow-sm">
                            <h5 class="text-foreground font-bold text-sm mb-2 uppercase tracking-wider">Is this removal permanent?</h5>
                            <p class="text-muted text-sm italic">Yes. Once we remove the data from {{ $product['name'] }}, it is purged from their database and cannot be recovered.</p>
                        </div>
                        <div class="bg-white p-5 rounded-xl border border-card-border shadow-sm">
                            <h5 class="text-foreground font-bold text-sm mb-2 uppercase tracking-wider">Will it also disappear from Google?</h5>
                            <p class="text-muted text-sm italic">After the source is cleared, Google usually updates its index within 2-5 days, removing all image references.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
