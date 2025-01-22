<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\CategoryController;

Route::middleware('guest')->as('admin.')->group(function(){
    Route::prefix('categories')->as('categories.')->group(function () {
        Route::get('/', [CategoryController::class, 'index'])->name('index');
        Route::post('/store', [CategoryController::class, 'store'])->name('store');
        Route::post('{category}/update', [CategoryController::class, 'update'])->name('update');
        Route::delete('/{category}/delete', [CategoryController::class, 'destroy'])->name('delete');
    });

});
