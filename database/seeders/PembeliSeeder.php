<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PembeliSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contoh = [
            ['nama_pembeli' => 'UJANG', 'jk'=>'085155338717', 'no_telp'=>'089999','alamat'=>'HAYAYAYAYA'],
            ['nama_pembeli' => 'UJANG', 'jk'=>'085155338717', 'no_telp'=>'089999','alamat'=>'HAYAYAYAYA'],
            ['nama_pembeli' => 'UJANG', 'jk'=>'085155338717', 'no_telp'=>'089999','alamat'=>'HAYAYAYAYA'],
            ['nama_pembeli' => 'UJANG', 'jk'=>'085155338717', 'no_telp'=>'089999','alamat'=>'HAYAYAYAYA'],
            ['nama_pembeli' => 'UJANG', 'jk'=>'085155338717', 'no_telp'=>'089999','alamat'=>'HAYAYAYAYA']
        ];
        DB::table('pembelis')->insert($contoh);
    }
}
