<?php

/**
 * DEBUG MODE: Enable error reporting to find the 500 error cause
 */
error_reporting(E_ALL);
ini_set('display_errors', 1);

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

/**
 * Robust Path Detection
 */
$possiblePaths = [
    'autoload' => [
        __DIR__.'/vendor/autoload.php',
        __DIR__.'/car-auction-laravel/vendor/autoload.php',
        dirname(__DIR__).'/vendor/autoload.php',
    ],
    'bootstrap' => [
        __DIR__.'/bootstrap/app.php',
        __DIR__.'/car-auction-laravel/bootstrap/app.php',
        dirname(__DIR__).'/bootstrap/app.php',
    ],
    'maintenance' => [
        __DIR__.'/storage/framework/maintenance.php',
        __DIR__.'/car-auction-laravel/storage/framework/maintenance.php',
        dirname(__DIR__).'/storage/framework/maintenance.php',
    ]
];

$paths = [];
foreach ($possiblePaths as $key => $locations) {
    foreach ($locations as $location) {
        if (file_exists($location)) {
            $paths[$key] = $location;
            break;
        }
    }
}

// Validation
if (!isset($paths['autoload'])) {
    die("Error: Missing critical file 'vendor/autoload.php'. Please run 'composer install'. Checked: " . implode(', ', $possiblePaths['autoload']));
}
if (!isset($paths['bootstrap'])) {
    die("Error: Missing critical file 'bootstrap/app.php'. Checked: " . implode(', ', $possiblePaths['bootstrap']));
}

/**
 * Check Maintenance Mode
 */
if (isset($paths['maintenance'])) {
    require $paths['maintenance'];
}

/**
 * Register The Auto Loader
 */
require $paths['autoload'];

/**
 * Run The Application
 */
$app = require_once $paths['bootstrap'];

$app->handleRequest(Request::capture());
