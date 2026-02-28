<?php

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Maintenance mode check
if (file_exists($maintenance = __DIR__.'/../car_core/storage/framework/maintenance.php')) {
    require $maintenance;
}

// Autoload vendor dependencies
require __DIR__.'/../car_core/vendor/autoload.php';

// Bootstrap the Laravel application
$app = require_once __DIR__.'/../car_core/bootstrap/app.php';

// Handle the incoming request
$app->handleRequest(Request::capture());
