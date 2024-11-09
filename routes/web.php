<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\JobsController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\UpdatePasswordController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes(['verify' => true]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['as' => ''], function () {
    Route::get('/', [WebController::class, 'index'])->name('homepage');
    Route::get('/about', [WebController::class, 'about'])->name('about');
    Route::get('/services', [WebController::class, 'services'])->name('services');
    Route::get('/contact', [WebController::class, 'contact'])->name('contact');
    Route::get('/coming-soon', [WebController::class, 'comingsoon'])->name('comingsoon');
    Route::get('/error-page', [WebController::class, 'errorpage'])->name('errorpage');
    // Terms
    Route::get('privacy', [WebController::class, 'privacy'])->name('privacy');
    Route::get('cookie', [WebController::class, 'cookie'])->name('cookie');
    Route::get('refund', [WebController::class, 'refund'])->name('refund');
});
// Admin
Route::group(['as' => 'admin.', 'prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('settings', [SettingsController::class, 'index'])->name('settings');
    Route::resource('users', UsersController::class);
    Route::get('users/update-password/{user}', [UpdatePasswordController::class, 'request'])->name('users.update-password-request');
    Route::post('users/update-password/{user}', [UpdatePasswordController::class, 'change'])->name('users.update-password');

    // Careers
    Route::get('careers/create', [JobsController::class, 'create'])->name('careers.create');
    Route::post('careers/create', [JobsController::class, 'upload'])->name('careers.upload');
    Route::get('careers', [JobsController::class, 'index'])->name('careers.index');
    Route::get('careers/{id}', [JobsController::class, 'show'])->name('careers.show');
    Route::delete('careers/{id}', [JobsController::class, 'delete'])->name('careers.delete');
});
