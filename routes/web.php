<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\KitabController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\PelajaranController;
use App\Http\Controllers\PendidikController;
use App\Http\Controllers\SantriController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LaporanController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use League\CommonMark\Extension\SmartPunct\DashParser;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\FotoKegiatanController;
use App\Http\Controllers\FotoOrganisasiController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VisiMisiController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NamaMataPelajaranController;

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
    return view('landingpage.index');
});
Route::GET('/about', [LandingPageController::class, 'about']);


// Route::get('/', [App\Http\Controllers\HomeController::class, 'home'])->name('home');
// Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes(
    [
        'register' => false
    ]
);


Route::resource('/home', HomeController::class);
// Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

// adding user from admin panel

// Route::post('dashboard/add-user', [UserController::class, 'create'])->name('dashboard.add-user');
//Route::resource('dashboard', DashboardController::class)->middleware('is_admin');;

Route::middleware(['auth'])->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('dashboard/add-user', [UserController::class, 'create'])->name('dashboard.add-user');

    Route::resource('user', UserController::class);
    Route::resource('kelas', KelasController::class);
    Route::resource('pendidik', PendidikController::class);
    Route::resource('santri', SantriController::class);
    Route::resource('pelajaran', PelajaranController::class);
    Route::resource('kitab', KitabController::class);

    Route::get('laporan/santri', [LaporanController::class, 'cetakSantri']);
    Route::get('laporan/cetak-data-santri', [LaporanController::class, 'cetakFormSantri']);
    Route::post('laporan/cetak-data-santri', [LaporanController::class, 'cetakDataSantri']);

    Route::get('laporan/pendidik', [LaporanController::class, 'cetakPendidik']);
    Route::get('laporan/cetak-data-pendidik', [LaporanController::class, 'cetakFormPendidik']);
    Route::post('laporan/cetak-data-pendidik', [LaporanController::class, 'cetakDataPendidik']);
    Route::resource('profile', ProfileController::class);
    Route::resource('visi-misi', VisiMisiController::class);
    Route::resource('foto-organisasi', FotoOrganisasiController::class);
    Route::resource('foto-kegiatan', FotoKegiatanController::class);
    Route::resource('contact', ContactController::class);
    Route::resource('namamatapelajaran', NamaMataPelajaranController::class);
});
