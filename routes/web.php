<?php

use App\Http\Controllers\CampaignsController;
use App\Http\Controllers\CampaignTaskController;
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
    return view('site.view');
})->name('home');

Route::get('/pricing', function () {
    return view('site.pricing');
})->name('pricing');

// Route::get('/phpinfo', function () {
//     return view('info');
// })->name('phpinfo');

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

Route::middleware(['auth:sanctum', 'verified'])->get('/templates', function () {
    return view('templates.index');
})->name('templates');

Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {
    Route::get('/campaigns/create', [CampaignsController::class, 'create'])->name('create_campaign');
    Route::get('/campaigns/{campaign}', [CampaignsController::class, 'show'])->name('view_campaign');
    Route::get('/campaigns', [CampaignsController::class, 'index'])->name('campaigns');

    Route::get('/campaigns/{campaign}/tasks/create', [CampaignTaskController::class, 'create'])->name('create_task');
    Route::get('/campaigns/{campaign}/tasks/{task}', [CampaignTaskController::class, 'show'])->name('view_task');
    Route::get('/campaigns/{campaign}/tasks', [CampaignTaskController::class, 'index'])->name('view_tasks');

    Route::post('/campaigns', [CampaignsController::class, 'store'])->name('store_campaign');
    Route::post('/campaigns/{campaign}/tasks', [CampaignTaskController::class, 'store'])->name('store_task');
});



Route::get('auth/facebook', [SocialController::class, 'facebookRedirect']);

Route::get('auth/facebook/callback', [SocialController::class, 'loginWithFacebook']);

Route::get('auth/instagram', [SocialController::class, 'instagramRedirect']);

Route::get('auth/instagram/callback', [SocialController::class, 'loginWithInstagram']);
