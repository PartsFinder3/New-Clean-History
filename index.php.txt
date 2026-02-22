<?php

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Maintenance mode
if (file_exists($maintenance = __DIR__.'/../car_core/storage/framework/maintenance.php')) {
    require $maintenance;
}

// Autoload
require __DIR__.'/../car_core/vendor/autoload.php';

// Bootstrap Laravel
$app = require_once __DIR__.'/../car_core/bootstrap/app.php';

$app->handleRequest(Request::capture());
