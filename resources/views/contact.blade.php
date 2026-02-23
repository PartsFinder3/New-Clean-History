@extends('layouts.app')

@section('title', 'Contact Us | Get Your Car History Clean - Customer Support')
@section('description', 'Get in touch for professional car history clean services. Contact us today for VIN check reports, mileage fraud detection, and vehicle title inquiries.')
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
    </div>
</div>
@endsection
