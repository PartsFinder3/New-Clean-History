@if ($paginator->hasPages())
    <nav aria-label="Pagination" class="flex items-center justify-center gap-1.5">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <span class="flex items-center gap-1.5 rounded-xl border border-zinc-800/50 bg-zinc-900/30 px-4 py-2.5 text-sm font-medium text-zinc-600 cursor-not-allowed">
                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
                Prev
            </span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" class="flex items-center gap-1.5 rounded-xl border border-zinc-800 bg-zinc-900/80 px-4 py-2.5 text-sm font-medium text-zinc-300 transition-all hover:border-cyan-500/30 hover:bg-zinc-800 hover:text-white">
                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
                Prev
            </a>
        @endif

        {{-- Pagination Elements --}}
        <div class="flex items-center gap-1">
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <span class="px-2 py-2 text-sm text-zinc-500">{{ $element }}</span>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <span class="flex h-10 w-10 items-center justify-center rounded-xl text-sm font-semibold border border-cyan-500/40 bg-cyan-500/10 text-cyan-400 shadow-lg shadow-cyan-500/10">
                                {{ $page }}
                            </span>
                        @else
                            <a href="{{ $url }}" class="flex h-10 w-10 items-center justify-center rounded-xl text-sm font-semibold border border-zinc-800 bg-zinc-900/50 text-zinc-400 hover:border-zinc-700 hover:bg-zinc-800 hover:text-white transition-all">
                                {{ $page }}
                            </a>
                        @endif
                    @endforeach
                @endif
            @endforeach
        </div>

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="flex items-center gap-1.5 rounded-xl border border-zinc-800 bg-zinc-900/80 px-4 py-2.5 text-sm font-medium text-zinc-300 transition-all hover:border-cyan-500/30 hover:bg-zinc-800 hover:text-white">
                Next
                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </a>
        @else
            <span class="flex items-center gap-1.5 rounded-xl border border-zinc-800/50 bg-zinc-900/30 px-4 py-2.5 text-sm font-medium text-zinc-600 cursor-not-allowed">
                Next
                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </span>
        @endif
    </nav>
@endif
