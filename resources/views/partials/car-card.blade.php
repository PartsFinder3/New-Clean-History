<article class="group overflow-hidden rounded-2xl border border-zinc-800 bg-zinc-900/80 shadow-xl transition hover:border-cyan-500/30 hover:shadow-cyan-500/5">
    <a href="{{ route('cars.show', $car->slug) }}" class="block">
        <div class="relative aspect-[16/10] w-full overflow-hidden bg-zinc-800">
            @if($car->car_image_url)
                <img 
                    src="{{ $car->car_image_url }}" 
                    alt="VIN: {{ $car->vin }}" 
                    class="h-full w-full object-cover"
                    referrerpolicy="no-referrer"
                    onerror="this.src='https://via.placeholder.com/640x400?text=No+Image'"
                >
            @else
                <div class="flex h-full items-center justify-center text-zinc-500">
                    <div class="flex flex-col items-center gap-2">
                        <svg class="h-8 w-8 text-zinc-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <span class="text-xs">No image</span>
                    </div>
                </div>
            @endif
            <div class="absolute inset-0 bg-gradient-to-t from-zinc-900/90 via-transparent to-transparent opacity-80"></div>
            <div class="absolute bottom-0 left-0 right-0 p-4">
                <h2 class="font-display text-lg font-semibold text-white md:text-xl">
                    {{ $car->car_name }}
                </h2>
                <p class="mt-1 text-sm text-cyan-400">VIN: {{ $car->vin }}</p>
            </div>
        </div>
        <div class="p-4">
            <div class="mb-4 grid grid-cols-1 gap-2 text-[11px]">
                <!-- Mileage -->
                <div class="flex items-center justify-between border-b border-zinc-800/50 pb-1.5">
                    <div class="flex items-center gap-1.5 text-zinc-500">
                        <svg class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" /></svg>
                        <span class="uppercase tracking-wider font-bold text-[9px]">Mileage</span>
                    </div>
                    <span class="text-zinc-300 font-medium">{{ $car->mileage ?? 'N/A' }}</span>
                </div>

                <!-- Location -->
                <div class="flex items-center justify-between border-b border-zinc-800/50 pb-1.5">
                    <div class="flex items-center gap-1.5 text-zinc-500">
                        <svg class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                        <span class="uppercase tracking-wider font-bold text-[9px]">Location</span>
                    </div>
                    <span class="text-zinc-300 font-medium truncate ml-4">{{ $car->location ?? 'N/A' }}</span>
                </div>

                <!-- Damage -->
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-1.5 text-zinc-500">
                        <svg class="h-3.5 w-3.5 text-red-500/70" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" /></svg>
                        <span class="uppercase tracking-wider font-bold text-[9px]">Damage</span>
                    </div>
                    <span class="text-red-400 font-bold">{{ $car->damage ?? 'None' }}</span>
                </div>
            </div>
            
            <div class="mt-4 flex items-center justify-between pt-3 border-t border-zinc-800">
                <div class="flex flex-col">
                    <span class="text-[10px] uppercase tracking-tighter text-zinc-500 font-bold">Safe Report</span>
                    <div class="flex items-center gap-2">
                        <span class="text-xs font-bold text-cyan-400">Clean History</span>
                        <div class="h-1 w-1 rounded-full bg-zinc-700"></div>
                        <a href="https://wa.me/923004531248?text={{ urlencode('Hi, I am interested in checking the history for VIN: ' . $car->vin) }}" 
                           target="_blank"
                           class="flex items-center gap-1 text-[10px] font-bold text-emerald-400 hover:text-emerald-300 transition-colors"
                        >
                            <svg class="h-3 w-3" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L0 24l6.335-1.662c1.72.94 3.659 1.437 5.634 1.437h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                            </svg>
                            WhatsApp
                        </a>
                    </div>
                </div>
                
                <a href="https://wa.me/923004531248?text={{ urlencode('Hi, I am interested in checking the history for VIN: ' . $car->vin) }}" 
                   target="_blank"
                   class="flex items-center gap-1.5 px-3 py-1.5 bg-emerald-500 hover:bg-emerald-400 text-zinc-950 text-[10px] font-black rounded-lg transition-all active:scale-95 shadow-lg shadow-emerald-500/20"
                >
                    WHATSAPP
                </a>
            </div>
        </div>
    </a>
</article>
