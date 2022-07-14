<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LatihanController;

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