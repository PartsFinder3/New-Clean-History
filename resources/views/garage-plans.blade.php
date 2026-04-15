@extends('layouts.app')

@section('title', 'List Your Car in UAE | Garage Car Listing Plans | CarHistoryRemove')
@section('description', 'Sell your car faster with our garage listing packages. Free, Featured, and Premium plans available for UAE car dealers and private sellers in Dubai, Abu Dhabi, Sharjah.')
@section('keywords', 'sell car UAE, list car Dubai, garage car listing, used car listing Abu Dhabi, car marketplace UAE, sell used car Sharjah')

@section('content')
<section class="relative overflow-hidden border-b border-card-border px-4 py-16 md:px-8 md:py-24 bg-gradient-to-br from-blue-50 via-white to-white">
    <div class="relative mx-auto max-w-6xl">
        <div class="text-center max-w-3xl mx-auto">
            <h1 class="font-display text-4xl font-bold tracking-tight text-foreground md:text-5xl">
                List Your Car in <span class="gradient-text">UAE</span>
            </h1>
            <p class="mt-4 text-lg text-muted">
                Reach thousands of buyers in Dubai, Abu Dhabi, and across the UAE. Choose the plan that works for you.
            </p>
        </div>
    </div>
</section>

<section class="py-20 px-4 md:px-8 bg-background-secondary">
    <div class="mx-auto max-w-6xl">
        <!-- Toggle -->
        <div class="flex justify-center mb-12">
            <div class="inline-flex bg-white rounded-full p-1 border border-card-border shadow-sm">
                <button class="px-6 py-2 rounded-full text-sm font-semibold bg-accent text-white transition">Per Car</button>
                <button class="px-6 py-2 rounded-full text-sm font-semibold text-muted hover:text-foreground transition">Monthly Plan</button>
            </div>
        </div>

        <div class="grid gap-8 md:grid-cols-3">
            <!-- Free Plan -->
            <div class="glass-card flex flex-col p-8">
                <div class="mb-6">
                    <h3 class="text-foreground font-display text-xl font-bold mb-2">Free Listing</h3>
                    <div class="flex items-baseline gap-1">
                        <span class="text-4xl font-black text-foreground">AED 0</span>
                    </div>
                    <p class="text-sm text-muted mt-2">Perfect for individual sellers</p>
                </div>
                <ul class="space-y-3 mb-8 text-sm text-muted flex-1">
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-success" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        1 car listing
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-success" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        Basic photos (5 max)
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-success" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        WhatsApp button
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-success" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        30-day listing
                    </li>
                    <li class="flex items-center gap-2 opacity-40">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                        Priority display
                    </li>
                    <li class="flex items-center gap-2 opacity-40">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                        Verified badge
                    </li>
                </ul>
                <a href="{{ route('contact') }}" class="w-full py-3 rounded-xl border-2 border-card-border text-foreground font-bold hover:border-accent hover:text-accent transition-colors text-center">
                    Get Started Free
                </a>
            </div>

            <!-- Featured Plan (Most Popular) -->
            <div class="relative glass-card flex flex-col p-8 border-2 border-accent shadow-lg">
                <div class="absolute -top-4 left-1/2 -translate-x-1/2 bg-accent text-white text-xs font-bold uppercase px-4 py-1.5 rounded-full tracking-wider">
                    Most Popular
                </div>
                <div class="mb-6">
                    <h3 class="text-foreground font-display text-xl font-bold mb-2">Featured</h3>
                    <div class="flex items-baseline gap-1">
                        <span class="text-4xl font-black text-foreground">AED 49</span>
                        <span class="text-muted text-sm">/car</span>
                    </div>
                    <p class="text-sm text-muted mt-2">Best for dealers & frequent sellers</p>
                </div>
                <ul class="space-y-3 mb-8 text-sm text-muted flex-1">
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        Up to 5 cars
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        <strong>Priority display</strong> in search
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        10 photos per car
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        Bold card design
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        60-day listing
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        "Featured" badge
                    </li>
                </ul>
                <a href="https://wa.me/923004531248?text=Hi, I want to list my car with the Featured Plan (AED 49)" target="_blank" class="w-full py-3 rounded-xl bg-accent text-white font-bold hover:bg-accent-hover active:scale-95 transition-all text-center">
                    Choose Featured
                </a>
            </div>

            <!-- Premium Plan -->
            <div class="glass-card flex flex-col p-8">
                <div class="mb-6">
                    <h3 class="text-foreground font-display text-xl font-bold mb-2">Premium Garage</h3>
                    <div class="flex items-baseline gap-1">
                        <span class="text-4xl font-black text-foreground">AED 199</span>
                        <span class="text-muted text-sm">/month</span>
                    </div>
                    <p class="text-sm text-muted mt-2">For professional dealerships</p>
                </div>
                <ul class="space-y-3 mb-8 text-sm text-muted flex-1">
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        <strong>Unlimited cars</strong>
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        Top of search results
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        Verified Dealer badge
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        Dedicated garage page
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        WhatsApp + Call buttons
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        Monthly analytics report
                    </li>
                </ul>
                <a href="https://wa.me/923004531248?text=Hi, I want to subscribe to Premium Garage Plan (AED 199/month)" target="_blank" class="w-full py-3 rounded-xl border-2 border-card-border text-foreground font-bold hover:border-gold hover:text-gold transition-colors text-center">
                    Choose Premium
                </a>
            </div>
        </div>

        <!-- Note -->
        <div class="mt-8 text-center">
            <p class="text-sm text-muted">
                <span class="badge-verified">Add Clean History badge = +AED 25 per listing</span>
            </p>
        </div>
    </div>
</section>

<!-- How It Works -->
<section class="py-20 px-4 md:px-8 bg-white">
    <div class="mx-auto max-w-6xl">
        <h2 class="font-display text-3xl font-bold text-foreground text-center mb-12">
            How to <span class="gradient-text">List Your Car</span>
        </h2>
        <div class="grid md:grid-cols-4 gap-8">
            <div class="text-center">
                <div class="w-16 h-16 rounded-full bg-blue-100 flex items-center justify-center mx-auto mb-4">
                    <span class="text-2xl font-bold text-accent">1</span>
                </div>
                <h3 class="font-semibold text-foreground mb-2">Submit Details</h3>
                <p class="text-sm text-muted">Fill out our simple form with your car details and photos</p>
            </div>
            <div class="text-center">
                <div class="w-16 h-16 rounded-full bg-blue-100 flex items-center justify-center mx-auto mb-4">
                    <span class="text-2xl font-bold text-accent">2</span>
                </div>
                <h3 class="font-semibold text-foreground mb-2">We Review</h3>
                <p class="text-sm text-muted">Our team verifies your listing within 24 hours</p>
            </div>
            <div class="text-center">
                <div class="w-16 h-16 rounded-full bg-blue-100 flex items-center justify-center mx-auto mb-4">
                    <span class="text-2xl font-bold text-accent">3</span>
                </div>
                <h3 class="font-semibold text-foreground mb-2">Go Live</h3>
                <p class="text-sm text-muted">Your car appears in our marketplace for buyers to see</p>
            </div>
            <div class="text-center">
                <div class="w-16 h-16 rounded-full bg-blue-100 flex items-center justify-center mx-auto mb-4">
                    <span class="text-2xl font-bold text-accent">4</span>
                </div>
                <h3 class="font-semibold text-foreground mb-2">Get Leads</h3>
                <p class="text-sm text-muted">Receive WhatsApp inquiries from interested buyers</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="relative overflow-hidden bg-gradient-to-br from-blue-600 to-blue-800 px-4 py-16 md:px-8">
    <div class="relative mx-auto max-w-4xl text-center">
        <h2 class="font-display text-3xl font-bold text-white">
            Ready to Sell Your Car?
        </h2>
        <p class="mt-4 text-blue-100 text-lg">
            List your car today and reach thousands of buyers across Dubai, Abu Dhabi, and the UAE.
        </p>
        <div class="mt-8 flex flex-wrap justify-center gap-4">
            <a href="https://wa.me/923004531248?text=Hi, I want to list my car for sale in UAE" target="_blank" class="inline-flex items-center gap-2 rounded-xl bg-white px-8 py-4 text-sm font-bold text-blue-700 transition hover:bg-blue-50">
                <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L0 24l6.335-1.662c1.72.94 3.659 1.437 5.634 1.437h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
                Start via WhatsApp
            </a>
            <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 rounded-xl border border-white/30 bg-white/10 px-8 py-4 text-sm font-bold text-white transition hover:bg-white/20">
                Contact Form
            </a>
        </div>
    </div>
</section>
@endsection
