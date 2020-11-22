<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SocialController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pricing', function () {
    return view('site.pricing');
})->name('pricing');;



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/approvals', function () {
    return view('client.approvals');
})->name('approvals');

Route::middleware(['auth:sanctum', 'verified'])->get('/schedule', function () {
    return view('client.schedule');
})->name('schedule');

Route::middleware(['auth:sanctum', 'verified'])->get('/requests', function () {
    return view('client.order.show');
})->name('requests');

Route::get('auth/facebook', [SocialController::class, 'facebookRedirect']);

Route::get('auth/facebook/callback', [SocialController::class, 'loginWithFacebook']);

Route::get('auth/instagram', [SocialController::class, 'instagramRedirect']);

Route::get('auth/instagram/callback', [SocialController::class, 'loginWithInstagram']);
