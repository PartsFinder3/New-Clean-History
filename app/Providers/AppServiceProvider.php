<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use App\Models\Setting;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        try {
            // Check cache first to avoid ANY database connection if possible
            $siteSettings = \Illuminate\Support\Facades\Cache::get('site_settings');

            if ($siteSettings === null) {
                // Only connect to DB if cache is missing
                if (Schema::hasTable('settings')) {
                    $siteSettings = Setting::pluck('value', 'key')->toArray();
                    \Illuminate\Support\Facades\Cache::forever('site_settings', $siteSettings);
                } else {
                    $siteSettings = [];
                }
            }

            View::share('siteSettings', $siteSettings);
        } catch (\Exception $e) {
            // Fallback to empty context if DB is unreachable (e.g. max connections reached)
            View::share('siteSettings', []);
        }
    }
}
