<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contoh = [
            ['nama_barang' => 'RINSO', 'nama_pembeli'=>'JAJANG', 'tanggal'=>'2020-07-2', 'keterangan'=>'SUKSES'],
            ['nama_barang' => 'RINSO', 'nama_pembeli'=>'JAJANG', 'tanggal'=>'2020-07-2', 'keterangan'=>'SUKSES'],
            ['nama_barang' => 'RINSO', 'nama_pembeli'=>'JAJANG', 'tanggal'=>'2020-07-2', 'keterangan'=>'SUKSES'],
            ['nama_barang' => 'RINSO', 'nama_pembeli'=>'JAJANG', 'tanggal'=>'2020-07-2', 'keterangan'=>'SUKSES'],
            ['nama_barang' => 'RINSO', 'nama_pembeli'=>'JAJANG', 'tanggal'=>'2020-07-2', 'keterangan'=>'SUKSES']
            
        ];
        DB::table('transaksis')->insert($contoh);
    }
}
