@extends('layouts.app')

@section('title', 'Contact Us | Car History Removal UAE - Dubai & Abu Dhabi')
@section('description', 'Contact our UAE car history removal team in Dubai. WhatsApp, phone, and email support for VIN cleaning services across Dubai, Abu Dhabi, Sharjah.')
@section('canonical', route('contact'))

@section('schema')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "ContactPage",
    "name": "Contact Car History Clean",
    "url": "{{ route('contact') }}",
    "description": "Get in touch for professional car history clean services.",
    "mainEntity": {
        "@@type": "Organization",
        "name": "Car History Clean",
        "telephone": "+971-XX-XXX-XXXX",
        "email": "info@carhistoryremove.online",
        "contactPoint": {
            "@@type": "ContactPoint",
            "telephone": "+971-XX-XXX-XXXX",
            "contactType": "customer service",
            "availableLanguage": ["English", "Arabic"],
            "areaServed": ["AE", "US", "DE", "PL", "AU"]
        }
    }
}
</script>

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
            "name": "Contact Us",
            "item": "{{ route('contact') }}"
        }
    ]
}
</script>
@endsection

@section('content')
<div class="mx-auto max-w-6xl px-4 py-12 md:px-8 md:py-16">
    <header class="mb-10">
        <h1 class="font-display text-3xl font-bold text-foreground md:text-4xl">
            Contact Us
        </h1>
        <p class="mt-2 text-muted">
            Based in Dubai, serving UAE, USA & Europe. Reach us via WhatsApp for fastest response.
        </p>
    </header>

    <div class="grid gap-12 lg:grid-cols-2">
        <section>
            <h2 class="font-display text-lg font-semibold text-foreground">
                UAE Contact Information
            </h2>
            <p class="mt-2 text-sm text-muted">
                Serving Dubai, Abu Dhabi, Sharjah & all UAE emirates. WhatsApp is the fastest way to reach us.
            </p>

            <!-- Contact Info -->
            <div class="mt-8 space-y-4">
                <div class="flex items-center gap-4">
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-green-100 text-green-600">
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L0 24l6.335-1.662c1.72.94 3.659 1.437 5.634 1.437h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                        </svg>
                    </div>
                    <div>
                        <p class="text-xs font-medium text-muted uppercase tracking-wider">WhatsApp</p>
                        <a href="https://wa.me/923004531248" target="_blank" class="text-lg font-semibold text-foreground hover:text-accent transition">+971 XX XXX XXXX</a>
                    </div>
                </div>

                <div class="flex items-center gap-4">
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-blue-100 text-blue-600">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                    </div>
                    <div>
                        <p class="text-xs font-medium text-muted uppercase tracking-wider">Phone</p>
                        <span class="text-lg font-semibold text-foreground">+971 XX XXX XXXX</span>
                    </div>
                </div>

                <div class="flex items-center gap-4">
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-blue-100 text-blue-600">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <div>
                        <p class="text-xs font-medium text-muted uppercase tracking-wider">Email</p>
                        <a href="mailto:info@carhistoryremove.online" class="text-lg font-semibold text-foreground hover:text-accent transition">info@carhistoryremove.online</a>
                    </div>
                </div>

                <div class="flex items-center gap-4">
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-orange-100 text-orange-600">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <div>
                        <p class="text-xs font-medium text-muted uppercase tracking-wider">Location</p>
                        <span class="text-lg font-semibold text-foreground">Dubai, United Arab Emirates</span>
                    </div>
                </div>
            </div>

            <!-- Map placeholder -->
            <div class="mt-8 p-6 bg-background-secondary rounded-xl border border-card-border">
                <p class="text-sm text-muted text-center">
                    <span class="font-semibold text-foreground">Serving all UAE locations:</span><br>
                    Dubai, Abu Dhabi, Sharjah, Ajman, Ras Al Khaimah, Fujairah, Umm Al Quwain
                </p>
            </div>
        </section>
        
        <form class="space-y-4">
            <div>
                <label for="name" class="block text-sm font-medium text-foreground">Name *</label>
                <input id="name" name="name" type="text" required class="mt-1 w-full rounded-xl border border-card-border bg-white px-4 py-3 text-foreground placeholder-muted focus:border-accent focus:outline-none focus:ring-1 focus:ring-accent" placeholder="Your name">
            </div>
            <div>
                <label for="email" class="block text-sm font-medium text-foreground">Email *</label>
                <input id="email" name="email" type="email" required class="mt-1 w-full rounded-xl border border-card-border bg-white px-4 py-3 text-foreground placeholder-muted focus:border-accent focus:outline-none focus:ring-1 focus:ring-accent" placeholder="you@example.com">
            </div>
            <div>
                <label for="phone" class="block text-sm font-medium text-foreground">Phone / WhatsApp</label>
                <input id="phone" name="phone" type="tel" class="mt-1 w-full rounded-xl border border-card-border bg-white px-4 py-3 text-foreground placeholder-muted focus:border-accent focus:outline-none focus:ring-1 focus:ring-accent" placeholder="+971 XX XXX XXXX">
            </div>
            <div>
                <label for="vin" class="block text-sm font-medium text-foreground">VIN Number (optional)</label>
                <input id="vin" name="vin" type="text" maxlength="17" class="mt-1 w-full rounded-xl border border-card-border bg-white px-4 py-3 text-foreground font-mono placeholder-muted focus:border-accent focus:outline-none focus:ring-1 focus:ring-accent" placeholder="17 character VIN for free audit">
            </div>
            <div>
                <label for="message" class="block text-sm font-medium text-foreground">Message *</label>
                <textarea id="message" name="message" rows="4" required class="mt-1 w-full rounded-xl border border-card-border bg-white px-4 py-3 text-foreground placeholder-muted focus:border-accent focus:outline-none focus:ring-1 focus:ring-accent" placeholder="Your message or inquiry..."></textarea>
            </div>
            <button type="button" onclick="alert('Inquiry received! We will contact you soon.')" class="btn-primary w-full">
                Send Message
            </button>
        </form>
    </div>

    <!-- SEO Content Expansion -->
    <div class="mt-20 border-t border-card-border pt-16 px-4">
        <div class="max-w-4xl mx-auto text-center md:text-left">
            <h2 class="text-3xl font-bold text-foreground mb-8 font-display">Specialized Car History Support</h2>
            <div class="grid md:grid-cols-2 gap-10 text-muted leading-relaxed text-sm text-left">
                <div class="space-y-6">
                    <p>
                        Navigating the complexities of digital vehicle history and online privacy can be overwhelming. Whether you are dealing with a one-time salvage record on <span class="text-accent font-bold">BidFax</span> or multiple instances of photos appearing across local auction trackers, our support team at <strong>Car History Clean</strong> is here to guide you through every step of the professional removal process.
                    </p>
                    <p>
                        When you contact us, please provide as much information as possible, including the 17-digit VIN you would like us to audit. Our initial assessment is always free of charge. We perform a comprehensive scan of known databases, including <span class="text-accent font-bold">Copart</span>, IAAI, and hundreds of smaller niche auction platforms.
                    </p>
                </div>
                <div class="space-y-6">
                    <p>
                        We understand that timing is critical, especially if you are in the middle of a vehicle sale or export transaction in Dubai or Abu Dhabi. That's why we prioritize WhatsApp communication for the fastest possible response. Our technical auditors typically complete full removals and search engine cache flushes within 24 to 72 hours.
                    </p>
                    <p>
                        Rest assured that your data privacy is our top priority. All communications are kept strictly confidential. We do not share your VIN or personal details with any third parties other than the necessary platform administrators required to facilitate the data removal process.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
