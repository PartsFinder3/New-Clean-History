@extends('layouts.app')

@section('title', 'Privacy Policy – Car History Clean')
@section('description', 'Learn how Car History Clean protects your personal information and maintains data security according to global privacy standards.')
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
            <h2 class="text-xl font-bold text-white mb-4">Cookies and Tracking Technologies</h2>
            <p class="text-zinc-400 mb-4">
                Car History Clean uses cookies and similar tracking technologies to track the activity on our service and hold certain information. Cookies are files with a small amount of data which may include an anonymous unique identifier.
            </p>
            <p class="text-zinc-400 mb-4">
                We use cookies to:
            </p>
            <ul class="text-zinc-400 list-disc list-inside space-y-2">
                <li>Remember your preferences and security settings</li>
                <li>Analyze our traffic to improve our vehicle audit tools</li>
                <li>Understand user interaction with our blog and car listings</li>
                <li>Deliver relevant advertisements through our marketing partners</li>
            </ul>
            <p class="text-zinc-400 mt-4">
                You can instruct your browser to refuse all cookies or to indicate when a cookie is being sent. However, if you do not accept cookies, you may not be able to use some portions of our Service.
            </p>
        </div>

        <div class="rounded-xl border border-zinc-800 bg-zinc-900/50 p-6 md:p-8 mt-6">
            <h2 class="text-xl font-bold text-white mb-4">International Data Transfers</h2>
            <p class="text-zinc-400 mb-4">
                Your information, including Personal Data, may be transferred to — and maintained on — computers located outside of your state, province, country or other governmental jurisdiction where the data protection laws may differ than those from your jurisdiction.
            </p>
            <p class="text-zinc-400 mb-4">
                If you are located outside Pakistan and choose to provide information to us, please note that we transfer the data, including Personal Data, to Pakistan and process it there. Your consent to this Privacy Policy followed by your submission of such information represents your agreement to that transfer.
            </p>
            <p class="text-zinc-400 mb-4">
                Car History Clean will take all steps reasonably necessary to ensure that your data is treated securely and in accordance with this Privacy Policy and no transfer of your Personal Data will take place to an organization or a country unless there are adequate controls in place including the security of your data and other personal information.
            </p>
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
