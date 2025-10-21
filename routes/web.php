<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Models\Product;

Route::get('/', function () {
    $products = Product::all();
    return view('products.homepg', compact('products'));
})->name('home');

Route::middleware('auth')->group(function () 
{
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/products/home', [ProductController::class, 'index'])->name('products.homepg');
// Use lowercase plural resource name so generated route names match views/controllers
Route::resource('products', ProductController::class);
require __DIR__.'/auth.php';
