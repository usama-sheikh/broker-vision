<?php

use Illuminate\Support\Facades\Route;

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
})->middleware('check.user');

/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');*/

Route::get('admin/login', function () {
    return view('admin.Authentication.login');
})->name('admin.login');
Route::group(['middleware' => ['admin'], 'prefix' => 'admin'], function () {
    Route::get('/', [\App\Http\Controllers\Admin\Dashboard\DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/users', [\App\Http\Controllers\Admin\User\UserController::class, 'index'])->name('admin.users.index');
    Route::delete('/user/destroy/{id}', [\App\Http\Controllers\Admin\User\UserController::class, 'destroy'])->name('admin.users.destroy');
    Route::get('/artist', [\App\Http\Controllers\Admin\Artist\ArtistController::class, 'index'])->name('admin.artist.index');
    Route::post('/artist/add', [\App\Http\Controllers\Admin\Artist\ArtistController::class, 'addNewArtist'])->name('admin.add.new.artist');
    Route::post('/artist/tracking/status/update', [\App\Http\Controllers\Admin\Artist\ArtistController::class, 'trackingStatus'])->name('admin.artist.tracking.status');
    Route::get('/top/picks', [\App\Http\Controllers\Admin\TopPicks\TopPicksController::class, 'index'])->name('admin.top.picks.index');
    Route::get('/settings', [\App\Http\Controllers\Admin\Settings\SettingsController::class, 'index'])->name('admin.settings.index');
    Route::post('/settings/update/profile', [\App\Http\Controllers\Admin\Settings\SettingsController::class, 'updateProfile'])->name('admin.settings.update.profile');
    Route::post('/settings/change/password', [\App\Http\Controllers\Admin\Settings\SettingsController::class, 'changePassword'])->name('admin.settings.change.password');
    Route::post('/settings/new/genre', [\App\Http\Controllers\Admin\Settings\SettingsController::class, 'newGenre'])->name('admin.settings.new.genre');
});

Route::group(['middleware' => ['user', 'verified'], 'prefix' => 'user'], function () {
    Route::get('/', [\App\Http\Controllers\User\Dashboard\DashboardController::class, 'index'])->name('user.dashboard');
    Route::get('/tracking', [\App\Http\Controllers\User\Tracking\TrackingController::class, 'index'])->name('user.tracking.index');
    Route::post('/tracking/process', [\App\Http\Controllers\User\Tracking\TrackingController::class, 'trackingProcess'])->name('user.tracking.process');
    Route::get('/tracking/artist/{id}', [\App\Http\Controllers\User\Tracking\TrackingController::class, 'trackingArtist'])->name('user.tracking.artist.index');
    Route::get('/top/picks', [\App\Http\Controllers\User\TopPicks\TopPicksController::class, 'index'])->name('user.top.picks.index');
    Route::get('/settings', [\App\Http\Controllers\User\Settings\SettingsController::class, 'index'])->name('user.settings.index');
    Route::post('/settings/update/profile', [\App\Http\Controllers\User\Settings\SettingsController::class, 'updateProfile'])->name('user.settings.update.profile');
    Route::post('/settings/change/password', [\App\Http\Controllers\User\Settings\SettingsController::class, 'changePassword'])->name('user.settings.change.password');

});

require __DIR__ . '/auth.php';
