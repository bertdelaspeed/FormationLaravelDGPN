<?php

use App\Http\Controllers\PolicierController;
use App\Http\Controllers\ServiceController;
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

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', function () {
        return view('layouts.app');
    });
    
    Route::resource('CheminPolicier', PolicierController::class);
    Route::resource('CheminService', ServiceController::class);
    
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

