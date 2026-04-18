@extends('layouts.app')

@section('title', 'Terms of Service – Car History Clean')
@section('description', 'Read the Terms of Service for Car History Clean. Understand our data removal policies and service guarantees.')
@section('canonical', route('terms'))

@section('content')
<div class="mx-auto max-w-4xl px-4 py-16 md:px-8 md:py-24 text-center md:text-left">
    <h1 class="font-display text-4xl font-bold text-foreground md:text-5xl mb-12">
        Terms of <span class="gradient-text">Service</span>
    </h1>
    
    <div class="prose prose-slate prose-zinc max-w-none space-y-12 text-muted text-left">
        <section class="bg-white p-8 rounded-3xl border border-card-border shadow-sm">
            <h2 class="text-2xl font-bold text-foreground mb-4 font-display">1. Acceptance of Terms</h2>
            <p class="leading-relaxed">By accessing and using the services provided by Car History Clean ("we," "us," or "our"), you agree to be bound by these Terms of Service. If you do not agree to these terms, please refrain from using our services.</p>
        </section>

        <section class="bg-white p-8 rounded-3xl border border-card-border shadow-sm">
            <h2 class="text-2xl font-bold text-foreground mb-4 font-display">2. Description of Service</h2>
            <p class="leading-relaxed">Car History Clean provide digital privacy and reputation management services specifically focused on vehicle history data removal. We facilitate the deletion of public records, auction photos, and technical data from third-party databases through legal and technical channels.</p>
        </section>

        <section class="bg-white p-8 rounded-3xl border border-card-border shadow-sm">
            <h2 class="text-2xl font-bold text-foreground mb-4 font-display">3. User Obligations</h2>
            <p class="leading-relaxed">Users must provide accurate vehicle information (VIN) and prove ownership or legal authorization to requested data removal. Any attempt to use our services for fraudulent purposes or on vehicles not legally associated with the user is strictly prohibited.</p>
        </section>

        <section class="bg-white p-8 rounded-3xl border border-card-border shadow-sm">
            <h2 class="text-2xl font-bold text-foreground mb-4 font-display">4. Service Guarantees</h2>
            <p class="leading-relaxed">While we strive for 100% removal, we are dependent on third-party platform responsiveness. We guarantee that the records within our direct control and those on major supported platforms will be removed or we will provide a full refund as per our refund policy.</p>
        </section>

        <section class="bg-white p-8 rounded-3xl border border-card-border shadow-sm">
            <h2 class="text-2xl font-bold text-foreground mb-4 font-display">5. Payment and Refunds</h2>
            <p class="leading-relaxed">Payments for our services must be made in full before the removal process begins unless otherwise agreed upon in writing. We offer various packages with tiered pricing based on the number of sites analyzed and cleaned.</p>
            <p class="mt-4 p-4 bg-blue-50/50 rounded-xl border-l-4 border-accent italic">Our refund policy stipulates that if we are unable to remove a record from a platform explicitly guaranteed in your chosen package, you are entitled to a partial or full refund for that specific site removal.</p>
        </section>

        <section class="bg-white p-8 rounded-3xl border border-card-border shadow-sm">
            <h2 class="text-2xl font-bold text-foreground mb-4 font-display">6. Intellectual Property</h2>
            <p class="leading-relaxed">All content on the Car History Clean website, including text, graphics, logos, and software, is the property of Car History Clean. You may not reproduce, distribute, or create derivative works from our content without express written permission.</p>
        </section>

        <section class="bg-white p-8 rounded-3xl border border-card-border shadow-sm">
            <h2 class="text-2xl font-bold text-foreground mb-4 font-display">7. Limitation of Liability</h2>
            <p class="leading-relaxed">Car History Clean is not responsible for the reappearance of data on new or unsupported platforms after a successful removal. In no event shall Car History Clean be liable for any indirect, incidental, or consequential damages arising out of the use of our services.</p>
        </section>

        <section class="bg-white p-8 rounded-3xl border border-card-border shadow-sm">
            <h2 class="text-2xl font-bold text-foreground mb-4 font-display">8. Contact Information</h2>
            <p class="leading-relaxed">For any questions regarding these terms, please contact us at <a href="mailto:mateenali1122@gmail.com" class="text-accent font-bold hover:underline">mateenali1122@gmail.com</a>.</p>
        </section>
        
        <p class="text-[10px] font-black uppercase tracking-widest text-muted pt-8 border-t border-card-border">Last Updated: {{ date('F d, Y') }}</p>
    </div>
</div>
@endsection
