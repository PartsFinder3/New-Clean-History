<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
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
            // Check file cache first — zero DB connections if cache exists
            $siteSettings = \Illuminate\Support\Facades\Cache::get('site_settings');

            if ($siteSettings === null) {
                // Only hit DB if cache is truly empty — no Schema::hasTable check
                $siteSettings = Setting::pluck('value', 'key')->toArray();
                \Illuminate\Support\Facades\Cache::forever('site_settings', $siteSettings);
            }

            View::share('siteSettings', $siteSettings);
        } catch (\Exception $e) {
            // Fallback to empty settings if DB is unreachable
            View::share('siteSettings', []);
        }
    }
}
