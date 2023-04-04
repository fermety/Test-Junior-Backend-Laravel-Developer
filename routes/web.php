<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|


Route::view('/', 'blade');

Route::put('/purchases/{purchase}', [Purchasecontroller::class, 'update'])->name('purchases.update');

Route::prefix('admin')->middleware('auth','admin')->group(function (){
    Route::get('/profile', [ProfileControle::class, 'index'])->name('profile.index');
    Route::get('/profile/create', [CreateProfileControle::class, 'create'])->name('profile.create');
    Route::post('/profile', [StoreProfileControle::class, 'store'])->name('profile.store');

    //Route::Resourse('/profile', ProfileControle::class)->only(['index', 'create', 'store']);
});

Auth::routes();
*/
