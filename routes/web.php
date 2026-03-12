<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\SitemapController;
use Illuminate\Support\Facades\Route;

// SEO Routes
Route::get('/sitemap.xml', [SitemapController::class, 'index']);

Route::get('/robots.txt', function () {
    $content = <<<'ROBOTS'
# robots.txt for Car History Remover
# https://carhistoryremove.online

# Allow all bots (including AI bots) to crawl the site
User-agent: *
Allow: /

# Admin area - disallow all bots
Disallow: /admin
Disallow: /admin/*
Disallow: /login
Disallow: /logout

# Specific AI and Search Engine Bots
User-agent: Googlebot
Allow: /

User-agent: Googlebot-Image
Allow: /

User-agent: Googlebot-News
Allow: /

User-agent: Googlebot-Video
Allow: /

User-agent: Bingbot
Allow: /

User-agent: bingbot
Allow: /

User-agent: Yahoo! Slurp
Allow: /

User-agent: DuckDuckBot
Allow: /

User-agent: Yandex
Allow: /

User-agent: Baidu
Allow: /

User-agent: Sogou
Allow: /

User-agent: Exabot
Allow: /

User-agent: FacebookBot
Allow: /

User-agent: Twitterbot
Allow: /

User-agent: Applebot
Allow: /

User-agent: Slackbot
Allow: /

User-agent: TikTokBot
Allow: /

User-agent: ClaudeBot
Allow: /

User-agent: anthropic-ai
Allow: /

User-agent: GPTBot
Allow: /

User-agent: ChatGPT-User
Allow: /

User-agent: Google-Extended
Allow: /

User-agent: BingBot
Allow: /

User-agent: MicrosoftBot
Allow: /

# AI Bots - OpenAI
User-agent: OAI-SearchBot
Allow: /

# Sitemap - Important for SEO
Sitemap: https://carhistoryremove.online/sitemap.xml

# Crawl-delay (optional, be polite)
Crawl-delay: 2
ROBOTS;

    return response($content, 200)
        ->header('Content-Type', 'text/plain');
});

// Utility: Clear caches (use ?key=carhistory786 to authorize)
Route::get('/clear-cache', function () {
    if (request('key') !== 'carhistory786') {
        abort(403);
    }
    
    \Illuminate\Support\Facades\Artisan::call('view:clear');
    \Illuminate\Support\Facades\Artisan::call('cache:clear');
    \Illuminate\Support\Facades\Artisan::call('route:clear');
    \Illuminate\Support\Facades\Artisan::call('config:clear');
    
    return response()->json([
        'status' => 'success',
        'message' => 'All caches cleared!',
        'output' => \Illuminate\Support\Facades\Artisan::output()
    ]);
});

// Public Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/cars', [HomeController::class, 'cars'])->name('cars.index');
Route::get('/cars/{slug}', [HomeController::class, 'carDetail'])->name('cars.show');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/disclaimer', [HomeController::class, 'disclaimer'])->name('disclaimer');
Route::get('/privacy-policy', [HomeController::class, 'privacyPolicy'])->name('privacy-policy');
Route::get('/terms', [HomeController::class, 'terms'])->name('terms');
Route::get('/sitemap', [HomeController::class, 'sitemapHtml'])->name('sitemap-html');
Route::get('/rss', [HomeController::class, 'rss'])->name('rss');
Route::get('/car-history-clean-service', [HomeController::class, 'products'])->name('products');
Route::get('/services/{slug}', [HomeController::class, 'serviceDetail'])->name('services.show');

// Blog Routes (Public)
Route::get('/blog', [BlogController::class, 'index'])->name('blogs.index');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blogs.show');

// Admin Auth Routes
Route::get('/login', [AdminController::class, 'login'])->name('admin.login');
Route::post('/login', [AdminController::class, 'authenticate'])->name('admin.authenticate');
Route::post('/logout', [AdminController::class, 'logout'])->name('admin.logout');

// Protected Admin Routes
Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::post('/cars', [AdminController::class, 'store'])->name('admin.cars.store');
    Route::post('/cars/check-vins', [AdminController::class, 'checkVins'])->name('admin.cars.check-vins');
    Route::post('/cars/bulk', [AdminController::class, 'bulkStore'])->name('admin.cars.bulk');
    Route::delete('/cars/{id}', [AdminController::class, 'destroy'])->name('admin.cars.destroy');
    Route::post('/cars/delete-all', [AdminController::class, 'destroyAll'])->name('admin.cars.destroy-all');
    Route::post('/cars/bulk-delete', [AdminController::class, 'bulkDelete'])->name('admin.cars.bulk-delete');
    
    // Blog Management Routes
    Route::get('/blogs', [BlogController::class, 'adminIndex'])->name('admin.blogs.index');
    Route::get('/blogs/create', [BlogController::class, 'create'])->name('admin.blogs.create');
    Route::post('/blogs', [BlogController::class, 'store'])->name('admin.blogs.store');
    Route::get('/blogs/{id}/edit', [BlogController::class, 'edit'])->name('admin.blogs.edit');
    Route::put('/blogs/{id}', [BlogController::class, 'update'])->name('admin.blogs.update');
    Route::delete('/blogs/{id}', [BlogController::class, 'destroy'])->name('admin.blogs.destroy');
    
    // Settings Route
    Route::post('/settings', [AdminController::class, 'updateSettings'])->name('admin.settings.update');
});
