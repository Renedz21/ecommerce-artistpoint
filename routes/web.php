<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\SearchController;
use App\Http\Livewire\CreateOrder;
use App\Http\Livewire\PaymentOrder;
use App\Http\Livewire\ShoppingCart;
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

Route::get('/', WelcomeController::class)->name('inicio');

Route::get('search', SearchController::class)->name('search');

Route::get('categories/{category}', [CategoryController::class, 'show'])->name('categorias-mostrar');

Route::get('products/{product}', [ProductsController::class, 'show'])->name('products.details');

Route::get('shopping-cart', ShoppingCart::class)->name('carrito-compras');

Route::middleware(['auth'])->group(function () {

    Route::get('orders-create', CreateOrder::class)->name('orders.create');

    Route::get('orders/{order}', [OrderController::class, 'show'])->name('orders.show');

    Route::get('orders/{order}/payment', PaymentOrder::class)->name('orders.payment');
});
