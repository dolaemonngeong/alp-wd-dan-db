<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LetterController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\VillagerController;
use App\Http\Controllers\StructureController;

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
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::resource('positions', PositionController::class)->middleware(['admin']);
Route::resource('villagers', VillagerController::class)->middleware(['admin']);
Route::get('/villagertest', [VillagerController::class, 'updatestatus'])->middleware(['admin'])->name('villagers.updatestatus');
Route::resource('structures', StructureController::class)->middleware(['admin']);
Route::resource('letters', LetterController::class)->middleware(['admin']);

// Route::get('/reg-penduduk', [VillagerController::class],'create')->middleware(['admin']);

Route::view('/reg-pendatang', 'ourlayouts.pendatang.reg-pendatang', 
    [
        "pagetitle" => "Registrasi Pendatang",
        "maintitle" => "Registrasi Pendatang"
    ]
);

Route::view('/add-keuangan', 'ourlayouts.keuangan.add-keuangan', 
    [
        "pagetitle" => "Tambah Keuangan",
        "maintitle" => "Tambah Keuangan"
    ]
);
// Route::view('/add-perangkat', [StructureController::class, 'create'])->middleware(['admin']);

// Route::view('/add-jabatan', [PositionController::class, 'create'])->middleware(['admin']);

Route::get('/data-jabatan', [PositionController::class, 'index'])->middleware(['admin']);

Route::get('/data-penduduk', [VillagerController::class, 'index'])->middleware(['admin']);

Route::view('/data-pendatang', 'ourlayouts.pendatang.data-pendatang', 
    [
        "pagetitle" => "Data Pendatang",
        "maintitle" => "Data Pendatang"
    ]
);

Route::view('/data-keuangan', 'ourlayouts.keuangan.data-keuangan', 
    [
        "pagetitle" => "Data Keuangan",
        "maintitle" => "Data Keuangan"
    ]
);
Route::get('/data-perangkat', [StructureController::class, 'index'])->middleware(['admin']);

Route::view('/data-user', 'ourlayouts.user.data-user', 
    [
        "pagetitle" => "Data User",
        "maintitle" => "Data User"
    ]
);
Route::get('/data-surat', [LetterController::class,'index'])->middleware(['admin']);

Route::get('/data-pelaporan', [ReportController::class, 'index'])->middleware(['admin']);

Route::view('/data-kategoriprestasi', 'data-kategoriprestasi', 
    [
        "pagetitle" => "Daftar Kategori Prestasi",
        "maintitle" => "Daftar Kategori Prestasi"
    ]
);
