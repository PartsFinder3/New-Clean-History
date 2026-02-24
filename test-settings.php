<?php
// Simple test script to verify settings functionality
// This is a temporary file for testing purposes

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

try {
    // Test if settings table exists
    if (Schema::hasTable('settings')) {
        echo "✓ Settings table exists\n";
        
        // Test retrieving settings
        $settings = \Illuminate\Support\Facades\DB::table('settings')->get();
        echo "✓ Retrieved " . $settings->count() . " settings\n";
        
        // Test specific settings
        $googleSearch = \Illuminate\Support\Facades\DB::table('settings')
            ->where('key', 'google_search_console')
            ->value('value');
            
        if ($googleSearch) {
            echo "✓ Google Search Console setting found: " . substr($googleSearch, 0, 50) . "...\n";
        } else {
            echo "ℹ No Google Search Console setting found (this is normal if not set yet)\n";
        }
        
    } else {
        echo "✗ Settings table does not exist\n";
        echo "Please run: php artisan migrate\n";
    }
    
} catch (Exception $e) {
    echo "✗ Error: " . $e->getMessage() . "\n";
}