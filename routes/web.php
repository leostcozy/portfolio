<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\FollowController;//追加
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // お店関連
    Route::get('/list', [ShopController::class, 'getShopslist'])->name('shops.list'); //追加
    Route::get('/shops/create', [ShopController::class, 'create']); //追加
    Route::get('/shops/{shop}', [ShopController::class ,'show'])->name('shops.show'); //追加
    // フォロー機能
    Route::post('/user/{user}/follow', [FollowController::class, 'store'])->name('user.follow');
    Route::delete('/user/{user}/follow', [FollowController::class, 'destroy'])->name('user.unfollow');
});

require __DIR__.'/auth.php';
