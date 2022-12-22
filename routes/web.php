<?php

use App\Models\Structure;
use App\Models\Achievement;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ComerController;
use App\Http\Controllers\LetterController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\FinanceController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\VillagerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StructureController;
use App\Http\Controllers\AchievementController;

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

// Route::get('/auth/redirect', [LoginController::class, 'redirectToProvider']);
// Route::get('/auth/callback', [LoginController::class, 'handleProviderCallback']);

Route::get('/', function () {
    return view('ourlayouts.home',[
'achievements' => Achievement::paginate(3) ,
'structures' => Structure::paginate(2) ,
]);
});

Route::get('/map', function () {
    return view('ourlayouts.map');
});

Route::get('/data-penduduk/grafik', [VillagerController::class, 'showGraphic']);

Route::get('/data-pendatang/grafik', [ComerController::class, 'showGraphic']);

Route::get('/admin',[DashboardController::class, 'adminview']);
    
Route::get('/sejarah', function () {
    return view('ourlayouts.sejarah');
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

Route::get('/jenis-surat',  [TemplateController::class, 'theview']);

Route::get('/galeri',  [GalleryController::class, 'index']);

Route::get('/prestasi-desa',  [AchievementController::class, 'theview']);

Route::get('/perangkat', [StructureController::class, 'theview']);

Route::resource('achievements', AchievementController::class)->middleware(['auth']);

Route::resource('users', UserController::class);

Route::resource('positions', PositionController::class)->middleware(['admin']);

Route::resource('finances', FinanceController::class)->middleware(['admin']);

Route::resource('villagers', VillagerController::class)->middleware(['admin']);

Route::resource('comers', ComerController::class)->middleware(['admin']);

Route::resource('categories', CategoryController::class)->middleware(['admin']);

Route::resource('galleries', GalleryController::class);

Route::resource('templates', TemplateController::class)->middleware(['admin']);

Route::resource('structures', StructureController::class)->middleware(['admin']);

Route::resource('letters', LetterController::class)->middleware(['auth']);

Route::resource('templates', TemplateController::class)->middleware(['auth']);

Route::resource('reports', ReportController::class)->middleware(['auth']);

Route::get('/villagertest', [VillagerController::class, 'updatestatus'])->middleware(['admin'])->name('villagers.updatestatus');

Route::post('/data-penduduk', [VillagerController::class, 'filterstatus'])->middleware(['admin']);

Route::post('/data-perangkat', [StructureController::class, 'filterstatus'])->middleware(['admin']);

Route::post('/data-pelaporan', [ReportController::class, 'filterstatus'])->middleware(['admin']);

Route::post('/data-surat', [LetterController::class, 'filterstatus'])->middleware(['admin']);

Route::get('/reg-penduduk', [VillagerController::class,'create'])->middleware(['admin']);

Route::get('/reg-pendatang', [ComerController::class, 'create'])->middleware(['admin']);

Route::get('/add-keuangan', [FinanceController::class, 'create'])->middleware(['admin']);

Route::get('/add-perangkat', [StructureController::class, 'create'])->middleware(['admin']);

Route::get('/add-jabatan', [PositionController::class, 'create'])->middleware(['admin']);

Route::get('/data-jabatan', [PositionController::class, 'index'])->middleware(['admin']);

Route::get('/data-penduduk', [VillagerController::class, 'index'])->middleware(['admin']);

Route::get('/data-pendatang', [ComerController::class,'index'])->middleware(['admin']);

Route::get('/data-keuangan', [FinanceController::class,'index'])->middleware(['admin']);

Route::get('/data-perangkat', [StructureController::class, 'index'])->middleware(['admin']);

Route::get('/data-user', [UserController::class,'index'])->middleware(['admin']);

Route::get('/data-surat', [LetterController::class,'index'])->middleware(['admin']);

Route::get('/data-pelaporan', [ReportController::class, 'index'])->middleware(['auth']);

Route::get('/data-kategori', [CategoryController::class,'index'])->middleware(['admin']);

Route::get('/data-jenissurat', [TemplateController::class,'index'])->middleware(['admin']);

Route::get('/data-prestasi', [AchievementController::class,'index'])->middleware(['admin']);

Route::get('/data-gallery', [GalleryController::class,'adminpage'])->middleware(['admin']);

Route::get('/add-pelaporan', [ReportController::class,'create'])->middleware(['auth']);

Route::get('/add-jenissurat', [TemplateController::class,'create'])->middleware(['admin']);

Route::get('/add-suratonline', [LetterController::class, 'create'])->middleware(['auth']);

Route::get('/add-gallery', [GalleryController::class,'create'])->middleware(['admin']);

Route::get('/add-kategoriprestasi', [CategoryController::class,'create'])->middleware(['admin']);

Route::get('/add-prestasi', [AchievementController::class,'create'])->middleware(['admin']);