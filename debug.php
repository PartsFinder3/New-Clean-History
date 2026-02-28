<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "<h1>System Compatibility Check</h1>";

echo "PHP Version: " . PHP_VERSION . "<br>";
if (version_compare(PHP_VERSION, '8.2.0', '<')) {
    echo "❌ PHP version is too old. Laravel needs >= 8.2<br>";
} else {
    echo "✅ PHP version is OK.<br>";
}

$paths = [
    'vendor/autoload.php',
    'bootstrap/app.php',
    'storage',
    'storage/framework/views',
    '.env'
];

foreach ($paths as $path) {
    $fullPath = __DIR__ . '/' . $path;
    if (file_exists($fullPath)) {
        $perms = substr(sprintf('%o', fileperms($fullPath)), -4);
        echo "✅ Found: $path (Permissions: $perms) " . (is_writable($fullPath) ? "[Writable]" : "[NOT Writable]") . "<br>";
    } else {
        echo "❌ NOT Found: $path<br>";
    }
}

echo "<h2>Database Connection Test</h2>";
try {
    $env = file_get_contents(__DIR__ . '/.env');
    preg_match('/DB_HOST=(.*)/', $env, $host);
    preg_match('/DB_DATABASE=(.*)/', $env, $db);
    preg_match('/DB_USERNAME=(.*)/', $env, $user);
    preg_match('/DB_PASSWORD=(.*)/', $env, $pass);

    $h = trim($host[1] ?? '');
    $d = trim($db[1] ?? '');
    $u = trim($user[1] ?? '');
    $p = trim($pass[1] ?? '');

    echo "Testing Connection to $d as $u on $h...<br>";
    $pdo = new PDO("mysql:host=$h;dbname=$d", $u, $p);
    echo "✅ Database connection successful!<br>";
} catch (Exception $e) {
    echo "❌ Database connection failed: " . $e->getMessage() . "<br>";
}
