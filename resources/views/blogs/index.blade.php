@extends('layouts.app')

@section('title', 'Blog - Car Auction Insights & News')

@section('head')
<meta name="description" content="Read the latest car auction insights, tips, and news. Expert advice on buying and selling vehicles at auction.">
<meta name="keywords" content="car auction, vehicle auction, car buying tips, auction news, car market insights">
@endsection

@section('content')
<div class="max-w-7xl mx-auto py-8 px-4 md:py-12 md:px-8">
    <!-- Header -->
    <div class="text-center mb-12">
        <h1 class="text-4xl md:text-5xl font-bold text-white font-outfit tracking-tight mb-4">Our Blog</h1>
        <p class="text-zinc-400 text-lg max-w-2xl mx-auto">Stay updated with the latest car auction insights, tips, and industry news.</p>
    </div>

    @if($blogs->isEmpty())
        <div class="text-center py-16">
            <div class="inline-flex items-center justify-center w-20 h-20 bg-zinc-900 rounded-full mb-6">
                <svg class="w-10 h-10 text-zinc-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                </svg>
            </div>
            <h2 class="text-2xl font-bold text-white mb-2">No Blog Posts Yet</h2>
            <p class="text-zinc-500">Check back soon for updates!</p>
        </div>
    @else
        <!-- Blog Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
            @foreach($blogs as $blog)
                <article class="bg-zinc-900 border border-zinc-800 rounded-2xl overflow-hidden hover:border-zinc-700 transition-all duration-300 group">
                    @if($blog->image)
                        <div class="aspect-video overflow-hidden">
                            <img src="{{ Str::startsWith($blog->image, 'http') ? $blog->image : asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" onerror="this.style.display='none'">
                        </div>
                    @else
                        <div class="aspect-video bg-zinc-950 flex items-center justify-center">
                            <svg class="w-16 h-16 text-zinc-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                            </svg>
                        </div>
                    @endif
                    
                    <div class="p-6">
                        <div class="flex items-center gap-2 text-zinc-500 text-xs mb-3">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            {{ $blog->created_at->format('M d, Y') }}
                        </div>
                        
                        <h2 class="text-xl font-bold text-white mb-3 group-hover:text-blue-400 transition-colors line-clamp-2">
                            <a href="{{ route('blogs.show', $blog->slug) }}">{{ $blog->title }}</a>
                        </h2>
                        
                        @if($blog->excerpt)
                            <p class="text-zinc-400 text-sm mb-4 line-clamp-3">{{ $blog->excerpt }}</p>
                        @endif
                        
                        <a href="{{ route('blogs.show', $blog->slug) }}" class="inline-flex items-center text-blue-400 text-sm font-medium hover:text-blue-300 transition-colors">
                            Read More
                            <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                    </div>
                </article>
            @endforeach
        </div>
    @endif
</div>
@endsection
