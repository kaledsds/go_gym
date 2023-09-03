<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::get('/login', function () {
    return view('login', 'layouts.app');
});

Route::get('/register', function () {
    return view('register', 'layouts.app');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/clients', App\Http\Controllers\ClientController::class);
Route::resource('/coachs', App\Http\Controllers\CoachController::class);
Route::resource('/sports', App\Http\Controllers\SportController::class);
Route::resource('/machines', App\Http\Controllers\MachineController::class);
Route::resource('/produits', App\Http\Controllers\ProduitController::class);
