<?php

use App\Http\Controllers\AdminEskulController;
use App\Http\Controllers\AdminGuruController;
use App\Http\Controllers\AdminProposalController;
use App\Http\Controllers\AdminSiswaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SiswaController;
use App\Models\Eskul;
use App\Models\Guru;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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



Route::get('/', [AuthController::class, 'index'])->name('login');
Route::post('/login-siswa', [AuthController::class, 'login'])->name('login-siswa');


    Route::get('/loginAdmin', [AuthController::class, 'admin'])->name('loginAdmin');
    Route::post('/login-admin', [AuthController::class, 'adminLogin'])->name('login-admin');

// Route untuk logout
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])
        ->name('admin.dashboard');

    Route::get('/admin/guru', [AdminGuruController::class, 'index'])
        ->name('admin.guru.index');
    Route::get('/admin/guru/create', [AdminGuruController::class, 'create'])
        ->name('admin.guru.create');
    Route::post('/admin/guru', [AdminGuruController::class, 'store'])
        ->name('admin.guru.store');
    Route::get('/admin/guru/edit/{guru}', [AdminGuruController::class, 'edit'])
        ->name('admin.guru.edit');
        Route::post('/admin/guru/update/{id}', [AdminGuruController::class, 'update'])->name('admin.guru.update');
    Route::delete('/admin/guru/{guru}', [AdminGuruController::class, 'destroy'])
        ->name('admin.guru.destroy');
    Route::get('/admin/guru/{id}', [AdminGuruController::class, 'show'])
        ->name('admin.guru.show');


    Route::get('/admin/eskul', [AdminEskulController::class, 'index'])
        ->name('admin.eskul.index');
    Route::get('/admin/eskul/create', [AdminEskulController::class, 'create'])
        ->name('admin.eskul.create');
    Route::post('/admin/eskul', [AdminEskulController::class, 'store'])
        ->name('admin.eskul.store');
    Route::delete('/admin/eskul/{eskul}', [AdminEskulController::class, 'destroy'])
        ->name('admin.eskul.destroy');
    Route::get('/admin/eskul/{id}', [AdminEskulController::class, 'show'])
        ->name('admin.eskul.show');

    Route::get('/admin/siswa', [AdminSiswaController::class, 'index'])
        ->name('admin.siswa.index');
    Route::get('/admin/siswa/create', [AdminSiswaController::class, 'create'])
        ->name('admin.siswa.create');
    Route::post('/admin/siswa', [AdminSiswaController::class, 'store'])
        ->name('admin.siswa.store');
    Route::get('/admin/siswa/{siswa}/edit', [AdminSiswaController::class, 'edit'])
        ->name('admin.siswa.edit');
    Route::delete('/admin/siswa/{siswa}', [AdminSiswaController::class, 'destroy'])
        ->name('admin.siswa.destroy');
    Route::get('/admin/siswa/{id}', [AdminSiswaController::class, 'show'])
        ->name('admin.siswa.show');
 
    Route::get('/admin/proposals', [AdminProposalController::class, 'index'])
        ->name('admin.proposals.index');
    Route::get('/admin/proposals/{id}', [AdminProposalController::class, 'show'])
        ->name('admin.proposals.show');
    Route::get('/admin/proposals/{id}/download', [AdminProposalController::class, 'download'])
        ->name('admin.proposals.download');

  


    // Route::get('/admin/guru', [GuruController::class, 'index'])
    //     ->name('admin.guru.index');



    // Route::get('/admin/proposal', [ProposalController::class, 'index'])
    //     ->name('admin.proposal.index');
});


// Route::get('/',[HomeController::class,'index']);
// Route::get('/home',[HomeController::class,'index'])->name('home');
// Route::get('/about',[HomeController::class,'about'])->name('about');
// Route::get('/contact',[HomeController::class,'contact'])->name('contact');