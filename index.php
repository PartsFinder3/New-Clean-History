<?php
// SEO: Redirect index.php to root if accessed directly
if (strpos($_SERVER['REQUEST_URI'], 'index.php') !== false) {
    header("Location: /", true, 301);
    exit;
}

/**
 * DEBUG MODE: Enable error reporting to find the 500 error cause
 */
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

// Custom error handler to catch everything
set_error_handler(function($errno, $errstr, $errfile, $errline) {
    if (!(error_reporting() & $errno)) return;
    die("PHP Error [$errno]: $errstr in $errfile on line $errline");
});

// Catch Fatal Errors
register_shutdown_function(function() {
    $error = error_get_last();
    if ($error !== NULL && in_array($error['type'], [E_ERROR, E_PARSE, E_CORE_ERROR, E_COMPILE_ERROR])) {
        echo "<h1>Fatal Error Caught</h1>";
        echo "<pre>";
        print_r($error);
        echo "</pre>";
    }
});

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
try {
    $app = require_once $paths['bootstrap'];
    $app->handleRequest(Request::capture());
} catch (\Throwable $e) {
    die("<h1>Application Exception</h1>" .
        "<p><strong>Message:</strong> " . $e->getMessage() . "</p>" .
        "<p><strong>File:</strong> " . $e->getFile() . " on line " . $e->getLine() . "</p>" .
        "<h3>Stack Trace:</h3><pre>" . $e->getTraceAsString() . "</pre>");
}
