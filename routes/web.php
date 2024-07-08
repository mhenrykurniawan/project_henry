<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\Soal1Controller;
use App\Http\Controllers\Soal2Controller;
use App\Http\Controllers\Soal3Controller;
use App\Http\Controllers\Soal4Controller;
use App\Http\Controllers\Soal5Controller;
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

Route::get('/', function () {
    return view('welcome');
});


Route::middleware(['guest'])->group(function () {
    Route::get('/soal1', [Soal1Controller::class, 'index']);
    Route::get('/soal2', [Soal2Controller::class, 'index']);
    Route::get('/soal3', [Soal3Controller::class, 'index']);
    Route::get('/soal4', [Soal4Controller::class, 'index']);
    Route::get('/soal5', [Soal5Controller::class, 'index']);
    
});
Route::middleware(['guest'])->group(function () {
    Route::get('/product', [ProductController::class, 'index']);

});


