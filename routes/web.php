<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AuthController;


Route::get('/', function () {
    if ($user = Auth::user()) {
        return view('welcome');
    }
    return redirect()->route('login');
})->name('login');

Route::match(['get', 'post'], '/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');
