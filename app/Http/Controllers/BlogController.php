<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    /**
     * Display a listing of published blogs for public view.
     */
    public function index()
    {
        try {
            $blogs = \Illuminate\Support\Facades\Cache::remember('blogs_published', 3600, function () {
                return Blog::published()->ordered()->get();
            });
        } catch (\Exception $e) {
            $blogs = collect([]);
        }
        return view('blogs.index', compact('blogs'));
    }

    /**
     * Display a single blog post for public view.
     */
    public function show($slug)
    {
        try {
            $blog = \Illuminate\Support\Facades\Cache::remember('blog_' . $slug, 3600, function () use ($slug) {
                return Blog::where('slug', $slug)->firstOrFail();
            });

            $relatedBlogs = \Illuminate\Support\Facades\Cache::remember('blog_related_' . $slug, 3600, function () use ($blog) {
                return Blog::published()
                    ->where('id', '!=', $blog->id)
                    ->ordered()
                    ->take(3)
                    ->get();
            });
        } catch (\Exception $e) {
            abort(503, 'Service temporarily unavailable. Please try again in a few minutes.');
        }

        return view('blogs.show', compact('blog', 'relatedBlogs'));
    }

    /**
     * Admin: Display a listing of all blogs.
     */
    public function adminIndex()
    {
        $blogs = Blog::ordered()->get();
        return view('admin.blogs.index', compact('blogs'));
    }

    /**
     * Admin: Show the form for creating a new blog.
     */
    public function create()
    {
        return view('admin.blogs.create');
    }

    /**
     * Admin: Store a newly created blog in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'excerpt' => 'nullable|string|max:500',
            'image' => 'nullable|string|max:500',
            'meta_title' => 'nullable|string|max:70',
            'meta_description' => 'nullable|string|max:160',
            'meta_keywords' => 'nullable|string|max:255',
            'meta_author' => 'nullable|string|max:100',
            'is_published' => 'boolean',
            'order' => 'integer|min:0',
        ]);

        // Generate slug from title
        $slug = Str::slug($validated['title']);
        
        // Ensure unique slug
        $originalSlug = $slug;
        $counter = 1;
        while (Blog::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $counter;
            $counter++;
        }

        $validated['slug'] = $slug;
        $validated['is_published'] = $request->has('is_published');

        Blog::create($validated);

        return redirect()->route('admin.blogs.index')->with('success', 'Blog created successfully!');
    }

    /**
     * Admin: Show the form for editing the specified blog.
     */
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin.blogs.edit', compact('blog'));
    }

    /**
     * Admin: Update the specified blog in storage.
     */
    public function update(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'excerpt' => 'nullable|string|max:500',
            'image' => 'nullable|string|max:500',
            'meta_title' => 'nullable|string|max:70',
            'meta_description' => 'nullable|string|max:160',
            'meta_keywords' => 'nullable|string|max:255',
            'meta_author' => 'nullable|string|max:100',
            'is_published' => 'boolean',
            'order' => 'integer|min:0',
        ]);

        // Generate slug from title (only if title changed)
        if ($blog->title !== $validated['title']) {
            $slug = Str::slug($validated['title']);
            
            // Ensure unique slug
            $originalSlug = $slug;
            $counter = 1;
            while (Blog::where('slug', $slug)->where('id', '!=', $id)->exists()) {
                $slug = $originalSlug . '-' . $counter;
                $counter++;
            }
            
            $validated['slug'] = $slug;
        }

        $validated['is_published'] = $request->has('is_published');

        $blog->update($validated);

        return redirect()->route('admin.blogs.index')->with('success', 'Blog updated successfully!');
    }

    /**
     * Admin: Remove the specified blog from storage.
     */
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();

        return redirect()->route('admin.blogs.index')->with('success', 'Blog deleted successfully!');
    }
}
