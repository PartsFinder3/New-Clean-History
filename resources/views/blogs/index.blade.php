@extends('layouts.app')

@section('title', 'Blog - Car Auction Insights & News')

@section('description')
Read the latest car auction insights, tips, and news. Our car history experts provide advice on buying and selling vehicles at auction with a clean record.
@endsection
@section('keywords', 'car auction blog, vehicle history news, auction tips, car market insights, VIN cleaning advice')

@section('content')
<div class="max-w-7xl mx-auto py-12 px-4 md:py-20 md:px-8">
    <!-- Header -->
    <div class="text-center mb-16">
        <h1 class="text-4xl md:text-5xl font-bold text-foreground font-display tracking-tight mb-4">Expert <span class="gradient-text">Insights</span></h1>
        <p class="text-muted text-lg max-w-2xl mx-auto font-medium">Stay updated with the latest car auction insights, VIN removal tips, and industry news from the Dubai car market.</p>
    </div>

    @if($blogs->isEmpty())
        <div class="text-center py-24 bg-background-secondary rounded-3xl border-2 border-dashed border-card-border">
            <div class="inline-flex items-center justify-center w-20 h-20 bg-blue-50 rounded-full mb-6">
                <svg class="w-10 h-10 text-accent opacity-40" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                </svg>
            </div>
            <h2 class="text-2xl font-bold text-foreground mb-2">No Blog Posts Yet</h2>
            <p class="text-muted">Our experts are currently writing the latest auction guides. Check back soon!</p>
        </div>
    @else
        <!-- Blog Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 md:gap-10">
            @foreach($blogs as $blog)
                <article class="bg-white border border-card-border rounded-3xl overflow-hidden hover:border-accent hover:shadow-xl transition-all duration-300 group flex flex-col">
                    @if($blog->image)
                        <a href="{{ route('blogs.show', $blog->slug) }}" class="aspect-video overflow-hidden bg-background-secondary block">
                            <img src="{{ Str::startsWith($blog->image, 'http') ? $blog->image : asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" onerror="this.src='https://via.placeholder.com/600x400?text=Car+History+Expert+Insights'">
                        </a>
                    @else
                        <a href="{{ route('blogs.show', $blog->slug) }}" class="aspect-video bg-background-secondary flex items-center justify-center group-hover:bg-blue-50 transition-colors">
                            <svg class="w-16 h-16 text-muted-light" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                            </svg>
                        </a>
                    @endif
                    
                    <div class="p-8 flex flex-col flex-grow">
                        <div class="flex items-center gap-2 text-muted-light text-xs mb-4 font-bold uppercase tracking-widest">
                            <svg class="w-4 h-4 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            {{ $blog->created_at->format('M d, Y') }}
                        </div>
                        
                        <h2 class="text-xl font-bold text-foreground mb-4 group-hover:text-accent transition-colors line-clamp-2 leading-tight font-display">
                            <a href="{{ route('blogs.show', $blog->slug) }}">{{ $blog->title }}</a>
                        </h2>
                        
                        @if($blog->excerpt)
                            <p class="text-muted text-sm mb-6 line-clamp-3 leading-relaxed">{{ $blog->excerpt }}</p>
                        @endif
                        
                        <div class="mt-auto pt-6 border-t border-card-border/50">
                            <a href="{{ route('blogs.show', $blog->slug) }}" class="inline-flex items-center text-accent text-sm font-bold hover:text-accent-hover transition-colors gap-2 group/btn">
                                Read Full Article
                                <svg class="w-4 h-4 group-hover/btn:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>

        <div class="mt-16">
            {{ $blogs->links('partials.pagination') }}
        </div>
    @endif
</div>
@endsection
