<?php

use App\Http\Middleware\EnsureTeamMembership;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\jurusanController;
use App\Http\Controllers\kelasController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'showLogin'])
    ->name('login');

Route::post('/login_process', [AuthController::class, 'login_process'])
    ->name('login_process');


// =========================
// SEMUA USER
// =========================
Route::middleware('auth')->group(function () {

// Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//Logout
Route::get('/logout', [AuthController::class, 'logout'])
    ->name('logout');

// =========================
// ADMIN
// =========================

Route::middleware('level:admin')->group(function () {
    Route::post('/simpan-data-jurusan', [jurusanController::class, 'simpan']);
    Route::get('/data_jurusan', [jurusanController::class, 'index'])
        ->name('data_jurusan.index');
    Route::get('/data_jurusan/json', [jurusanController::class, 'getData'])
        ->name('data_jurusan.json');

    Route::get('/input_data_kelas', [kelasController::class, 'input_data_kelas'])
        ->name('input_data_kelas');
    Route::post('/simpan-data-kelas', [kelasController::class, 'simpan']);
    Route::get('/data_kelas/json', [kelasController::class, 'getData'])
        ->name('data_kelas.json');

    Route::view('/input_data_jurusan','input_data_jurusan')->name('input_data_jurusan');
    Route::view('/data_kelas','data_kelas')->name('data_kelas');


});

// =========================
// ADMIN + GURU 
// =========================

Route::middleware('level:admin,guru')->group(function () {

    Route::get('/data', [SiswaController::class, 'index'])
        ->name('data.index');
    Route::get('/input_data_siswa', [SiswaController::class, 'siswa'])
        ->name('input_data_siswa');
    Route::post('/simpan-data-siswa', [SiswaController::class, 'simpan']);
    Route::get('/data_siswa/json', [SiswaController::class, 'getData'])
        ->name('data_siswa.json');

    });
});



require __DIR__.'/settings.php';
