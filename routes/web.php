<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CalonSiswaController;
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


Route::get('/siswa', [CalonSiswaController::class, 'index']);
Route::post('/siswa/login_siswa', [CalonSiswaController::class, 'login_siswa']);
Route::post('/siswa/logout', [CalonSiswaController::class, 'logout']);


Route::get('/siswa/pendaftaran_siswa', [CalonSiswaController::class, 'pendaftaran']);
Route::get('/siswa/form_pendaftaran', [CalonSiswaController::class, 'form_pendaftaran']);
Route::post('/siswa/create', [CalonSiswaController::class, 'create']);

// Route::post('/form_nilai', [CalonSiswaController::class, 'nilai_siswa']);
// Route::post('/form_jurusan', [CalonSiswaController::class, 'jurusan_siswa']);
// Route::post('/form_dokumen', [CalonSiswaController::class, 'dokumen_siswa']);

Route::middleware(['guest'])->group(function () {
    Route::get('/auth', [AdminController::class, 'auth'])->name('login');
    Route::post('/auth/login', [AdminController::class, 'login']);
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
