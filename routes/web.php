<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\LowonganController;
use App\Http\Controllers\PengajuanMagangController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\TempatMagangController;
use App\Http\Controllers\UserController;
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
    return view('home', [
        "title" => "Home",
        "url" => url('/assets'),
    ]);
});

Route::get('/portofolio', [PortofolioController::class, 'viewAll']);

Route::get('/portofolio/schedule', function () {
    return view('portofolio.schedule', [
        "title" => "Schedule",
        "url" => url('/assets'),
    ]);
});

//Register Peserta Routes
Route::get('/register', [UserController::class, 'register']);
Route::post('/register', [UserController::class, 'registerStore']);

//Login Routes
Route::get('/auth/login', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/auth/login', [AuthController::class, 'authenticate']);
Route::post('/auth/logout', [AuthController::class, 'logout'])->middleware('auth');
Route::get('/auth/logout', [AuthController::class, 'logout'])->middleware('auth');

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['check_login:admin']], function () {
        //Master Admin Routes
        Route::get('/dashboard/masterAdmin', [UserController::class, 'index']);
        Route::get('/dashboard/masterAdmin/create', [UserController::class, 'create']);
        Route::post('/dashboard/masterAdmin', [UserController::class, 'store']);
        Route::get('/dashboard/masterAdmin/edit/{id}', [UserController::class, 'edit']);
        Route::post('/dashboard/masterAdmin/{id}', [UserController::class, 'update']);
        Route::get('/dashboard/masterAdmin/delete/{id}', [UserController::class, 'destroy']);

        //Mater Portofolio Routes
        Route::get('/dashboard/masterPortofolio', [PortofolioController::class, 'index']);
        Route::get('/dashboard/masterPortofolio/create', [PortofolioController::class, 'create']);
        Route::post('/dashboard/masterPortofolio', [PortofolioController::class, 'store']);
        Route::get('/dashboard/masterPortofolio/edit/{id}', [PortofolioController::class, 'edit']);
        Route::post('/dashboard/masterPortofolio/{id}', [PortofolioController::class, 'update']);
        Route::get('/dashboard/masterPortofolio/delete/{id}', [PortofolioController::class, 'destroy']);

        //Master Kelas Rotes
        Route::get('/dashboard/masterKelas', [KelasController::class, 'index']);
        Route::get('/dashboard/masterKelas/create', [KelasController::class, 'create']);
        Route::post('/dashboard/masterKelas', [KelasController::class, 'store']);
        Route::get('/dashboard/masterKelas/edit/{id}', [KelasController::class, 'edit']);
        Route::post('/dashboard/masterKelas/{id}', [KelasController::class, 'update']);
        Route::get('/dashboard/masterKelas/delete/{id}', [KelasController::class, 'destroy']);

        //Master Jadwal Kelas Rotes
        Route::get('/dashboard/masterJadwal', [KelasController::class, 'indexJadwal']);
        Route::get('/dashboard/masterJadwal/create', [KelasController::class, 'createJadwal']);
        Route::post('/dashboard/masterJadwal', [KelasController::class, 'storeJadwal']);
        Route::get('/dashboard/masterJadwal/edit/{id}', [KelasController::class, 'editJadwal']);
        Route::post('/dashboard/masterJadwal/{id}', [KelasController::class, 'updateJadwal']);
        Route::get('/dashboard/masterJadwal/delete/{id}', [KelasController::class, 'destroyJadwal']);

        //Mater Magang Routes
        Route::get('/dashboard/masterTempatMagang', [TempatMagangController::class, 'index']);
        Route::get('/dashboard/masterTempatMagang/create', [TempatMagangController::class, 'create']);
        Route::post('/dashboard/masterTempatMagang', [TempatMagangController::class, 'store']);
        Route::get('/dashboard/masterTempatMagang/edit/{tempatMagang}', [TempatMagangController::class, 'edit']);
        Route::post('/dashboard/masterTempatMagang/{tempatMagang}', [TempatMagangController::class, 'update']);
        Route::get('/dashboard/masterTempatMagang/delete/{tempatMagang}', [TempatMagangController::class, 'destroy']);

        //Mater Lowongan Routes
        Route::get('/dashboard/masterLowongan/{tempatMagang}', [LowonganController::class, 'index']);
        Route::get('/dashboard/masterLowongan/{tempatMagang}/create', [LowonganController::class, 'create']);
        Route::post('/dashboard/masterLowongan/', [LowonganController::class, 'store']);

        Route::get('/dashboard/masterLowongan/edit/{lowongan}', [LowonganController::class, 'edit']);

        Route::post('/dashboard/masterLowongan/{lowongan}', [LowonganController::class, 'update']);
        Route::get('/dashboard/masterLowongan/delete/{lowongan}', [LowonganController::class, 'destroy']);
        Route::get('/dashboard/masterLowongan/pengajuanMagang/{lowongan}', [LowonganController::class, 'pengajuanMagang']);

        Route::get('/dashboard/pengajuanMagang/', [PengajuanMagangController::class, 'index']);
        Route::get('/dashboard/pengajuanMagang/{pengajuanMagang}', [PengajuanMagangController::class, 'show']);
        Route::post('/dashboard/pengajuanMagang/ubahStatus/{pengajuanMagang}', [PengajuanMagangController::class, 'ubahStatus']);
    });

    Route::group(['middleware' => ['check_login:peserta']], function () {
        //Pesanan Kelas Routes
        Route::get('/peserta/daftar_magang', [TempatMagangController::class, 'tempat_magang']);
        Route::get('/peserta/lowongan/history', [LowonganController::class, 'history_pengajuan_lowongan']);
        Route::get('/peserta/lowongan/{tempatMagang}', [LowonganController::class, 'lowongan']);
        Route::post('/peserta/lowongan/pengajuan', [LowonganController::class, 'pengajuan_lowongan']);
    });
});