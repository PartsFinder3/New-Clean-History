@extends('layouts.app')

@section('title', 'Contact Us – Car History Clean')
@section('description', 'Get in touch for professional car history clean services. Contact us today for VIN reports and removal inquiries.')
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
        "telephone": "+92-300-4531248",
        "email": "mateenali1122@gmail.com",
        "contactPoint": {
            "@@type": "ContactPoint",
            "telephone": "+92-300-4531248",
            "contactType": "customer service",
            "availableLanguage": ["English", "Urdu"],
            "areaServed": ["US", "DE", "PL", "AU", "PK"]
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
        <h1 class="font-display text-3xl font-bold text-white md:text-4xl">
            Contact Us
        </h1>
        <p class="mt-2 text-zinc-400">
            Have a question or need a quote? Send us a message or call us directly.
        </p>
    </header>

    <div class="grid gap-12 lg:grid-cols-2">
        <section>
            <h2 class="font-display text-lg font-semibold text-white">
                Get in touch
            </h2>
            <p class="mt-2 text-sm text-zinc-400">
                Fill out the form and we'll get back to you as soon as
                possible.
            </p>
            
            <!-- Contact Info -->
            <div class="mt-8 space-y-4">
                <div class="flex items-center gap-4">
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-emerald-500/10 text-emerald-500">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                    </div>
                    <div>
                        <p class="text-xs font-medium text-zinc-500 uppercase tracking-wider">Phone / WhatsApp</p>
                        <a href="https://wa.me/923004531248" class="text-lg font-semibold text-white hover:text-cyan-400 transition">+92 300 4531248</a>
                    </div>
                </div>
                
                <div class="flex items-center gap-4">
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-blue-500/10 text-blue-500">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <div>
                        <p class="text-xs font-medium text-zinc-500 uppercase tracking-wider">Email</p>
                        <a href="mailto:mateenali1122@gmail.com" class="text-lg font-semibold text-white hover:text-cyan-400 transition">mateenali1122@gmail.com</a>
                    </div>
                </div>
            </div>
        </section>
        
        <form class="space-y-4">
            <div>
                <label for="name" class="block text-sm font-medium text-zinc-400">Name</label>
                <input id="name" name="name" type="text" required class="mt-1 w-full rounded-xl border border-zinc-700 bg-zinc-900/80 px-4 py-3 text-white placeholder-zinc-500 focus:border-cyan-500 focus:outline-none focus:ring-1 focus:ring-cyan-500" placeholder="Your name">
            </div>
            <div>
                <label for="email" class="block text-sm font-medium text-zinc-400">Email</label>
                <input id="email" name="email" type="email" required class="mt-1 w-full rounded-xl border border-zinc-700 bg-zinc-900/80 px-4 py-3 text-white placeholder-zinc-500 focus:border-cyan-500 focus:outline-none focus:ring-1 focus:ring-cyan-500" placeholder="you@example.com">
            </div>
            <div>
                <label for="message" class="block text-sm font-medium text-zinc-400">Message</label>
                <textarea id="message" name="message" rows="4" required class="mt-1 w-full rounded-xl border border-zinc-700 bg-zinc-900/80 px-4 py-3 text-white placeholder-zinc-500 focus:border-cyan-500 focus:outline-none focus:ring-1 focus:ring-cyan-500" placeholder="Your message or VIN inquiry..."></textarea>
            </div>
            <button type="button" onclick="alert('Inquiry received! We will contact you soon.')" class="inline-flex min-h-[44px] items-center justify-center rounded-xl bg-cyan-500 px-6 py-3 text-sm font-semibold text-zinc-950 transition hover:bg-cyan-400 active:bg-cyan-600 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:ring-offset-2 focus:ring-offset-zinc-950">
                Send message
            </button>
        </form>
        </form>
    </div>

    <!-- SEO Content Expansion -->
    <div class="mt-20 border-t border-zinc-800 pt-16">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-2xl font-bold text-white mb-6">Support and Guidance for Vehicle History Removal</h2>
            <div class="space-y-6 text-zinc-400 leading-relaxed text-sm">
                <p>
                    Navigating the complexities of digital vehicle history and online privacy can be overwhelming. Whether you are dealing with a one-time salvage record on BidFax or multiple instances of photos appearing across local auction trackers, our support team at <span class="text-white font-semibold">Car History Clean</span> is here to guide you through every step of the professional removal process.
                </p>
                <p>
                    When you contact us, please provide as much information as possible, including the 17-digit VIN (Vehicle Identification Number) you would like us to audit. Our initial assessment is always free of charge. We will perform a comprehensive scan of known databases, including Copart, IAAI, and hundreds of smaller niche auction platforms, to give you a clear picture of what data is publicly available.
                </p>
                <p>
                    We understand that timing is often critical, especially if you are in the middle of a vehicle sale or export transaction. That's why we prioritize WhatsApp communication for the fastest possible response. Our technical auditors are available across multiple time zones to ensure that your inquiries are processed within hours, not days. We typically complete full removals and search engine cache flushes within 3 to 7 business days, depending on the number of sites audited.
                </p>
                <p>
                    Rest assured that your data privacy is our top priority. All communications through this contact form and via our direct phone lines are kept strictly confidential. We do not share your VIN or personal details with any third parties, other than the necessary platform administrators required to facilitate the data removal process. We look forward to helping you restore your vehicle's digital reputation.
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
