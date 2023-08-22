<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\MasterJurusanController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\PetunjukController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class, 'index']);
Route::get('/pageinformasi', [HomeController::class, 'pageinformasi']);
Route::get('/petunjuk', [HomeController::class, 'petunjuk']);
Route::get('/pengumuman', [HomeController::class, 'pengumuman']);
Route::get('/login_siswa', [AuthController::class, 'login_siswa']);
Route::get('/form_identitas', [AuthController::class, 'identitas_siswa']);
Route::post('/form_nilai', [AuthController::class, 'nilai_siswa']);
Route::post('/form_jurusan', [AuthController::class, 'jurusan_siswa']);
Route::post('/form_dokumen', [AuthController::class, 'dokumen_siswa']);

Route::middleware(['guest'])->group(function () {
    Route::get('/auth', [AdminController::class, 'auth'])->name('login');
    Route::post('/auth', [AdminController::class, 'login']);
});
Route::get('/home', function () {
    return redirect('/dashboard');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/logout', [AdminController::class, 'logout']);
    Route::get('/dashboard', [AdminController::class, 'dashboard']);
    Route::get('/admin', [AdminController::class, 'dashboard'])->middleware('userAkses:admin');
    Route::get('/kepsek', [AdminController::class, 'dashboard'])->middleware('userAkses:kepsek');
});

Route::get('/daftarsiswa', [AdminController::class, 'daftarsiswa']);
Route::get('/masterpetunjuk', [AdminController::class, 'masterpetunjuk']);



Route::resource('mjurusan', MasterJurusanController::class);
Route::resource('informasi', InformasiController::class);
