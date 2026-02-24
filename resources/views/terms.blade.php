@extends('layouts.app')

@section('title', 'Terms of Service | Car History Clean')
@section('description', 'Read the Terms of Service for Car History Clean. Understand our data removal policies, service guarantees, and user obligations.')
@section('canonical', route('terms'))

@section('content')
<div class="mx-auto max-w-4xl px-4 py-16 md:px-8 md:py-24">
    <h1 class="font-display text-3xl font-bold text-white md:text-5xl mb-8">
        Terms of <span class="gradient-text">Service</span>
    </h1>
    
    <div class="prose prose-invert prose-cyan max-w-none space-y-8 text-zinc-400">
        <section>
            <h2 class="text-xl font-bold text-white">1. Acceptance of Terms</h2>
            <p>By accessing and using the services provided by Car History Clean ("we," "us," or "our"), you agree to be bound by these Terms of Service. If you do not agree to these terms, please refrain from using our services.</p>
        </section>

        <section>
            <h2 class="text-xl font-bold text-white">2. Description of Service</h2>
            <p>Car History Clean provide digital privacy and reputation management services specifically focused on vehicle history data removal. We facilitate the deletion of public records, auction photos, and technical data from third-party databases through legal and technical channels.</p>
        </section>

        <section>
            <h2 class="text-xl font-bold text-white">3. User Obligations</h2>
            <p>Users must provide accurate vehicle information (VIN) and prove ownership or legal authorization to requested data removal. Any attempt to use our services for fraudulent purposes or on vehicles not legally associated with the user is strictly prohibited.</p>
        </section>

        <section>
            <h2 class="text-xl font-bold text-white">4. Service Guarantees</h2>
            <p>While we strive for 100% removal, we are dependent on third-party platform responsiveness. We guarantee that the records within our direct control and those on major supported platforms will be removed or we will provide a full refund as per our refund policy.</p>
        </section>

        <section>
            <h2 class="text-xl font-bold text-white">5. Limitation of Liability</h2>
            <p>Car History Clean is not responsible for the reappearance of data on new or unsupported platforms after a successful removal. We act as an intermediary and do not own the third-party databases from which data is purged.</p>
        </section>

        <section>
            <h2 class="text-xl font-bold text-white">6. Contact Information</h2>
            <p>For any questions regarding these terms, please contact us at <a href="mailto:mateenali1122@gmail.com" class="text-cyan-400">mateenali1122@gmail.com</a>.</p>
        </section>
        
        <p class="text-xs pt-8 border-t border-zinc-800">Last Updated: {{ date('F d, Y') }}</p>
    </div>
</div>
@endsection
