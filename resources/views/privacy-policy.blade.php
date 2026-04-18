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
<div class="mx-auto max-w-4xl px-4 py-12 md:px-8 md:py-20 text-center md:text-left">
    <header class="mb-16">
        <h1 class="font-display text-4xl font-bold text-foreground md:text-5xl lg:text-5xl">
            Privacy <span class="gradient-text">Policy</span>
        </h1>
        <p class="mt-4 text-muted font-medium">
            Last updated: February 22, 2026
        </p>
    </header>

    <div class="prose prose-slate max-w-none text-left">
        <div class="rounded-3xl border border-card-border bg-white p-8 md:p-10 shadow-sm">
            <h2 class="text-2xl font-bold text-foreground mb-6 font-display">Information We Collect</h2>
            <p class="text-muted mb-4 leading-relaxed">
                Car History Clean collects information that you provide directly to us, including:
            </p>
            <ul class="text-muted list-disc list-inside space-y-3 font-medium">
                <li>Contact information (name, email address, phone number)</li>
                <li>Vehicle Information (VIN numbers, vehicle details)</li>
                <li>Communication preferences</li>
                <li>Any other information you choose to provide</li>
            </ul>
        </div>

        <div class="rounded-3xl border border-card-border bg-white p-8 md:p-10 mt-8 shadow-sm">
            <h2 class="text-2xl font-bold text-foreground mb-6 font-display">How We Use Your Information</h2>
            <p class="text-muted mb-4 leading-relaxed">
                We use the information we collect to:
            </p>
            <ul class="text-muted list-disc list-inside space-y-3 font-medium">
                <li>Provide and improve our car history verification services</li>
                <li>Respond to your inquiries and provide customer support</li>
                <li>Communicate with you about our services</li>
                <li>Comply with legal obligations</li>
            </ul>
        </div>

        <div class="rounded-3xl border border-card-border bg-white p-8 md:p-10 mt-8 shadow-sm">
            <h2 class="text-2xl font-bold text-foreground mb-6 font-display">Cookies and Tracking</h2>
            <p class="text-muted mb-4 leading-relaxed">
                Car History Clean uses cookies and similar tracking technologies to track the activity on our service and hold certain information. Cookies are files with a small amount of data which may include an anonymous unique identifier.
            </p>
            <p class="text-muted mb-4 leading-relaxed">
                We use cookies to:
            </p>
            <ul class="text-muted list-disc list-inside space-y-3 font-medium">
                <li>Remember your preferences and security settings</li>
                <li>Analyze our traffic to improve our vehicle audit tools</li>
                <li>Understand user interaction with our blog and car listings</li>
                <li>Deliver relevant advertisements through our marketing partners</li>
            </ul>
            <p class="text-muted mt-6 leading-relaxed italic border-l-4 border-accent pl-6 py-2 bg-blue-50/30 rounded-r-xl">
                You can instruct your browser to refuse all cookies or to indicate when a cookie is being sent. However, if you do not accept cookies, you may not be able to use some portions of our Service.
            </p>
        </div>

        <div class="rounded-3xl border border-card-border bg-white p-8 md:p-10 mt-8 shadow-sm">
            <h2 class="text-2xl font-bold text-foreground mb-6 font-display">International Transfers</h2>
            <p class="text-muted mb-4 leading-relaxed">
                Your information, including Personal Data, may be transferred to — and maintained on — computers located outside of your state, province, country or other governmental jurisdiction where the data protection laws may differ than those from your jurisdiction.
            </p>
            <p class="text-muted mb-4 leading-relaxed">
                If you are located outside Pakistan and choose to provide information to us, please note that we transfer the data, including Personal Data, to Pakistan and process it there. Your consent to this Privacy Policy followed by your submission of such information represents your agreement to that transfer.
            </p>
        </div>

        <div class="rounded-3xl border border-card-border bg-white p-8 md:p-10 mt-8 shadow-sm">
            <h2 class="text-2xl font-bold text-foreground mb-6 font-display">Data Security</h2>
            <p class="text-muted mb-4 leading-relaxed">
                We implement appropriate security measures to protect your personal information. However, no method of transmission over the Internet or electronic storage is 100% secure, and we cannot guarantee absolute security.
            </p>
        </div>

        <div class="rounded-3xl border border-card-border bg-white p-8 md:p-10 mt-8 shadow-sm">
            <h2 class="text-2xl font-bold text-foreground mb-6 font-display">Third-Party Services</h2>
            <p class="text-muted mb-4 leading-relaxed">
                Our website may contain links to third-party websites. We have no control over the content or practices of these sites and are not responsible for their privacy policies.
            </p>
        </div>

        <div class="rounded-3xl border border-card-border bg-white p-8 md:p-10 mt-8 shadow-sm">
            <h2 class="text-2xl font-bold text-foreground mb-6 font-display">Your Rights</h2>
            <p class="text-muted mb-4 leading-relaxed">
                You have the right to:
            </p>
            <ul class="text-muted list-disc list-inside space-y-3 font-medium">
                <li>Access the personal information we hold about you</li>
                <li>Request correction of inaccurate data</li>
                <li>Request deletion of your personal information</li>
                <li>Opt-out of marketing communications</li>
            </ul>
        </div>

        <div class="rounded-3xl border border-card-border bg-white p-8 md:p-10 mt-8 shadow-sm">
            <h2 class="text-2xl font-bold text-foreground mb-6 font-display">Contact Us</h2>
            <p class="text-muted mb-4 leading-relaxed">
                If you have any questions about this Privacy Policy, please contact us at:
            </p>
            <ul class="text-muted list-disc list-inside space-y-3 font-medium">
                <li>Email: <a href="mailto:info@carhistoryremove.online" class="text-accent hover:underline">info@carhistoryremove.online</a></li>
                <li>WhatsApp: <a href="https://wa.me/923004531248" class="text-accent hover:underline">+92 300 4531248</a></li>
            </ul>
        </div>
    </div>
</div>
@endsection
