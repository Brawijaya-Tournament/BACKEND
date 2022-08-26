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
use App\Http\Controllers\admin\TeamController as AdminTeamController;

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

$this->urlAdmin = "adminbt";

Route::get('/', function () {
    return view('index');
})->name('dashboard');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth')->name('logout');

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/mobilelegends', [MobileLegendsController::class, 'create']);
Route::post('/mobilelegends', [MobileLegendsController::class, 'store']);

Route::get('/pubg-team', [PubgController::class, 'createTeam'])->middleware('auth');
Route::post('/pubg-team', [PubgController::class, 'storeTeam'])->middleware('auth');
Route::get('/pubg-solo', [PubgController::class, 'createSolo'])->middleware('auth');
Route::post('/pubg-solo', [PubgController::class, 'storeSolo'])->middleware('auth');

Route::get('/solo-vocal', [SoloVocalController::class, 'create'])->middleware('auth');
Route::post('/solo-vocal', [SoloVocalController::class, 'store'])->middleware('auth');

Route::get('/modern-dance', [ModernDanceController::class, 'create'])->middleware('auth');
Route::post('/modern-dance', [ModernDanceController::class, 'store'])->middleware('auth');

Route::get('/fotografi', [FotografiController::class, 'create'])->middleware('auth');
Route::post('/fotografi', [FotografiController::class, 'store'])->middleware('auth');

Route::get('/futsal', [FutsalController::class, 'create'])->middleware('auth');
Route::post('/futsal', [FutsalController::class, 'store'])->middleware('auth');

Route::get('/basket', [BasketController::class, 'create'])->middleware('auth');
Route::post('/basket', [BasketController::class, 'store'])->middleware('auth');

Route::get('/bulutangkis-ganda', [BulutangkisController::class, 'createGanda'])->middleware('auth');
Route::post('/bulutangkis-ganda', [BulutangkisController::class, 'storeGanda'])->middleware('auth');
Route::get('/bulutangkis-tunggal', [BulutangkisController::class, 'createTunggal'])->middleware('auth');
Route::post('/bulutangkis-tunggal', [BulutangkisController::class, 'storeTunggal'])->middleware('auth');

Route::prefix($this->urlAdmin)->group(function () {
    Route::prefix('team')->group(function () {
        Route::get('/', [AdminTeamController::class, 'index'])->name('admin.team');
        Route::get('/detail/{user:id}', [AdminTeamController::class, 'detail'])->name('admin.team.detail');
        Route::get('/edit/{user:id}', [AdminTeamController::class, 'edit'])->name('admin.team.edit');
        Route::put('/edit/{user:id}', [AdminTeamController::class, 'update'])->name('admin.team.store');
        Route::get('/delete/{user:id}', [AdminTeamController::class, 'delete'])->name('admin.team.delete');
        Route::delete('/delete/{user:id}', [AdminTeamController::class, 'destroy'])->name('admin.team.destroy');
        Route::get('/getuserdata', [AdminTeamController::class, 'datatables'])->name('admin.team.datatables');
    });
});