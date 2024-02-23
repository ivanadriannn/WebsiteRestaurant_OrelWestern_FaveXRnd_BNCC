<?php

use App\Http\Controllers\FoodController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Route::get('/show-food', [FoodController::class, 'indexUser']) -> name('indexUser');
// Route::get('/foods/search', [FoodController::class, 'search'])->name('search');
// Route::get('/show-food', [FoodController::class, 'productList'])->name('products.list');
// Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
// Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
// Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
// Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
// Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');
Route::middleware('isAdmin')->group(function(){
    Route::get('/list-food', [FoodController::class, 'index']) -> name('index');
    Route::get('/create-food', [FoodController::class, 'create']) -> name('create');
    Route::post('/store-food', [FoodController::class, 'store']) -> name('store');
    Route::get('/edit-food/{id}', [FoodController::class, 'edit']) -> name('edit');
    Route::patch('/update-food/{id}', [FoodController::class, 'update']);
    Route::delete('/delete-food/{id}', [FoodController::class, 'delete']);
    Route::get('/create-category', [CategoryController::class, 'create'])-> name('create');
    Route::post('/store-category', [CategoryController::class, 'store'])-> name('store');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
