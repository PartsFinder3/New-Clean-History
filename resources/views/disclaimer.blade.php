@extends('layouts.app')

@section('title', 'Disclaimer | Car History Clean')
@section('description', 'Disclaimer - Car History Clean provides professional car history verification services. Learn about our service limitations and terms.')
@section('canonical', route('disclaimer'))

@section('schema')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "WebPage",
    "name": "Disclaimer",
    "url": "{{ route('disclaimer') }}",
    "description": "Disclaimer for Car History Clean services"
}
</script>
@endsection

@section('content')
<div class="mx-auto max-w-4xl px-4 py-12 md:px-8 md:py-16">
    <header class="mb-10">
        <h1 class="font-display text-3xl font-bold text-white md:text-4xl">
            Disclaimer
        </h1>
        <p class="mt-2 text-zinc-400">
            Last updated: February 22, 2026
        </p>
    </header>

    <div class="prose prose-invert prose-zinc max-w-none">
        <div class="rounded-xl border border-zinc-800 bg-zinc-900/50 p-6 md:p-8">
            <h2 class="text-xl font-bold text-white mb-4">Information Accuracy</h2>
            <p class="text-zinc-400 mb-4">
                While Car History Clean strives to provide accurate and up-to-date information, we make no representations or warranties of any kind, express or implied, about the completeness, accuracy, reliability, suitability, or availability of the information contained on this website. Any reliance you place on such information is strictly at your own risk.
            </p>
        </div>

        <div class="rounded-xl border border-zinc-800 bg-zinc-900/50 p-6 md:p-8 mt-6">
            <h2 class="text-xl font-bold text-white mb-4">Service Limitations</h2>
            <p class="text-zinc-400 mb-4">
                Our car history verification and title cleaning services are provided as informational tools. We do not guarantee that any particular vehicle will pass inspection or be approved for registration in any specific jurisdiction. Laws regarding vehicle titles and registration vary by state/country.
            </p>
        </div>

        <div class="rounded-xl border border-zinc-800 bg-zinc-900/50 p-6 md:p-8 mt-6">
            <h2 class="text-xl font-bold text-white mb-4">External Links</h2>
            <p class="text-zinc-400 mb-4">
                Our website may contain links to external websites that are not provided or maintained by Car History Clean. We do not guarantee the accuracy, relevance, timeliness, or completeness of any information on these external websites.
            </p>
        </div>

        <div class="rounded-xl border border-zinc-800 bg-zinc-900/50 p-6 md:p-8 mt-6">
            <h2 class="text-xl font-bold text-white mb-4">Professional Advice</h2>
            <p class="text-zinc-400 mb-4">
                The information provided on this website is for general informational purposes only and should not be construed as professional legal, mechanical, or financial advice. Always consult with qualified professionals before making any decisions regarding vehicle purchases or title modifications.
            </p>
        </div>

        <div class="rounded-xl border border-zinc-800 bg-zinc-900/50 p-6 md:p-8 mt-6">
            <h2 class="text-xl font-bold text-white mb-4">Limitation of Liability</h2>
            <p class="text-zinc-400 mb-4">
                In no event shall Car History Clean be liable for any loss or damage including without limitation, indirect or consequential loss or damage, arising out of or in connection with the use of this website or our services.
            </p>
        </div>

        <div class="rounded-xl border border-zinc-800 bg-zinc-900/50 p-6 md:p-8 mt-6">
            <h2 class="text-xl font-bold text-white mb-4">Contact Us</h2>
            <p class="text-zinc-400 mb-4">
                If you have any questions about this Disclaimer, please contact us at:
            </p>
            <ul class="text-zinc-400 list-disc list-inside space-y-2">
                <li>Email: <a href="mailto:mateenali1122@gmail.com" class="text-cyan-400 hover:underline">mateenali1122@gmail.com</a></li>
                <li>WhatsApp: <a href="https://wa.me/923004531248" class="text-cyan-400 hover:underline">+92 300 4531248</a></li>
            </ul>
        </div>
    </div>
</div>
@endsection
