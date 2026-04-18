@extends('layouts.app')

@section('title', $car->car_name . ' (' . substr($car->vin, -6) . ') – Report')
@section('description', 'View history report for ' . $car->car_name . ' (VIN: ' . $car->vin . '). Check accidents and auction records online.')
@section('keywords', $car->car_name . ', ' . $car->vin . ', car history removal, clean VIN history')
@section('canonical', route('cars.show', $car->slug))
@section('og_type', 'product')
@section('og_image', $car->car_image_url ?? '')

@section('schema')
{{-- Vehicle Schema --}}
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "Car",
    "name": "{{ $car->car_name }}",
    "url": "{{ route('cars.show', $car->slug) }}",
    "vehicleIdentificationNumber": "{{ $car->vin }}",
    {!! $car->car_image_url ? '"image": "' . $car->car_image_url . '",' : '' !!}
    {!! $car->mileage ? '"mileageFromOdometer": { "@@type": "QuantitativeValue", "value": "' . $car->mileage . '", "unitCode": "SMI" },' : '' !!}
    {!! $car->description ? '"description": "' . addslashes($car->description) . '",' : '' !!}
    "offers": {
        "@@type": "Offer",
        "availability": "https://schema.org/InStock",
        "seller": {
            "@@type": "Organization",
            "name": "Car History Clean",
            "telephone": "+923004531248",
            "email": "mateenali1122@gmail.com"
        }
    },
    "brand": {
        "@@type": "Brand",
        "name": "{{ explode(' ', $car->car_name)[0] ?? 'Unknown' }}"
    }
}
</script>

{{-- BreadcrumbList --}}
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
            "name": "Cars",
            "item": "{{ route('cars.index') }}"
        },
        {
            "@@type": "ListItem",
            "position": 3,
            "name": "{{ $car->car_name }}",
            "item": "{{ route('cars.show', $car->slug) }}"
        }
    ]
}
</script>

{{-- FAQPage Schema --}}
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "FAQPage",
    "mainEntity": [
        {
            "@@type": "Question",
            "name": "What is the VIN of this vehicle?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "The VIN (Vehicle Identification Number) for this {{ $car->car_name }} is {{ $car->vin }}."
            }
        },
        {
            "@@type": "Question",
            "name": "Can I clean the history of this car?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Yes, Car History Clean offers professional VIN history removal services. Contact us via WhatsApp to get started with your clean history report."
            }
        }
    ]
}
</script>
@endsection

@section('content')
<article class="mx-auto max-w-6xl px-4 py-12 md:px-8 md:py-16">
    <!-- Breadcrumb Navigation -->
    <nav aria-label="Breadcrumb" class="mb-6 text-sm text-muted">
        <ol class="flex items-center gap-1.5">
            <li><a href="{{ route('home') }}" class="hover:text-accent font-medium transition-colors">Home</a></li>
            <li>/</li>
            <li><a href="{{ route('cars.index') }}" class="hover:text-accent font-medium transition-colors">Cars</a></li>
            <li>/</li>
            <li class="text-foreground font-bold truncate max-w-[200px]">{{ substr($car->vin, 0, 8) }}...</li>
        </ol>
    </nav>

    <div class="overflow-hidden rounded-3xl border border-card-border bg-white shadow-xl">
        <!-- Hero Image -->
        <div class="relative aspect-[21/9] w-full bg-background-secondary md:aspect-[3/1]">
            @if($car->car_image_url)
                <img 
                    src="{{ $car->car_image_url }}" 
                    alt="{{ $car->car_name }} - VIN: {{ $car->vin }}" 
                    class="absolute inset-0 h-full w-full object-cover"
                    width="1200"
                    height="400"
                    referrerpolicy="no-referrer"
                    loading="eager"
                >
            @endif
            @if(!$car->car_image_url)
                <div class="flex h-full items-center justify-center text-muted">
                    <svg class="w-12 h-12 opacity-20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                </div>
            @endif
            <div class="absolute inset-0 bg-gradient-to-t from-white via-transparent to-transparent"></div>
        </div>

        <!-- Content -->
        <div class="p-6 md:p-10">
            <h1 class="font-display text-2xl font-bold text-foreground md:text-4xl">
                {{ $car->car_name }}
            </h1>

            <!-- VIN -->
            <div class="mt-5 inline-flex items-center gap-3 rounded-xl border border-blue-100 bg-blue-50/50 px-5 py-3">
                <span class="text-xs font-bold uppercase tracking-wider text-accent opacity-70">VIN Code</span>
                <span class="font-mono text-lg font-bold tracking-widest text-accent md:text-xl select-all">
                    {{ $car->vin }}
                </span>
            </div>

            <!-- Vehicle Details Grid -->
            <dl class="mt-10 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
                <div class="rounded-2xl border border-card-border bg-background-secondary p-5">
                    <dt class="text-[10px] font-black uppercase tracking-widest text-muted opacity-60">Listing Name</dt>
                    <dd class="mt-1 text-base font-bold text-foreground">{{ $car->car_name }}</dd>
                </div>
                <div class="rounded-2xl border border-card-border bg-background-secondary p-5">
                    <dt class="text-[10px] font-black uppercase tracking-widest text-muted opacity-60">Verified VIN</dt>
                    <dd class="mt-1 font-mono text-base font-bold text-accent select-all">{{ $car->vin }}</dd>
                </div>
                <div class="rounded-2xl border border-card-border bg-background-secondary p-5">
                    <dt class="text-[10px] font-black uppercase tracking-widest text-muted opacity-60">Report Status</dt>
                    <dd class="mt-1 text-base font-bold text-success flex items-center gap-1.5">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                        Security Verified
                    </dd>
                </div>
                <div class="rounded-2xl border border-card-border bg-background-secondary p-5">
                    <dt class="text-[10px] font-black uppercase tracking-widest text-muted opacity-60">Mileage</dt>
                    <dd class="mt-1 text-base font-bold text-foreground">{{ $car->mileage ?? 'N/A' }}</dd>
                </div>
                <div class="rounded-2xl border border-card-border bg-background-secondary p-5">
                    <dt class="text-[10px] font-black uppercase tracking-widest text-muted opacity-60">Region/City</dt>
                    <dd class="mt-1 text-base font-bold text-foreground">{{ $car->location ?? 'Dubai, UAE' }}</dd>
                </div>
                <div class="rounded-2xl border border-card-border bg-background-secondary p-5">
                    <dt class="text-[10px] font-black uppercase tracking-widest text-muted opacity-60">Damage Record</dt>
                    <dd class="mt-1 text-base font-bold {{ $car->damage ? 'text-warning' : 'text-success' }}">{{ $car->damage ?? 'None Reported' }}</dd>
                </div>
            </dl>

            <!-- Description -->
            @if($car->description)
                <section class="mt-10">
                    <h2 class="text-xs font-black uppercase tracking-widest text-muted opacity-60 mb-3">
                        Vehicle Narrative
                    </h2>
                    <div class="prose prose-slate max-w-none">
                        <p class="whitespace-pre-wrap leading-relaxed text-muted">
                            {{ $car->description }}
                        </p>
                    </div>
                </section>
            @endif

            <!-- Clean History Action -->
            <div class="mt-12 rounded-3xl border border-blue-100 bg-gradient-to-br from-blue-50 to-white p-6 md:p-10 shadow-sm">
                <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-8">
                    <div class="max-w-xl">
                        <div class="flex items-center gap-2 mb-4">
                            <span class="px-2.5 py-1 rounded-lg bg-accent text-white text-[10px] font-black uppercase tracking-widest shadow-md shadow-accent/20">Action Required</span>
                            <div class="h-1.5 w-1.5 rounded-full bg-accent/20"></div>
                            <span class="text-xs font-bold text-accent">Permanent VIN Removal Available</span>
                        </div>
                        <h3 class="text-2xl font-bold text-foreground md:text-3xl font-display">Clean this vehicle's history?</h3>
                        <p class="mt-3 text-muted leading-relaxed">We can permanently remove old auction photos, salvage records, and price history for this specific VIN. Protect your privacy and maximize resale value.</p>
                    </div>
                    
                    <div class="flex flex-col sm:flex-row items-center gap-4">
                        <a href="https://wa.me/923004531248?text={{ urlencode('Hi, I want to get a Clean History report for VIN: ' . $car->vin) }}" 
                           target="_blank"
                           class="btn-primary w-full sm:w-auto flex items-center justify-center gap-3 px-10 py-5 text-lg shadow-xl shadow-accent/20 hover:shadow-2xl transition-all"
                        >
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L0 24l6.335-1.662c1.72.94 3.659 1.437 5.634 1.437h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                            </svg>
                            START CLEAN
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</article>

<section class="mx-auto max-w-6xl px-4 pb-20 md:px-8">
    <!-- SEO Content Expansion -->
    <div class="border-t border-card-border pt-16">
        <h2 class="text-3xl font-bold text-foreground mb-8 font-display">Vehicle History & Digital Privacy</h2>
        <div class="grid md:grid-cols-2 gap-10 text-muted leading-relaxed">
            <div class="space-y-6">
                <p>
                    A vehicle history report is a comprehensive document that records everything known about a vehicle based on its unique 17-digit VIN. For this <strong>{{ $car->car_name }}</strong>, the history might include records from state DMVs, insurance companies, and most importantly, auto auctions like Copart and IAAI.
                </p>
                <p>
                    The digital footprints left by these reports can be problematic. Damaged car photos from insurance auctions can remain online forever, appearing in Google search results and unfairly penalizing the resale value of a car that has been repair to showroom standards.
                </p>
            </div>
            <div class="space-y-6">
                <p>
                    By auditing and requesting the removal of legacy auction data, owners can ensure that their vehicle is judged based on its current condition. The VIN number <strong>{{ $car->vin }}</strong> is the key to all this data. Maintaining a clean digital record protects the investment and privacy of the owner.
                </p>
                <p>
                    Secure your vehicle's future today with a clean, verified history report. Our technical experts use legal and technical protocols to clear your vehicle's history across 200+ platforms.
                </p>
            </div>
        </div>
    </div>
</section>
@endsection
