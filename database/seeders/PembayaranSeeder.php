<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PembayaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contoh = [
            ['tgl_bayar' => '2022-07-22', 'total_bayar'=>'200000', 'kode_transaksi'=>'KOKOKOKO'],
            ['tgl_bayar' => '2022-07-22', 'total_bayar'=>'200000', 'kode_transaksi'=>'KOKOKOKO'],
            ['tgl_bayar' => '2022-07-22', 'total_bayar'=>'200000', 'kode_transaksi'=>'KOKOKOKO'],
            ['tgl_bayar' => '2022-07-22', 'total_bayar'=>'200000', 'kode_transaksi'=>'KOKOKOKO'],
            ['tgl_bayar' => '2022-07-22', 'total_bayar'=>'200000', 'kode_transaksi'=>'KOKOKOKO']
        ];
        DB::table('pembayarans')->insert($contoh);
    }
}
