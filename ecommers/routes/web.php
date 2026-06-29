<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    if (Auth::check()) return redirect('/product');
    return view('login');
})->name('login');

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/login');
});


Route::get('/products', [ProductController::class, 'index'])->name('products.index')->middleware('auth');
Route::get('/products/login', [SiteController::class, 'auth'])->name('site.auth');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create')->middleware('auth');
Route::post('/products/create', [ProductController::class, 'store'])->name('products.store')->middleware('auth');
Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit')->middleware('auth');
Route::put('/products/{product}/edit', [ProductController::class, 'update'])->name('products.update')->middleware('auth');
Route::delete('/products/{product}/delete', [ProductController::class, 'destroy'])->name('products.destroy')->middleware('auth');
