<?php
require __DIR__ . '/vendor/autoload.php';
$app = require_once __DIR__ . '/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use App\Models\Car;

$count = 0;
Car::all()->each(function($car) use (&$count) {
    if ($car->slug !== strtolower($car->slug)) {
        $car->slug = strtolower($car->slug);
        $car->save();
        $count++;
    }
});

echo "Updated $count car slugs to lowercase.\n";
