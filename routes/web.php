<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MasterController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::middleware(['auth', 'role:superadmin|user'])->group(function() {

    Route::get('', [IndexController::class, 'index'])->name('index');

    Route::prefix('orders')->group(function() {
        Route::get('', [OrderController::class, 'index'])->name('order.index');
        Route::get('create', [OrderController::class, 'create'])->name('order.create');
        Route::post('store', [OrderController::class, 'store'])->name('order.store');
        Route::get('edit/{uuid}', [OrderController::class, 'edit'])->name('order.edit');
        Route::post('update/{uuid}', [OrderController::class, 'update'])->name('order.update');
        Route::delete('delete/{uuid}', [OrderController::class, 'destroy'])->name('order.delete');

        Route::get('invoice/{uuid}', [OrderController::class, 'invoice'])->name('order.invoice');
    });

    Route::get('master/companies', [MasterController::class, 'companies'])->name('master.company');
    Route::get('master/categories', [MasterController::class, 'categories'])->name('master.category');
    Route::get('master/customers', [MasterController::class, 'customers'])->name('master.customer');
    Route::get('master/products', [MasterController::class, 'products'])->name('master.product');

    Route::prefix('profile')->group(function() {
        Route::get('', [ProfileController::class, 'index'])->name('profile.index');
        Route::post('update', [ProfileController::class, 'update'])->name('profile.update');
    });

});