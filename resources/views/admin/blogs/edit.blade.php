@extends('layouts.app')

@section('title', 'Edit Blog')

@section('head')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('content')
<div class="max-w-5xl mx-auto py-8 px-4 md:py-12 md:px-8">
    <!-- Header -->
    <div class="flex items-center justify-between mb-8">
        <div>
            <h1 class="text-3xl md:text-4xl font-bold text-white font-outfit tracking-tight">Edit Blog</h1>
            <p class="text-zinc-400 mt-1">Update this blog post with SEO optimization.</p>
        </div>
        <a href="{{ route('admin.blogs.index') }}" class="px-5 py-2.5 bg-zinc-800 hover:bg-zinc-700 text-zinc-300 rounded-xl text-sm font-medium transition-all border border-zinc-700">
            Back to Blogs
        </a>
    </div>

    @if($errors->any())
        <div class="mb-6 p-4 bg-red-500/10 border border-red-500/50 rounded-xl text-red-400 text-sm">
            <ul class="list-disc list-inside">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.blogs.update', $blog->id) }}" method="POST" class="space-y-8">
        @csrf
        @method('PUT')

        <!-- Main Content -->
        <div class="bg-zinc-900 border border-zinc-800 rounded-2xl p-6 md:p-8">
            <h2 class="text-xl font-bold text-white mb-6 flex items-center gap-3">
                <span class="p-2 bg-blue-500/10 rounded-lg text-blue-500">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                </span>
                Blog Content
            </h2>

            <div class="space-y-6">
                <!-- Title -->
                <div>
                    <label for="title" class="block text-sm font-medium text-zinc-300 mb-2">Title <span class="text-red-400">*</span></label>
                    <input type="text" name="title" id="title" value="{{ old('title', $blog->title) }}" required
                        class="w-full px-4 py-3 bg-zinc-950 border border-zinc-800 rounded-xl text-white placeholder-zinc-500 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-all"
                        placeholder="Enter blog title">
                </div>

                <!-- Excerpt -->
                <div>
                    <label for="excerpt" class="block text-sm font-medium text-zinc-300 mb-2">Excerpt</label>
                    <textarea name="excerpt" id="excerpt" rows="2"
                        class="w-full px-4 py-3 bg-zinc-950 border border-zinc-800 rounded-xl text-white placeholder-zinc-500 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-all"
                        placeholder="Short description for blog cards (max 500 characters)">{{ old('excerpt', $blog->excerpt) }}</textarea>
                    <p class="text-zinc-500 text-xs mt-1">A brief summary shown in blog listing cards.</p>
                </div>

                <!-- Content -->
                <div>
                    <label for="content" class="block text-sm font-medium text-zinc-300 mb-2">Content <span class="text-red-400">*</span></label>
                    <textarea name="content" id="content" rows="12" required
                        class="w-full px-4 py-3 bg-zinc-950 border border-zinc-800 rounded-xl text-white placeholder-zinc-500 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-all font-mono text-sm"
                        placeholder="Write your blog content here...">{{ old('content', $blog->content) }}</textarea>
                </div>

                <!-- Image URL -->
                <div>
                    <label for="image" class="block text-sm font-medium text-zinc-300 mb-2">Featured Image URL</label>
                    <input type="text" name="image" id="image" value="{{ old('image', $blog->image) }}"
                        class="w-full px-4 py-3 bg-zinc-950 border border-zinc-800 rounded-xl text-white placeholder-zinc-500 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-all"
                        placeholder="https://example.com/image.jpg">
                    <p class="text-zinc-500 text-xs mt-1">Enter URL of the featured image.</p>
                </div>
            </div>
        </div>

        <!-- SEO Settings -->
        <div class="bg-zinc-900 border border-zinc-800 rounded-2xl p-6 md:p-8">
            <h2 class="text-xl font-bold text-white mb-6 flex items-center gap-3">
                <span class="p-2 bg-purple-500/10 rounded-lg text-purple-500">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                </span>
                SEO Settings
            </h2>

            <div class="space-y-6">
                <!-- Meta Title -->
                <div>
                    <label for="meta_title" class="block text-sm font-medium text-zinc-300 mb-2">
                        Meta Title
                        <span class="text-zinc-500 font-normal">(recommended: 50-60 characters)</span>
                    </label>
                    <input type="text" name="meta_title" id="meta_title" value="{{ old('meta_title', $blog->meta_title) }}" maxlength="70"
                        class="w-full px-4 py-3 bg-zinc-950 border border-zinc-800 rounded-xl text-white placeholder-zinc-500 focus:outline-none focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition-all"
                        placeholder="SEO title (if different from main title)">
                    <div class="flex justify-between mt-1">
                        <p class="text-zinc-500 text-xs">Title shown in search engines.</p>
                        <p class="text-zinc-500 text-xs"><span id="meta_title_count">{{ strlen($blog->meta_title ?? '') }}</span>/70</p>
                    </div>
                </div>

                <!-- Meta Description -->
                <div>
                    <label for="meta_description" class="block text-sm font-medium text-zinc-300 mb-2">
                        Meta Description
                        <span class="text-zinc-500 font-normal">(recommended: 150-160 characters)</span>
                    </label>
                    <textarea name="meta_description" id="meta_description" rows="3" maxlength="160"
                        class="w-full px-4 py-3 bg-zinc-950 border border-zinc-800 rounded-xl text-white placeholder-zinc-500 focus:outline-none focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition-all"
                        placeholder="SEO description for search results">{{ old('meta_description', $blog->meta_description) }}</textarea>
                    <div class="flex justify-between mt-1">
                        <p class="text-zinc-500 text-xs">Description shown below the title in search results.</p>
                        <p class="text-zinc-500 text-xs"><span id="meta_description_count">{{ strlen($blog->meta_description ?? '') }}</span>/160</p>
                    </div>
                </div>

                <!-- Meta Keywords -->
                <div>
                    <label for="meta_keywords" class="block text-sm font-medium text-zinc-300 mb-2">Meta Keywords</label>
                    <input type="text" name="meta_keywords" id="meta_keywords" value="{{ old('meta_keywords', $blog->meta_keywords) }}"
                        class="w-full px-4 py-3 bg-zinc-950 border border-zinc-800 rounded-xl text-white placeholder-zinc-500 focus:outline-none focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition-all"
                        placeholder="keyword1, keyword2, keyword3">
                    <p class="text-zinc-500 text-xs mt-1">Comma-separated keywords.</p>
                </div>

                <!-- Meta Author -->
                <div>
                    <label for="meta_author" class="block text-sm font-medium text-zinc-300 mb-2">Meta Author</label>
                    <input type="text" name="meta_author" id="meta_author" value="{{ old('meta_author', $blog->meta_author) }}"
                        class="w-full px-4 py-3 bg-zinc-950 border border-zinc-800 rounded-xl text-white placeholder-zinc-500 focus:outline-none focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition-all"
                        placeholder="Author name">
                </div>
            </div>
        </div>

        <!-- Publishing Options -->
        <div class="bg-zinc-900 border border-zinc-800 rounded-2xl p-6 md:p-8">
            <h2 class="text-xl font-bold text-white mb-6 flex items-center gap-3">
                <span class="p-2 bg-emerald-500/10 rounded-lg text-emerald-500">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </span>
                Publishing
            </h2>

            <div class="space-y-6">
                <!-- Order -->
                <div>
                    <label for="order" class="block text-sm font-medium text-zinc-300 mb-2">Display Order</label>
                    <input type="number" name="order" id="order" value="{{ old('order', $blog->order) }}" min="0"
                        class="w-full px-4 py-3 bg-zinc-950 border border-zinc-800 rounded-xl text-white placeholder-zinc-500 focus:outline-none focus:border-emerald-500 focus:ring-1 focus:ring-emerald-500 transition-all"
                        placeholder="0">
                    <p class="text-zinc-500 text-xs mt-1">Lower numbers appear first.</p>
                </div>

                <!-- Published -->
                <div class="flex items-center gap-3">
                    <input type="checkbox" name="is_published" id="is_published" value="1" {{ old('is_published', $blog->is_published) ? 'checked' : '' }}
                        class="w-5 h-5 bg-zinc-950 border border-zinc-700 rounded text-emerald-500 focus:ring-emerald-500 focus:ring-offset-0">
                    <label for="is_published" class="text-sm text-zinc-300">Publish immediately</label>
                </div>
            </div>
        </div>

        <!-- Submit Buttons -->
        <div class="flex items-center justify-between">
            <a href="{{ route('blogs.show', $blog->slug) }}" target="_blank" class="px-6 py-3 bg-emerald-600/10 hover:bg-emerald-600/20 text-emerald-400 rounded-xl text-sm font-medium transition-all border border-emerald-500/30">
                View on Site
            </a>
            <div class="flex items-center gap-4">
                <a href="{{ route('admin.blogs.index') }}" class="px-6 py-3 bg-zinc-800 hover:bg-zinc-700 text-zinc-300 rounded-xl text-sm font-medium transition-all border border-zinc-700">
                    Cancel
                </a>
                <button type="submit" class="px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white rounded-xl text-sm font-medium transition-all">
                    Update Blog Post
                </button>
            </div>
        </div>
    </form>
</div>

@section('scripts')
<script>
    // Character counters
    const metaTitleInput = document.getElementById('meta_title');
    const metaTitleCount = document.getElementById('meta_title_count');
    const metaDescInput = document.getElementById('meta_description');
    const metaDescCount = document.getElementById('meta_description_count');

    metaTitleInput.addEventListener('input', function() {
        metaTitleCount.textContent = this.value.length;
    });

    metaDescInput.addEventListener('input', function() {
        metaDescCount.textContent = this.value.length;
    });
</script>
@endsection
