<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\JokiController;
use App\Http\Controllers\SapiController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\NazarController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\MalasngodingController;





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


 Route::get('halo', function () {
	return "Halo, Selamat datang di tutorial laravel www.malasngoding.com";
 });

 Route::get('blog', function () {
	return view('blog');
 }); 

 Route::get('/hewan', [SapiController::class, 'index']);
 Route::get('/dosen', [DosenController::class, 'sapi']);

 //route blog
 Route::get('/blog', [BlogController::class,'home']);
 Route::get('/blog/tentang', [BlogController::class,'tentang']);
 Route::get('/blog/kontak', [BlogController::class,'kontak']);

 //belajar validasi
 Route::get('/input', [MalasngodingController::class, 'nazar_ganteng']);
 Route::post('/proses', [MalasngodingController::class, 'proses']);

 //eloquent
Route::get('/', function() {
	return view ('welcome');

});
Route::get('/joki', [JokiController::class, 'index']);
 
//guru
Route::get('/guru', [GuruController::class, 'index']);
Route::get('/guru/hapus/{id}', [GuruController::class, 'hapus']);
Route::get('/guru/trash', [GuruController::class, 'trash']);
Route::get('/guru/kembalikan/{id}', [GuruController::class, 'kembalikan']);
Route::get('/guru/kembalikan_semua', [GuruController::class, 'kembalikan_semua']);
Route::get('/guru/hapus_permanen/{id}', [GuruController::class, 'hapus_permanen']);
Route::get('/guru/hapus_permanen_semua', [GuruController::class, 'hapus_permanen_semua']);

//pengguna
Route::get('/pengguna', [PenggunaController::class, 'index']);

Route::get('/article', [WebController::class, 'index']);

Route::get('/anggota', [NazarController::class, 'index']);


/**
 * @path /users
 * @method GET
 */
Route::get('/users', [\App\Http\Controllers\UserController::class, 'index']);

/**
 * @path /posts
 * @method GET
 */
Route::get('/posts', [\App\Http\Controllers\PostController::class, 'index']);

Route::get('/', [AuthController::class, 'login'])->name('admin.login');
Route::post('/loginProses', [AuthController::class, 'loginProses'])->name('admin.loginProses');
Route::get('/logout', [AuthController::class, 'logout'])->name('admin.logout');

Route::middleware(['auth.admin'])->group(function () {
	Route::get('/siswa', [\App\Http\Controllers\SiswaController::class, 'index'])->name('siswa');
	Route::get('/siswa/tambah', [\App\Http\Controllers\SiswaController::class, 'tambah']);
	Route::post('/siswa/store', [\App\Http\Controllers\SiswaController::class, 'store']);
	Route::get('/siswa/edit/{id}', [\App\Http\Controllers\SiswaController::class, 'edit']);
	Route::put('/siswa/update/{id}', [\App\Http\Controllers\SiswaController::class, 'update']);
	Route::get('/siswa/hapus/{id}', [\App\Http\Controllers\SiswaController::class, 'delete']);

	Route::get('/jadwal', [\App\Http\Controllers\JadwalController::class, 'index']);
	Route::get('/jadwal/tambah', [\App\Http\Controllers\JadwalController::class, 'tambah']);
	Route::post('/jadwal/store', [\App\Http\Controllers\JadwalController::class, 'store']);
	Route::get('/jadwal/edit/{id}', [\App\Http\Controllers\JadwalController::class, 'edit']);
	Route::put('/jadwal/update/{id}', [\App\Http\Controllers\JadwalController::class, 'update']);
	Route::get('/jadwal/hapus/{id}', [\App\Http\Controllers\JadwalController::class, 'delete']);

	// kelas

	Route::get('/kelas', [\App\Http\Controllers\KelasController::class, 'index']);
	Route::get('/kelas/tambah', [\App\Http\Controllers\KelasController::class, 'tambah']);
	Route::post('/kelas/store', [\App\Http\Controllers\KelasController::class, 'store']);
	Route::get('/kelas/edit/{id}', [\App\Http\Controllers\KelasController::class, 'edit']);
	Route::put('/kelas/update/{id}', [\App\Http\Controllers\KelasController::class, 'update']);
	Route::get('/kelas/hapus/{id}', [\App\Http\Controllers\KelasController::class, 'delete']);
	Route::get('/kelas/detail/{id}', [\App\Http\Controllers\KelasController::class, 'detail']);


	//pelajaran
	Route::get('/pelajaran', [\App\Http\Controllers\PelajaranController::class, 'index']);
	Route::get('/pelajaran/tambah', [\App\Http\Controllers\PelajaranController::class, 'tambah']);
	Route::post('/pelajaran/store', [\App\Http\Controllers\PelajaranController::class, 'store']);
	Route::get('/pelajaran/edit/{id}', [\App\Http\Controllers\PelajaranController::class, 'edit']);
	Route::put('/pelajaran/update/{id}', [\App\Http\Controllers\PelajaranController::class, 'update']);
	Route::get('/pelajaran/hapus/{id}', [\App\Http\Controllers\PelajaranController::class, 'delete']);
});

