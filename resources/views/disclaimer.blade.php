@extends('layouts.app')

@section('title', 'Disclaimer – Car History Clean')
@section('description', 'Read the disclaimer for Car History Clean. Learn about our service limitations, information accuracy, and liability policies.')
@section('canonical', route('disclaimer'))

@section('schema')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "WebPage",
    "name": "Disclaimer",
    "url": "{{ route('disclaimer') }}",
    "description": "Disclaimer for Car History Clean services"
}
</script>
@endsection

@section('content')
<div class="mx-auto max-w-4xl px-4 py-12 md:px-8 md:py-20 text-center md:text-left">
    <header class="mb-16">
        <h1 class="font-display text-4xl font-bold text-foreground md:text-5xl lg:text-5xl">
            Legal <span class="gradient-text">Disclaimer</span>
        </h1>
        <p class="mt-4 text-muted font-medium">
            Last updated: February 22, 2026
        </p>
    </header>

    <div class="prose prose-slate prose-zinc max-w-none text-left">
        <div class="rounded-3xl border border-card-border bg-white p-8 md:p-10 shadow-sm">
            <h2 class="text-2xl font-bold text-foreground mb-6 font-display">Information Accuracy</h2>
            <p class="text-muted mb-4 leading-relaxed">
                While Car History Clean strives to provide accurate and up-to-date information, we make no representations or warranties of any kind, express or implied, about the completeness, accuracy, reliability, suitability, or availability of the information contained on this website. Any reliance you place on such information is strictly at your own risk.
            </p>
        </div>

        <div class="rounded-3xl border border-card-border bg-white p-8 md:p-10 mt-8 shadow-sm">
            <h2 class="text-2xl font-bold text-foreground mb-6 font-display">Service Limitations</h2>
            <p class="text-muted mb-4 leading-relaxed">
                Our car history verification and title cleaning services are provided as informational tools. We do not guarantee that any particular vehicle will pass inspection or be approved for registration in any specific jurisdiction. Laws regarding vehicle titles and registration vary by state/country.
            </p>
        </div>

        <div class="rounded-3xl border border-card-border bg-white p-8 md:p-10 mt-8 shadow-sm">
            <h2 class="text-2xl font-bold text-foreground mb-6 font-display">External Links</h2>
            <p class="text-muted mb-4 leading-relaxed">
                Our website may contain links to external websites that are not provided or maintained by Car History Clean. We do not guarantee the accuracy, relevance, timeliness, or completeness of any information on these external websites.
            </p>
        </div>

        <div class="rounded-3xl border border-card-border bg-white p-8 md:p-10 mt-8 shadow-sm">
            <h2 class="text-2xl font-bold text-foreground mb-6 font-display">Professional Advice</h2>
            <p class="text-muted mb-4 leading-relaxed">
                The information provided on this website is for general informational purposes only and should not be construed as professional legal, mechanical, or financial advice. Always consult with qualified professionals before making any decisions regarding vehicle purchases or title modifications.
            </p>
        </div>

        <div class="rounded-3xl border border-card-border bg-white p-8 md:p-10 mt-8 shadow-sm">
            <h2 class="text-2xl font-bold text-foreground mb-6 font-display">Limitation of Liability</h2>
            <p class="text-muted mb-4 leading-relaxed">
                In no event shall Car History Clean be liable for any loss or damage including without limitation, indirect or consequential loss or damage, arising out of or in connection with the use of this website or our services.
            </p>
        </div>

        <div class="rounded-3xl border border-card-border bg-white p-8 md:p-10 mt-8 shadow-sm">
            <h2 class="text-2xl font-bold text-foreground mb-6 font-display">Contact Us</h2>
            <p class="text-muted mb-4 leading-relaxed">
                If you have any questions about this Disclaimer, please contact us at:
            </p>
            <ul class="text-muted list-disc list-inside space-y-3 font-medium">
                <li>Email: <a href="mailto:mateenali1122@gmail.com" class="text-accent font-bold hover:underline">mateenali1122@gmail.com</a></li>
                <li>WhatsApp: <a href="https://wa.me/923004531248" class="text-accent font-bold hover:underline">+92 300 4531248</a></li>
            </ul>
        </div>
    </div>
</div>
@endsection
