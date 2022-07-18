<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LatihanController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\Task2Controller;

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
    return view('welcome');
});

Route::get('about', function () {
   return view('about');
});

Route::get('profile', function () {
    $nama = "Herdyansah";
    $tempat = "Bandung";
    $tgl = "16-Agustus-2004";
    $jk = "Laki-laki";
    $hobi = "Main Gitar";
    return view('pages/profiles', compact('nama','tempat','tgl','jk', 'hobi'));
 });

 Route::get('profile2/{makanan?}/{minuman?}/{cemilan?}/{pemesan?}', function ($makanan = "Tidak Ada",$minuman= "Tidak Ada",$cemilan = "Tidak Ada",$pemesan = "-") {
    return view('pages/latihan1', compact('makanan','minuman','cemilan','pemesan'));
    
 });

Route::get('perkenalan/{nama?}/{alamat?}/{umur?}', [LatihanController::class, 'perkenalan']);

Route::get('siswa/{id?}/{nama?}/{age?}', [LatihanController::class, 'siswa']);
Route::get('dosen', [LatihanController::class, 'dosen']);
Route::get('televisi', [LatihanController::class, 'televisi']);
Route::get('shop', [LatihanController::class, 'shop']);
Route::get('siswa2', [LatihanController::class, 'nilai_siswa']);
// we
Route::get('postindex', [PostController::class, 'tampil']);
Route::get('postindex/{id}', [PostController::class, 'search']);
Route::get('postindex/judul/{judul}', [PostController::class, 'search_judul']);
Route::get('postindex/edit/{id}/{judul}/{konten}', [PostController::class, 'edit']);
Route::get('postindex/tambah/{judul}/{konten}', [PostController::class, 'tambah']);
Route::get('postindex/hapus/{id}', [PostController::class, 'hapus']);

Route::get('taskindex', [TaskController::class, 'tampil']);

Route::get('taskindex/karyawan/{id}', [TaskController::class, 'search_k']);
Route::get('taskindex/jabatan/{id}', [TaskController::class, 'search_j']);
Route::get('taskindex/bidang/{id}', [TaskController::class, 'search_b']);

Route::get('taskindex/nama/{nama}', [TaskController::class, 'search_nama_k']);
Route::get('taskindex/nama_bidang/{nama_bidang}', [TaskController::class, 'search_nama_b']);
Route::get('taskindex/nama_jabatan/{nama_jabatan}', [TaskController::class, 'search_nama_j']);

Route::get('taskindex/tambah_k/{nama}/{no_hp}', [TaskController::class, 'tambah_k']);
Route::get('taskindex/tambah_b/{nama_bidang}', [TaskController::class, 'tambah_b']);
Route::get('taskindex/tambah_j/{nama_jabatan}', [TaskController::class, 'tambah_j']);

Route::get('taskindex/edit_k/{id}/{nama}/{no_hp}', [TaskController::class, 'edit_k']);
Route::get('taskindex/edit_b/{id}/{nama_bidang}', [TaskController::class, 'edit_b']);
Route::get('taskindex/edit_j/{id}/{nama_jabatan}', [TaskController::class, 'edit_j']);

Route::get('taskindex/hapus_k/{id}', [TaskController::class, 'hapus_k']);
Route::get('taskindex/hapus_b/{id}', [TaskController::class, 'hapus_b']);
Route::get('taskindex/hapus_j/{id}', [TaskController::class, 'hapus_j']);

Route::get('postindex2', [Task2Controller::class, 'tampil']);