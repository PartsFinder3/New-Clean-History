@extends('layouts.app')

@section('title', $blog->meta_title ?? $blog->title)

@section('head')
@if($blog->meta_title)
<meta property="og:title" content="{{ $blog->meta_title }}">
@else
<meta property="og:title" content="{{ $blog->title }}">
@endif

@if($blog->meta_description)
<meta name="description" content="{{ $blog->meta_description }}">
<meta property="og:description" content="{{ $blog->meta_description }}">
@endif

@if($blog->meta_keywords)
<meta name="keywords" content="{{ $blog->meta_keywords }}">
@endif

@if($blog->meta_author)
<meta name="author" content="{{ $blog->meta_author }}">
@endif

@if($blog->image)
<meta property="og:image" content="{{ Str::startsWith($blog->image, 'http') ? $blog->image : asset('storage/' . $blog->image) }}">
<meta property="og:type" content="article">
@endif

<link rel="canonical" href="{{ route('blogs.show', $blog->slug) }}">
@endsection

@section('content')
<div class="max-w-4xl mx-auto py-8 px-4 md:py-12 md:px-8">
    <!-- Back Link -->
    <a href="{{ route('blogs.index') }}" class="inline-flex items-center text-zinc-400 hover:text-white transition-colors mb-8">
        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
        </svg>
        Back to Blog
    </a>

    <!-- Blog Header -->
    <header class="mb-10">
        <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white font-outfit tracking-tight mb-6 leading-tight">{{ $blog->title }}</h1>
        
        <div class="flex flex-wrap items-center gap-4 text-zinc-500 text-sm">
            <div class="flex items-center gap-2">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                </svg>
                {{ $blog->created_at->format('F d, Y') }}
            </div>
            
            @if($blog->meta_author)
            <div class="flex items-center gap-2">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                </svg>
                {{ $blog->meta_author }}
            </div>
            @endif
        </div>
    </header>

    <!-- Featured Image -->
    @if($blog->image)
    <div class="mb-10 rounded-2xl overflow-hidden">
        <img src="{{ Str::startsWith($blog->image, 'http') ? $blog->image : asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}" class="w-full h-auto object-cover" onerror="this.style.display='none'">
    </div>
    @endif

    <!-- Blog Content -->
    <article class="prose prose-invert prose-lg max-w-none">
        {!! nl2br(e($blog->content)) !!}
    </article>

    <!-- Share Section -->
    <div class="mt-12 pt-8 border-t border-zinc-800">
        <p class="text-zinc-400 text-sm mb-4">Share this article:</p>
        <div class="flex gap-3">
            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(route('blogs.show', $blog->slug)) }}" target="_blank" rel="noopener" class="p-3 bg-zinc-900 hover:bg-zinc-800 rounded-xl text-zinc-400 hover:text-white transition-colors">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
            </a>
            <a href="https://twitter.com/intent/tweet?url={{ urlencode(route('blogs.show', $blog->slug)) }}&text={{ urlencode($blog->title) }}" target="_blank" rel="noopener" class="p-3 bg-zinc-900 hover:bg-zinc-800 rounded-xl text-zinc-400 hover:text-white transition-colors">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
            </a>
            <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(route('blogs.show', $blog->slug)) }}&title={{ urlencode($blog->title) }}" target="_blank" rel="noopener" class="p-3 bg-zinc-900 hover:bg-zinc-800 rounded-xl text-zinc-400 hover:text-white transition-colors">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
            </a>
        </div>
    </div>

    <!-- Related Blogs -->
    @if($relatedBlogs->isNotEmpty())
    <section class="mt-16">
        <h2 class="text-2xl font-bold text-white mb-8">Related Articles</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach($relatedBlogs as $related)
                <article class="bg-zinc-900 border border-zinc-800 rounded-xl overflow-hidden hover:border-zinc-700 transition-all group">
                    @if($related->image)
                        <div class="aspect-video overflow-hidden">
                            <img src="{{ Str::startsWith($related->image, 'http') ? $related->image : asset('storage/' . $related->image) }}" alt="{{ $related->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" onerror="this.style.display='none'">
                        </div>
                    @else
                        <div class="aspect-video bg-zinc-950 flex items-center justify-center">
                            <svg class="w-10 h-10 text-zinc-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                            </svg>
                        </div>
                    @endif
                    
                    <div class="p-4">
                        <h3 class="font-bold text-white mb-2 line-clamp-2 group-hover:text-blue-400 transition-colors">
                            <a href="{{ route('blogs.show', $related->slug) }}">{{ $related->title }}</a>
                        </h3>
                        <p class="text-zinc-500 text-xs">{{ $related->created_at->format('M d, Y') }}</p>
                    </div>
                </article>
            @endforeach
        </div>
    </section>
    @endif
</div>
@endsection
