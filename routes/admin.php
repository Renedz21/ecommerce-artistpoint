<?php

use App\Http\Livewire\Admin\CreateProduct;
use App\Http\Livewire\Admin\EditProduct;
use App\Http\Livewire\Admin\ShowProducts;
use Illuminate\Support\Facades\Route;


Route::get('/', ShowProducts::class)->name('show.products');

Route::get('products/create', CreateProduct::class)->name('admin.crear.producto');

Route::get('products/{product}/edit', EditProduct::class)->name('admin.products.edit');
