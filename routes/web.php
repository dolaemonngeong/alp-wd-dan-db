<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PositionController;

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

Route::get('/jabatan', [PositionController::class, 'index'])->middleware(['admin']);;

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

Route::view('/reg-penduduk', 'reg-penduduk', 
    [
        "pagetitle" => "Registrasi Penduduk",
        "maintitle" => "Registrasi Penduduk"
    ]
);
Route::view('/reg-pendatang', 'reg-pendatang', 
    [
        "pagetitle" => "Registrasi Pendatang",
        "maintitle" => "Registrasi Pendatang"
    ]
);

Route::view('/add-keuangan', 'add-keuangan', 
    [
        "pagetitle" => "Tambah Keuangan",
        "maintitle" => "Tambah Keuangan"
    ]
);
Route::view('/add-perangkat', 'add-perangkat', 
    [
        "pagetitle" => "Tambah Perangkat",
        "maintitle" => "Tambah Perangkat"
    ]
);
Route::view('/add-jabatan', 'add-jabatan', 
    [
        "pagetitle" => "Tambah Jabatan",
        "maintitle" => "Tambah Jabatan"
    ]
);
