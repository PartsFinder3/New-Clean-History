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
        // Share empty settings by default
        View::share('siteSettings', []);

        try {
            // Only attempt to load settings if not in console or if explicitly needed
            if (!app()->runningInConsole()) {
                $siteSettings = \Illuminate\Support\Facades\Cache::get('site_settings');

                if ($siteSettings === null) {
                    // Use a short timeout or just fail fast if DB is not ready
                    $siteSettings = Setting::pluck('value', 'key')->toArray();
                    \Illuminate\Support\Facades\Cache::forever('site_settings', $siteSettings);
                }

                View::share('siteSettings', $siteSettings);
            }
        } catch (\Exception $e) {
            // Silently fail, it will use the empty array shared above
        }
    }
}
