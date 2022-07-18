<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Supplier;
use App\Models\Pembeli;
use App\Models\Pembayaran;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class Task2Controller extends Controller
{
    public function tampil(){
        $Barang = Barang::all();
        $Supplier = Supplier::all();
        $Pembeli = Pembeli::all();
        $Pembayaran = Pembayaran::all();
        $Transaksi = Transaksi::all();
        return view('task2.index', compact('Barang','Supplier','Pembeli','Pembayaran','Transaksi'));
    }
}
