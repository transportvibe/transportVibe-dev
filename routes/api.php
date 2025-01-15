<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::post('/register-info', [RegisterController::class, 'register']);
Route::get('/clear-config', function() {
    Artisan::call('config:clear');
    Artisan::call('route:clear');
     return response()->json(['message' => 'Config and route cleared']);
});



Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login'])->name('signin');
Route::middleware('auth:api')->post('/logout', [AuthController::class, 'logout']);