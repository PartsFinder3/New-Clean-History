<?php

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

define('LARAVEL_START', microtime(true));

// Autoload Laravel dependencies
require __DIR__.'/vendor/autoload.php';

// Bootstrap Laravel
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

echo "<h1>Admin Account Direct Reset</h1>";

try {
    $email = 'mateenali1122@gmail.com';
    $newPassword = 'Admin@@@786';
    $hashedPassword = Hash::make($newPassword);

    // Check if user exists
    $user = DB::table('users')->where('email', $email)->first();

    if ($user) {
        // Update existing user
        DB::table('users')->where('email', $email)->update([
            'password' => $hashedPassword,
            'updated_at' => now()
        ]);
        echo "✅ Existing user found and password updated for <b>$email</b>.<br>";
    } else {
        // Create new admin user if not found
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => $email,
            'password' => $hashedPassword,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        echo "✅ New admin user created for <b>$email</b>.<br>";
    }

    echo "<br><b>Login Credentials:</b><br>";
    echo "Email: $email<br>";
    echo "Password: $newPassword<br>";
    echo "<br>🚀 Ab aap <a href='/login'>Login Page</a> par ja kar koshish karein.";
    echo "<br><br><b style='color:red;'>SECURITY WARNING:</b> Login karne ke baad is file (reset_admin.php) ko server se delete kar dein.";

} catch (\Exception $e) {
    echo "❌ Error occurrred: " . $e->getMessage();
}
