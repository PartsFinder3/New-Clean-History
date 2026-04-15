<article class="group overflow-hidden rounded-2xl border border-card-border bg-white shadow-sm transition hover:border-accent hover:shadow-md">
    <a href="{{ route('cars.show', $car->slug) }}" class="block">
        <div class="relative aspect-[16/10] w-full overflow-hidden bg-background-secondary">
            @if($car->car_image_url)
                <img
                    src="{{ $car->car_image_url }}"
                    alt="VIN: {{ $car->vin }}"
                    class="h-full w-full object-cover"
                    width="640"
                    height="400"
                    loading="lazy"
                    referrerpolicy="no-referrer"
                    onerror="this.src='https://via.placeholder.com/640x400?text=No+Image'"
                >
            @else
                <div class="flex h-full items-center justify-center text-muted">
                    <div class="flex flex-col items-center gap-2">
                        <svg class="h-8 w-8 text-muted-light" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <span class="text-xs">No image</span>
                    </div>
                </div>
            @endif
            <div class="absolute top-3 left-3">
                <span class="badge-success">Clean History</span>
            </div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent"></div>
            <div class="absolute bottom-0 left-0 right-0 p-4">
                <h2 class="font-display text-lg font-semibold text-white md:text-xl drop-shadow-lg">
                    {{ $car->car_name }}
                </h2>
                <p class="mt-1 text-sm text-white/90 font-mono drop-shadow">VIN: {{ $car->vin }}</p>
            </div>
        </div>
        <div class="p-4">
            <div class="mb-4 grid grid-cols-1 gap-2 text-[11px]">
                <!-- Mileage -->
                <div class="flex items-center justify-between border-b border-card-border pb-1.5">
                    <div class="flex items-center gap-1.5 text-muted">
                        <svg class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" /></svg>
                        <span class="uppercase tracking-wider font-bold text-[9px]">Mileage</span>
                    </div>
                    <span class="text-foreground font-medium">{{ $car->mileage ?? 'N/A' }}</span>
                </div>

                <!-- Location -->
                <div class="flex items-center justify-between border-b border-card-border pb-1.5">
                    <div class="flex items-center gap-1.5 text-muted">
                        <svg class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                        <span class="uppercase tracking-wider font-bold text-[9px]">Location</span>
                    </div>
                    <span class="text-foreground font-medium truncate ml-4">{{ $car->location ?? 'Dubai, UAE' }}</span>
                </div>

                <!-- Price -->
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-1.5 text-muted">
                        <svg class="h-3.5 w-3.5 text-success" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                        <span class="uppercase tracking-wider font-bold text-[9px]">Price</span>
                    </div>
                    <span class="text-success font-bold">Contact for Price</span>
                </div>
            </div>
            
            <div class="mt-4 flex items-center justify-between pt-3 border-t border-card-border">
                <div class="flex flex-col">
                    <span class="text-[10px] uppercase tracking-tighter text-muted font-bold">Status</span>
                    <div class="flex items-center gap-2">
                        <span class="badge-success text-xs">History Cleaned</span>
                    </div>
                </div>

                <a href="https://wa.me/923004531248?text={{ urlencode('Hi, I am interested in car with VIN: ' . $car->vin) }}"
                   target="_blank"
                   class="flex items-center gap-1.5 px-3 py-1.5 bg-green-500 hover:bg-green-600 text-white text-xs font-semibold rounded-lg transition-all active:scale-95"
                >
                    <svg class="h-3.5 w-3.5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L0 24l6.335-1.662c1.72.94 3.659 1.437 5.634 1.437h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                    </svg>
                    Inquire
                </a>
            </div>
        </div>
    </a>
</article>
