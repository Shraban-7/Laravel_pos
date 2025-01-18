<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    if ($user = Auth::user()) {
        return view('welcome');
    }
    return redirect()->route('login');
})->name('login');


Route::match(['get', 'post'], '/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
