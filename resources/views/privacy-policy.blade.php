@extends('layouts.app')

@section('title', 'Privacy Policy | Car History Clean')
@section('description', 'Privacy Policy - Car History Clean is committed to protecting your privacy. Learn how we collect, use, and safeguard your information.')
@section('canonical', route('privacy-policy'))

@section('schema')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "WebPage",
    "name": "Privacy Policy",
    "url": "{{ route('privacy-policy') }}",
    "description": "Privacy Policy for Car History Clean"
}
</script>
@endsection

@section('content')
<div class="mx-auto max-w-4xl px-4 py-12 md:px-8 md:py-16">
    <header class="mb-10">
        <h1 class="font-display text-3xl font-bold text-white md:text-4xl">
            Privacy Policy
        </h1>
        <p class="mt-2 text-zinc-400">
            Last updated: February 22, 2026
        </p>
    </header>

    <div class="prose prose-invert prose-zinc max-w-none">
        <div class="rounded-xl border border-zinc-800 bg-zinc-900/50 p-6 md:p-8">
            <h2 class="text-xl font-bold text-white mb-4">Information We Collect</h2>
            <p class="text-zinc-400 mb-4">
                Car History Clean collects information that you provide directly to us, including:
            </p>
            <ul class="text-zinc-400 list-disc list-inside space-y-2">
                <li>Contact information (name, email address, phone number)</li>
                <li>Vehicle Information (VIN numbers, vehicle details)</li>
                <li>Communication preferences</li>
                <li>Any other information you choose to provide</li>
            </ul>
        </div>

        <div class="rounded-xl border border-zinc-800 bg-zinc-900/50 p-6 md:p-8 mt-6">
            <h2 class="text-xl font-bold text-white mb-4">How We Use Your Information</h2>
            <p class="text-zinc-400 mb-4">
                We use the information we collect to:
            </p>
            <ul class="text-zinc-400 list-disc list-inside space-y-2">
                <li>Provide and improve our car history verification services</li>
                <li>Respond to your inquiries and provide customer support</li>
                <li>Communicate with you about our services</li>
                <li>Comply with legal obligations</li>
            </ul>
        </div>

        <div class="rounded-xl border border-zinc-800 bg-zinc-900/50 p-6 md:p-8 mt-6">
            <h2 class="text-xl font-bold text-white mb-4">Information Sharing</h2>
            <p class="text-zinc-400 mb-4">
                We do not sell, trade, or otherwise transfer your personal information to outside parties. We may share information with:
            </p>
            <ul class="text-zinc-400 list-disc list-inside space-y-2">
                <li>Service providers who assist us in operating our website</li>
                <li>Legal authorities when required by law</li>
            </ul>
        </div>

        <div class="rounded-xl border border-zinc-800 bg-zinc-900/50 p-6 md:p-8 mt-6">
            <h2 class="text-xl font-bold text-white mb-4">Data Security</h2>
            <p class="text-zinc-400 mb-4">
                We implement appropriate security measures to protect your personal information. However, no method of transmission over the Internet or electronic storage is 100% secure, and we cannot guarantee absolute security.
            </p>
        </div>

        <div class="rounded-xl border border-zinc-800 bg-zinc-900/50 p-6 md:p-8 mt-6">
            <h2 class="text-xl font-bold text-white mb-4">Third-Party Services</h2>
            <p class="text-zinc-400 mb-4">
                Our website may contain links to third-party websites. We have no control over the content or practices of these sites and are not responsible for their privacy policies.
            </p>
        </div>

        <div class="rounded-xl border border-zinc-800 bg-zinc-900/50 p-6 md:p-8 mt-6">
            <h2 class="text-xl font-bold text-white mb-4">Your Rights</h2>
            <p class="text-zinc-400 mb-4">
                You have the right to:
            </p>
            <ul class="text-zinc-400 list-disc list-inside space-y-2">
                <li>Access the personal information we hold about you</li>
                <li>Request correction of inaccurate data</li>
                <li>Request deletion of your personal information</li>
                <li>Opt-out of marketing communications</li>
            </ul>
        </div>

        <div class="rounded-xl border border-zinc-800 bg-zinc-900/50 p-6 md:p-8 mt-6">
            <h2 class="text-xl font-bold text-white mb-4">Contact Us</h2>
            <p class="text-zinc-400 mb-4">
                If you have any questions about this Privacy Policy, please contact us at:
            </p>
            <ul class="text-zinc-400 list-disc list-inside space-y-2">
                <li>Email: <a href="mailto:mateenali1122@gmail.com" class="text-cyan-400 hover:underline">mateenali1122@gmail.com</a></li>
                <li>WhatsApp: <a href="https://wa.me/923004531248" class="text-cyan-400 hover:underline">+92 300 4531248</a></li>
            </ul>
        </div>
    </div>
</div>
@endsection
