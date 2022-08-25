<?php

use App\Http\Controllers\BasketController;
use App\Http\Controllers\BulutangkisController;
use App\Http\Controllers\FotografiController;
use App\Http\Controllers\FutsalController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MobileLegendsController;
use App\Http\Controllers\ModernDanceController;
use App\Http\Controllers\PubgController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SoloVocalController;

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
    return view('index')->name('dashboard');
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');

Route::get('/register', [RegisterController::class, 'index'])->middleware('auth');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/mobilelegends', [MobileLegendsController::class, 'create'])->middleware('auth');
Route::post('/mobilelegends', [MobileLegendsController::class, 'store']);

Route::get('/pubg', [PubgController::class, 'create'])->middleware('auth');
Route::post('/pubg', [PubgController::class, 'store']);

Route::get('/solo-vocal', [SoloVocalController::class, 'create'])->middleware('auth');
Route::post('/solo-vocal', [SoloVocalController::class, 'store']);

Route::get('/modern-dance', [ModernDanceController::class, 'create'])->middleware('auth');
Route::post('/modern-dance', [ModernDanceController::class, 'store']);

Route::get('/fotografi', [FotografiController::class, 'create'])->middleware('auth');
Route::post('/fotografi', [FotografiController::class, 'store']);

Route::get('/futsal', [FutsalController::class, 'create'])->middleware('auth');
Route::post('/futsal', [FutsalController::class, 'store']);

Route::get('/basket', [BasketController::class, 'create'])->middleware('auth');
Route::post('/basket', [BasketController::class, 'store']);

Route::get('/bulutangkis', [BulutangkisController::class, 'create'])->middleware('auth');
Route::post('/bulutangkis', [BulutangkisController::class, 'store']);