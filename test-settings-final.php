<?php
// Test script to verify settings system
require_once __DIR__ . '/vendor/autoload.php';

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Support\Facades\Schema;

// Initialize Eloquent
$capsule = new Capsule;
$capsule->addConnection([
    'driver' => env('DB_CONNECTION', 'mysql'),
    'host' => env('DB_HOST', '127.0.0.1'),
    'database' => env('DB_DATABASE', 'forge'),
    'username' => env('DB_USERNAME', 'forge'),
    'password' => env('DB_PASSWORD', ''),
    'charset' => 'utf8mb4',
    'collation' => 'utf8mb4_unicode_ci',
    'prefix' => '',
]);

$capsule->setAsGlobal();
$capsule->bootEloquent();

echo "=== Settings System Test ===\n\n";

try {
    // Check if settings table exists
    if (Schema::hasTable('settings')) {
        echo "✓ Settings table exists\n";
        
        // Check if table has any data
        $count = \Illuminate\Support\Facades\DB::table('settings')->count();
        echo "✓ Settings table has $count records\n";
        
        if ($count > 0) {
            $settings = \Illuminate\Support\Facades\DB::table('settings')->get();
            echo "\n=== Current Settings ===\n";
            foreach ($settings as $setting) {
                echo $setting->key . ': ' . substr($setting->value, 0, 100) . "...\n";
            }
        } else {
            echo "\n⚠ Settings table is empty. You need to add settings via the admin dashboard.\n";
        }
        
    } else {
        echo "✗ Settings table does not exist\n";
        echo "Please run: php artisan migrate\n";
    }
    
    // Test AppServiceProvider logic
    echo "\n=== AppServiceProvider Test ===\n";
    if (Schema::hasTable('settings')) {
        $siteSettings = \Illuminate\Support\Facades\DB::table('settings')->pluck('value', 'key')->toArray();
        echo "✓ AppServiceProvider would share " . count($siteSettings) . " settings\n";
        
        // Test specific settings
        $testKeys = ['google_search_console', 'google_analytics', 'bing_webmaster', 'yandex_webmaster', 'microsoft_clarity', 'header_scripts'];
        foreach ($testKeys as $key) {
            if (isset($siteSettings[$key])) {
                echo "✓ $key: Found\n";
            } else {
                echo "ℹ $key: Not set (this is normal if not configured yet)\n";
            }
        }
    }
    
} catch (Exception $e) {
    echo "✗ Error: " . $e->getMessage() . "\n";
}

echo "\n=== Instructions ===\n";
echo "1. If settings table doesn't exist: Run 'php artisan migrate'\n";
echo "2. If settings table is empty: Add settings via admin dashboard at /admin\n";
echo "3. After adding settings, they should appear in HTML source and dashboard form\n";