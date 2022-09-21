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
use App\Http\Controllers\admin\KlasemenController as AdminKlasemenController;
use App\Http\Controllers\admin\PengumumanController as AdminPengumumanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\KlasemenController;

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
})->name('dashboard')->middleware('guest');

Route::get('/klasemen', [KlasemenController::class, 'index'])->middleware('guest');
Route::get('/faq', [FaqController::class, 'index'])->middleware('guest');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth')->name('logout');

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

Route::get('/mobilelegends', [MobileLegendsController::class, 'index']);
Route::get('/mobilelegends/register', [MobileLegendsController::class, 'create']);
Route::post('/mobilelegends/register', [MobileLegendsController::class, 'store']);

Route::get('/pubg', [PubgController::class, 'index']);
Route::get('/pubg-team/register', [PubgController::class, 'createTeam'])->middleware('auth');
Route::post('/pubg-team/register', [PubgController::class, 'storeTeam'])->middleware('auth');
Route::get('/pubg-solo/register', [PubgController::class, 'createSolo'])->middleware('auth');
Route::post('/pubg-solo/register', [PubgController::class, 'storeSolo'])->middleware('auth');

Route::get('/solo-vocal', [SoloVocalController::class, 'index']);
Route::get('/solo-vocal/register', [SoloVocalController::class, 'create'])->middleware('auth');
Route::post('/solo-vocal/register', [SoloVocalController::class, 'store'])->middleware('auth');

Route::get('/modern-dance', [ModernDanceController::class, 'index']);
Route::get('/modern-dance/register', [ModernDanceController::class, 'create'])->middleware('auth');
Route::post('/modern-dance/register', [ModernDanceController::class, 'store'])->middleware('auth');

Route::get('/fotografi', [FotografiController::class, 'index']);
Route::get('/fotografi/register', [FotografiController::class, 'create'])->middleware('auth');
Route::post('/fotografi/register', [FotografiController::class, 'store'])->middleware('auth');

Route::get('/futsal', [FutsalController::class, 'index']);
Route::get('/futsal/register', [FutsalController::class, 'create'])->middleware('auth');
Route::post('/futsal/register', [FutsalController::class, 'store'])->middleware('auth');

Route::get('/basket', [BasketController::class, 'index']);
Route::get('/basket/register', [BasketController::class, 'create'])->middleware('auth');
Route::post('/basket/register', [BasketController::class, 'store'])->middleware('auth');

Route::get('/bulutangkis', [BulutangkisController::class, 'index']);
Route::get('/bulutangkis-ganda/register', [BulutangkisController::class, 'createGanda'])->middleware('auth');
Route::post('/bulutangkis-ganda/register', [BulutangkisController::class, 'storeGanda'])->middleware('auth');
Route::get('/bulutangkis-tunggal/register', [BulutangkisController::class, 'createTunggal'])->middleware('auth');
Route::post('/bulutangkis-tunggal/register', [BulutangkisController::class, 'storeTunggal'])->middleware('auth');
Route::get('/bulutangkis-tunggal/formulir', [BulutangkisController::class, 'formulirTunggal']);
Route::post('/bulutangkis-tunggal/formulir', [BulutangkisController::class, 'storeFormulirTunggal']);

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
    Route::prefix('klasemen')->group(function () {
        Route::get('/', [AdminKlasemenController::class, 'index'])->name('admin.klasemen');
        Route::post('/create', [AdminKlasemenController::class, 'create'])->name('admin.klasemen.create');
        Route::get('/edit/{klasemen:id', [AdminKlasemenController::class, 'edit'])->name('admin.klasemen.edit');
        Route::put('/edit/{klasemen:id)', [AdminKlasemenController::class, 'update'])->name('admin.klasemen.store');
        Route::get('/delete/{klasemen:id', [AdminKlasemenController::class, 'delete'])->name('admin.klasemen.delete');
    });
    Route::prefix('pengumuman')->group(function () {
        Route::get('/', [AdminPengumumanController::class, 'index'])->name('admin.pengumuman');
        Route::get('/create', [AdminPengumumanController::class, 'create'])->name('admin.pengumuman.create');
        Route::post('/create', [AdminPengumumanController::class, 'post'])->name('admin.pengumuman.post');
        Route::get('/edit/{pengumuman:id', [AdminPengumumanController::class, 'edit'])->name('admin.pengumuman.edit');
        Route::post('/update/{pengumuman:id)', [AdminPengumumanController::class, 'update'])->name('admin.pengumuman.store');
        Route::get('/delete/{pengumumans:id', [AdminPengumumanController::class, 'delete'])->name('admin.pengumuman.delete');
    });
});