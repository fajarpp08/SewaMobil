<?php

use App\Http\Middleware\AuthAccess;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SewaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PengembalianController;

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [AuthController::class, 'index'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});
Route::get('/home', function () {
    return redirect('/dashboardadmin');
});

Route::get('/', function () {
    return view('home');
});


Route::middleware(['auth'])->group(function () {
    Route::get('logout', [AuthController::class, 'logout']);

    Route::middleware([AuthAccess::class . ':Admin'])->group(function () {
        // ROUTE Admin Access only
        Route::get('/dashboardadmin', [DashboardController::class, 'dashboardAdmin'])->name('dashboardAdmin');

        Route::resource('useradm', UserController::class);
        Route::resource('mobil', MobilController::class);
        Route::resource('sewa', SewaController::class);
        Route::resource('pengembalian', PengembalianController::class);
        // // laporan peminjaman
        Route::get('/laporansewa', [SewaController::class, 'laporan'])->name('laporansewa');
        Route::post('/cetak_laporansewa', [SewaController::class, 'cetakLaporan'])->name('cetak_laporansewa');
        // // laporan pengembalian
        Route::get('/laporanpengembalian', [PengembalianController::class, 'laporan'])->name('laporanpengembalian');
        Route::post('/cetak_laporanpengembalian', [PengembalianController::class, 'cetakLaporan'])->name('cetak_laporanpengembalian');
    });

    // ROUTE User / Login Access Only
    Route::get('/dashboarduser', [DashboardController::class, 'dashboardUser'])->name('dashboardUser');
    Route::get('/mobiluser', [DashboardController::class, 'mobilUser'])->name('mobilUser');
    Route::get('/mobil/detail/{id}', [DashboardController::class, 'mobilDetail'])->name('mobil.detail');
    Route::get('/account', [DashboardController::class, 'account'])->name('account');

    // Peminjaman User
    Route::get('/rental/form/{mobil_id}', [SewaController::class, 'formSewa'])->name('rental.form');
    Route::post('/rental/create', [SewaController::class, 'createSewa'])->name('rental.create');
    Route::get('/rentalan', [SewaController::class, 'rentalan'])->name('rentalan');
    Route::post('/kembalikan/{rental}', [SewaController::class, 'kembalikan'])->name('kembalikan');

    // Route fitur search
    Route::get('/mobils/search', [MobilController::class, 'searchByName'])->name('mobils.searchname');
    Route::get('/searchmobil', [MobilController::class, 'searchByDate'])->name('mobils.searchdate');
});

// Route Register
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'saveRegister'])->name('saveRegister');
