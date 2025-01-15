<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


// Route::get('/check-userinfo', function () {
//     if (class_exists(UserInfo::class)) {
//         return 'UserInfo class exists.';
//     } else {
//         return 'UserInfo class does not exist.';
//     }
// });
Route::get('/clear-config', function() {
    Artisan::call('config:clear');
    Artisan::call('route:clear');
    return 'Config and route cleared';
});

Route::get('/signin', function () {
    return view('auth.email-login');
})->name('login');
Route::get('/login', function () {
    return view('auth.login');
})->name('login-page');

Route::get('/', function () {
    return view('auth.register');
})->name('register');

Route::get('/register', [RegisterController::class, 'register']);
Route::post('/login-function', [LoginController::class, 'login']);

//google login
Route::get('/auth/google', function () {
    return Socialite::driver('google')->redirect();
})->name('google.login');

Route::get('/auth/google/callback', function () {
        $googleUser = Socialite::driver('google')->stateless()->user();

            // Create a new user
            $newUser = User::UpdateOrCreate([
                'name' => $googleUser->getName(),
                'email' => $googleUser->getEmail(),
                'google_id' => $googleUser->getId(),
                'password' => bcrypt('googlelogin'), // Set a default password
            ]);

            Auth::login($newUser);
        return redirect()->route('dashboard');
});

Route::get('/dashboard', function(){
    return view('users.dashboard');
})->name('dashboard');
Route::get('/auth/facebook', [LoginController::class, 'redirectToFacebook'])->name('facebook-login');
Route::get('/auth/facebook/callback', [LoginController::class, 'handleFacebookCallback'])->name('auth.facebook.callback');



Route::get('auth/apple', [LoginController::class, 'redirectToApple'])->name('apple.login');
Route::get('auth/apple/callback', [LoginController::class, 'handleAppleCallback']);

