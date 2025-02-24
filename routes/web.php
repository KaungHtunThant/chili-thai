<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'index']);

Route::get('menu', [PageController::class, 'menu']);

Route::get('about', [PageController::class, 'about']);

Route::get('reservation', [PageController::class, 'reservation']);

Route::get('catering', [PageController::class, 'catering']);

Route::post('reservation', [ReservationController::class, 'store']);

Route::post('subscription', [SubscriptionController::class, 'store']);

Route::get('login', function () {
    return view('login');
});

Route::post('login', [AuthController::class, 'login']);

Route::prefix('admin')->group(function () {
    Route::resource('categories', CategoryController::class);
    Route::resource('items', ItemController::class);
});
