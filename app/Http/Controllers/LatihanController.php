<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    public function perkenalan($nama = "-", $alamat = "-", $umur= "-"){
        $nama1 = $nama;
        $alamat1 = $alamat;
        $umur1 = $umur;

        return view('pages.perkenalan', compact('nama1','alamat1','umur1'));
    }
}
