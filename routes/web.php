<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\JobsController;
use App\Http\Controllers\Admin\OrdersController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\API\V1\payments\mpesa\MpesaAPIController;
use App\Http\Controllers\Client\ClientOrdersController;
use App\Http\Controllers\Client\DashboardController as ClientDashboardController;
use App\Http\Controllers\Client\ProfileController;
use App\Http\Controllers\LandingImagesController;
use App\Http\Controllers\Store\CartController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UpdatePasswordController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('', [StoreController::class, 'index'])->name('homepage');
Route::get('cart', [CartController::class, 'cart'])->name('cart');
Route::get('privacy', [StoreController::class, 'privacy'])->name('privacy');
Route::get('cookie', [StoreController::class, 'cookie'])->name('cookie');
Route::get('refund', [StoreController::class, 'refund'])->name('refund');

//Hotel Pages
Route::get('/about', [WebController::class, 'about'])->name('web.about');
Route::get('/services', [WebController::class, 'services'])->name('web.services');
Route::get('/spa', [WebController::class, 'spa'])->name('web.spa');
Route::get('/facilities', [WebController::class, 'facilities'])->name('web.facilities');
Route::get('/gallery', [WebController::class, 'gallery'])->name('web.gallery');
Route::get('/team', [WebController::class, 'team'])->name('web.team');
Route::get('/pricing', [WebController::class, 'pricing'])->name('web.pricing');
Route::get('/careers', [WebController::class, 'careers'])->name('web.careers');
Route::get('careers/{id}', [WebController::class, 'career'])->name('web.career');
Route::get('/faq', [WebController::class, 'faq'])->name('web.faq');
Route::get('/contact', [WebController::class, 'contact'])->name('web.contact');
Route::get('/coming-soon', [WebController::class, 'comingsoon'])->name('web.comingsoon');
Route::get('/error-page', [WebController::class, 'errorpage'])->name('web.errorpage');
Route::get('/news', [WebController::class, 'news'])->name('web.news');
Route::get('/post', [WebController::class, 'post'])->name('web.post');

Route::get('validate', [MpesaAPIController::class, 'mpesaValidate'])->name('validate');
Route::post('stk', [MpesaAPIController::class, 'stkPush'])->name('stk');
Route::get('test', [TestController::class, 'test'])->name('test');

Auth::routes(['verify' => true]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Client
Route::group(['as' => 'client.', 'middleware' => ['auth']], function () {
    Route::get('/dashboard', [ClientDashboardController::class, 'index'])->name('dashboard');
    Route::get('checkout', [CartController::class, 'checkout'])->name('checkout');
    Route::get('checkout/payments/order/{id}', [CartController::class, 'pay'])->name('payment');
    Route::get('orders', [ClientOrdersController::class, 'index'])->name('orders.index');
    Route::get('orders/{id}', [ClientOrdersController::class, 'view'])->name('orders.view');
    Route::get('profile', [ProfileController::class, 'index'])->name('profile');
});

// Admin
Route::group(['as' => 'admin.', 'prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('settings', [SettingsController::class, 'index'])->name('settings');
    Route::get('orders', [OrdersController::class, 'index'])->name('orders.index');
    Route::get('orders/{id}', [OrdersController::class, 'show'])->name('orders.show');
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

Route::group(['as' => 'web.'], function () {
    Route::get('/', [WebController::class, 'index'])->name('homepage');
});
