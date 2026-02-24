<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\SitemapController;
use Illuminate\Support\Facades\Route;

// SEO Routes
Route::get('/sitemap.xml', [SitemapController::class, 'index']);

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
Route::get('/products', [HomeController::class, 'products'])->name('products');
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
