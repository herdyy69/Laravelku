<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contoh = [
            ['nama_supplier' => 'UJANG', 'no_telp'=>'088888888', 'alamat'=>'BAKEKOK'],
            ['nama_supplier' => 'UDIN', 'no_telp'=>'088888888', 'alamat'=>'BAKEKOK'],
            ['nama_supplier' => 'JAJANG', 'no_telp'=>'088888888', 'alamat'=>'BAKEKOK'],
            ['nama_supplier' => 'URSA', 'no_telp'=>'088888888', 'alamat'=>'BAKEKOK'],
            ['nama_supplier' => 'HAJI', 'no_telp'=>'088888888', 'alamat'=>'BAKEKOK']
        ];
        DB::table('suppliers')->insert($contoh);
    }
}
