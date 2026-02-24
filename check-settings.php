<?php
// Simple script to check settings
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
    if (Schema::hasTable('settings')) {
        echo "Settings table exists\n";
        $settings = \Illuminate\Support\Facades\DB::table('settings')->get();
        echo "Found " . $settings->count() . " settings\n";
        
        foreach ($settings as $setting) {
            echo $setting->key . ': ' . substr($setting->value, 0, 50) . "...\n";
        }
    } else {
        echo "Settings table does not exist\n";
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}