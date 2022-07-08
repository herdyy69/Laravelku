<?php

use Illuminate\Support\Facades\Route;

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

 Route::get('profile2/{makanan}/{minuman}/{harga}/{pemesan?}', function ($makanan,$minuman,$harga,$pemesan = "-") {
    return view('pages/latihan1', compact('makanan','minuman','harga','pemesan'));
 });
