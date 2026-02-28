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
 * Check Paths
 */
$paths = [
    'autoload' => __DIR__.'/vendor/autoload.php',
    'bootstrap' => __DIR__.'/bootstrap/app.php',
    'maintenance' => __DIR__.'/storage/framework/maintenance.php'
];

foreach ($paths as $name => $path) {
    if ($name !== 'maintenance' && !file_exists($path)) {
        die("Error: Missing critical file at $path. Please ensure you have run 'composer install' and the file exists.");
    }
}

/**
 * Check Maintenance Mode
 */
if (file_exists($paths['maintenance'])) {
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
