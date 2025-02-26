<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'index'])->name('home');

Route::get('menu', [PageController::class, 'menu'])->name('menu');

Route::get('about', [PageController::class, 'about'])->name('about');

Route::get('reservation', [PageController::class, 'reservation'])->name('reservation.form');

Route::get('catering', [PageController::class, 'catering'])->name('catering.form');

Route::post('reservation', [ReservationController::class, 'store'])->name('reservation.store');

Route::post('subscription', [SubscriptionController::class, 'store'])->name('subscription.store');

Route::get('login', function () {
    return view('login');
})->name('login.form');

Route::post('login', [AuthController::class, 'login'])->name('login.submit');

Route::prefix('admin')->group(function () {
    Route::resource('categories', CategoryController::class);
    Route::resource('items', ItemController::class);
});
