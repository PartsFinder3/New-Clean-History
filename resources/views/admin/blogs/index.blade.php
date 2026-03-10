@extends('layouts.app')

@section('title', 'Manage Blogs')

@section('head')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('content')
<div class="max-w-7xl mx-auto py-8 px-4 md:py-12 md:px-8">
    <!-- Header -->
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-6 mb-10">
        <div>
            <h1 class="text-3xl md:text-4xl font-bold text-white font-outfit tracking-tight">Manage Blogs</h1>
            <p class="text-zinc-400 mt-1 text-sm md:text-base">Create and manage blog posts with SEO optimization.</p>
        </div>
        <div class="flex items-center gap-3">
            <a href="{{ route('admin.dashboard') }}" class="flex-1 md:flex-none px-5 py-2.5 bg-zinc-800 hover:bg-zinc-700 text-zinc-300 rounded-xl text-sm font-medium transition-all border border-zinc-700">
                Back to Dashboard
            </a>
            <a href="{{ route('admin.blogs.create') }}" class="flex-1 md:flex-none px-5 py-2.5 bg-blue-600 hover:bg-blue-700 text-white rounded-xl text-sm font-medium transition-all">
                + Add New Blog
            </a>
        </div>
    </div>

    @if(session('success'))
        <div id="success-alert" class="mb-6 p-4 bg-emerald-500/10 border border-emerald-500/50 rounded-xl text-emerald-400 text-sm shadow-inner flex items-center gap-3">
            <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
            {{ session('success') }}
        </div>
    @endif

    <!-- Stats Row -->
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-6 mb-10">
        <div class="bg-zinc-900 border border-zinc-800 rounded-2xl p-4 md:p-5 shadow-xl flex flex-col md:flex-row items-start md:items-center gap-3 md:gap-4">
            <div class="p-2.5 bg-purple-500/10 rounded-xl text-purple-500">
                <svg class="w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path></svg>
            </div>
            <div>
                <p class="text-[9px] md:text-[10px] font-bold text-zinc-500 uppercase tracking-widest">Total Blogs</p>
                <p class="text-xl md:text-2xl font-bold text-white font-outfit">{{ $blogs->count() }}</p>
            </div>
        </div>
        
        <div class="bg-zinc-900 border border-zinc-800 rounded-2xl p-4 md:p-5 shadow-xl flex flex-col md:flex-row items-start md:items-center gap-3 md:gap-4">
            <div class="p-2.5 bg-emerald-500/10 rounded-xl text-emerald-500">
                <svg class="w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            </div>
            <div>
                <p class="text-[9px] md:text-[10px] font-bold text-zinc-500 uppercase tracking-widest">Published</p>
                <p class="text-xl md:text-2xl font-bold text-white font-outfit">{{ $blogs->where('is_published', true)->count() }}</p>
            </div>
        </div>

        <div class="bg-zinc-900 border border-zinc-800 rounded-2xl p-4 md:p-5 shadow-xl flex flex-col md:flex-row items-start md:items-center gap-3 md:gap-4">
            <div class="p-2.5 bg-orange-500/10 rounded-xl text-orange-500">
                <svg class="w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            </div>
            <div>
                <p class="text-[9px] md:text-[10px] font-bold text-zinc-500 uppercase tracking-widest">Drafts</p>
                <p class="text-xl md:text-2xl font-bold text-white font-outfit">{{ $blogs->where('is_published', false)->count() }}</p>
            </div>
        </div>

        <div class="bg-zinc-900 border border-zinc-800 rounded-2xl p-4 md:p-5 shadow-xl flex flex-col md:flex-row items-start md:items-center gap-3 md:gap-4">
            <div class="p-2.5 bg-blue-500/10 rounded-xl text-blue-500">
                <svg class="w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
            </div>
            <div>
                <p class="text-[9px] md:text-[10px] font-bold text-zinc-500 uppercase tracking-widest">View on Site</p>
                <a href="{{ route('blogs.index') }}" class="text-xl md:text-2xl font-bold text-blue-400 hover:text-blue-300 font-outfit transition-colors">Visit Blog</a>
            </div>
        </div>
    </div>

    <!-- Blogs Table -->
    <div class="bg-zinc-900 border border-zinc-800 rounded-2xl shadow-2xl overflow-hidden">
        <div class="p-6 md:p-8 flex flex-col md:flex-row md:items-center justify-between gap-4 border-b border-zinc-800">
            <h2 class="text-xl font-bold text-white font-outfit flex items-center gap-3">
                <span class="p-2 bg-purple-500/10 rounded-lg text-purple-500">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                </span>
                All Blog Posts ({{ $blogs->count() }})
            </h2>
        </div>

        <div class="overflow-x-auto custom-scrollbar">
            <table class="w-full text-left text-sm text-zinc-300">
                <thead class="bg-zinc-950/50 text-zinc-500 uppercase text-[10px] font-bold tracking-widest">
                    <tr>
                        <th class="px-6 py-4">#</th>
                        <th class="px-6 py-4">Title</th>
                        <th class="px-6 py-4">Slug</th>
                        <th class="px-6 py-4">Status</th>
                        <th class="px-6 py-4">Order</th>
                        <th class="px-6 py-4">Date</th>
                        <th class="px-6 py-4 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-zinc-800/50">
                    @forelse($blogs as $index => $blog)
                        <tr class="hover:bg-zinc-800/30 transition-colors">
                            <td class="px-6 py-4 text-zinc-600 font-mono text-xs">{{ $index + 1 }}</td>
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-4">
                                    <div class="w-12 h-12 rounded-xl bg-zinc-950 border border-zinc-800 flex-shrink-0 flex items-center justify-center overflow-hidden">
                                        @if($blog->image)
                                            <img src="{{ Str::startsWith($blog->image, 'http') ? $blog->image : asset('storage/' . $blog->image) }}" class="w-full h-full object-cover" onerror="this.src='/no-img.svg'"/>
                                        @else
                                            <svg class="w-6 h-6 text-zinc-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path></svg>
                                        @endif
                                    </div>
                                    <div>
                                        <p class="font-bold text-white line-clamp-1">{{ $blog->title }}</p>
                                        @if($blog->meta_title)
                                            <p class="text-zinc-500 text-xs line-clamp-1">{{ $blog->meta_title }}</p>
                                        @endif
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 font-mono text-cyan-400 text-xs">{{ $blog->slug }}</td>
                            <td class="px-6 py-4">
                                @if($blog->is_published)
                                    <span class="inline-flex px-2 py-1 bg-emerald-500/10 text-emerald-500 rounded text-[10px] font-bold uppercase">Published</span>
                                @else
                                    <span class="inline-flex px-2 py-1 bg-orange-500/10 text-orange-500 rounded text-[10px] font-bold uppercase">Draft</span>
                                @endif
                            </td>
                            <td class="px-6 py-4 text-zinc-400 text-xs">{{ $blog->order }}</td>
                            <td class="px-6 py-4 text-zinc-400 text-xs">{{ $blog->created_at->format('M d, Y') }}</td>
                            <td class="px-6 py-4 text-center">
                                <div class="flex items-center justify-center gap-2">
                                    <a href="{{ route('admin.blogs.edit', $blog->id) }}" class="p-2.5 bg-blue-600/10 hover:bg-blue-600/20 text-blue-500 rounded-lg border border-blue-500/20 transition-all hover:scale-110 active:scale-95">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                                    </a>
                                    <a href="{{ route('blogs.show', $blog->slug) }}" target="_blank" class="p-2.5 bg-emerald-600/10 hover:bg-emerald-600/20 text-emerald-500 rounded-lg border border-emerald-500/20 transition-all hover:scale-110 active:scale-95">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                                    </a>
                                    <form action="{{ route('admin.blogs.destroy', $blog->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="p-2.5 bg-red-600/10 hover:bg-red-600/20 text-red-500 rounded-lg border border-red-500/20 transition-all hover:scale-110 active:scale-95" onclick="return confirm('Are you sure you want to delete this blog?')">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="px-6 py-20 text-center">
                                <div class="flex flex-col items-center gap-3">
                                    <svg class="w-12 h-12 text-zinc-800" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path></svg>
                                    <p class="text-zinc-600 font-medium tracking-tight">No blog posts yet.</p>
                                    <a href="{{ route('admin.blogs.create') }}" class="text-blue-400 hover:text-blue-300 text-sm font-medium">Create your first blog post</a>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
