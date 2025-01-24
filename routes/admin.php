<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\SupplierController;

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware('auth')->name('dashboard');

Route::middleware('auth')->as('admin.')->group(function(){
    Route::prefix('categories')->as('categories.')->group(function () {
        Route::get('/', [CategoryController::class, 'index'])->name('index');
        Route::post('/store', [CategoryController::class, 'store'])->name('store');
        Route::post('{category}/update', [CategoryController::class, 'update'])->name('update');
        Route::delete('/{category}/delete', [CategoryController::class, 'destroy'])->name('delete');
    });

    Route::prefix('suppliers')->as('suppliers.')->group(function () {
        Route::get('/', [SupplierController::class, 'index'])->name('index');
        Route::post('/store', [SupplierController::class, 'store'])->name('store');
        Route::post('{supplier}/update', [SupplierController::class, 'update'])->name('update');
        Route::delete('/{supplier}/delete', [SupplierController::class, 'destroy'])->name('delete');
    });

});
