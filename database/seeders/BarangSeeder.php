<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contoh = [
            ['nama_barang' => 'RINSO', 'harga'=>'19000', 'stok'=>'20','nama_supplier' => 'JAJANG'],
            ['nama_barang' => 'SABUN COLEK', 'harga'=>'3000', 'stok'=>'20','nama_supplier' => 'JAJANG'],
            ['nama_barang' => 'GIVE', 'harga'=>'5000', 'stok'=>'20','nama_supplier' => 'JAJANG'],
            ['nama_barang' => 'LIFEBOYS', 'harga'=>'5000', 'stok'=>'20','nama_supplier' => 'JAJANG'],
            ['nama_barang' => 'ASAM', 'harga'=>'19000', 'stok'=>'20','nama_supplier' => 'JAJANG']
        ];
        DB::table('barangs')->insert($contoh);
    }
}
