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

    public function siswa(){
        $a = [
            ['id'=>1, 'nama'=>'Herdy', 'age'=>17, 'hobi'=>['MAKAN','TIDUR']],
            ['id'=>2, 'nama'=>'Wachyu', 'age'=>7, 'hobi'=>['TIDUR','MAKAN']]
        ];
        return view('pages.siswa', ['siswa'=>$a]);
    }
    public function dosen(){
        $a = [
            ['id'=>1, 'namad'=>'Yusuf Bachtiar', 'matkul'=>'Pemrograman Web' , 
            'mahasiswa'=>[
            ['nama'=>'Muhammad Soleh', 'nilai'=>78],
            ['nama'=>'Jujun Junaedi','nilai'=>85],
            ['nama'=>'Mamat Alkatiri','nilai'=>90]
            ]
        ],
            ['id'=>2, 'namad'=>'Yaris Riyadi', 'matkul'=>'Pemrograman Web' , 
            'mahasiswa'=>[
            ['nama'=>'Alfred McTOMINAY','nilai'=>67],
            ['nama'=>'Bruno Kasmir','nilai'=>90]
            ]
    ],
        ];
        return view('pages.dosen', ['dosen'=>$a]);
    }
    public function televisi(){
        $tv = [
            ['nama_channel'=>'NET TV',
             'jadwal'=>[
                ['nama'=>'TO NIGHT SHOW', 'jam_tayang'=>"21.00 WIB"]
            ]
             ],
             ['nama_channel'=>'TVRI',
             'jadwal'=>[
                ['nama'=>'TOP SPORT', 'jam_tayang'=>"24.00 WIB"]
            ]
             ],
             ['nama_channel'=>'GTV',
             'jadwal'=>[
                ['nama'=>'NARUTO', 'jam_tayang'=>"18.00 WIB"]
            ]
             ],
             ['nama_channel'=>'TRANS 7',
             'jadwal'=>[
                ['nama'=>'JEJAK SI SAHA?', 'jam_tayang'=>"15.00 WIB"]
            ]
             ],
             ['nama_channel'=>'TRANS TV',
             'jadwal'=>[
                ['nama'=>'BIG MOVIES', 'jam_tayang'=>"20.00 WIB"]
            ]
             ],
        ];
        // dd($tv);
        return view('pages.televisi', ['televisi'=>$tv]);
    }
    function shop(){
        $belanja = [
            ['nama_orang'=>'ALFIAN', 
            'pembelian'=>
            [
            ['jenis' => 'SEPATU', 'merk' => 'VANS', 'harga'=>250000 ],
            ['jenis' => 'BAJU', 'merk' => 'ERIGO', 'harga'=>100000 ],
            ['jenis' => 'CELANA', 'merk' => 'ERIGO', 'harga'=>150000 ],
            ['jenis' => 'KUPLUK', 'merk' => 'VANS', 'harga'=>100000 ]
            ]
            ],
            ['nama_orang'=>'DIDA', 
            'pembelian'=>
            [
            ['jenis' => 'TOPI', 'merk' => 'EOGER', 'harga'=>100000 ],
            ['jenis' => 'BAJU', 'merk' => 'ERIGO', 'harga'=>75000 ],
            ['jenis' => 'CELANA', 'merk' => 'ERIGO', 'harga'=>125000 ]
            ]
            ]
        ];
        return view('pages.shop', ['belanja'=>$belanja]);
    }
    function nilai_siswa(){
        $siswa = 
        [
            ['nama_siswa' => 'AGUS', 'jurusan' => 'TKR' ,
            'nilai' =>
            [
                ['matpel' => 'B.INDONESIA', 'nilai' => 80],
                ['matpel' => 'B.INGGRIS', 'nilai' => 97],
                ['matpel' => 'PRODUKTIF KEJURUAN', 'nilai' => 67],
                ['matpel' => 'MATEMATIKA', 'nilai' => 100]
            ]
            ],
            ['nama_siswa' => 'MAHMUD', 'jurusan' => 'TKR' ,
            'nilai' =>
            [
                ['matpel' => 'B.INDONESIA', 'nilai' => 78],
                ['matpel' => 'B.INGGRIS', 'nilai' => 86],
                ['matpel' => 'PRODUKTIF KEJURUAN', 'nilai' => 90],
                ['matpel' => 'MATEMATIKA', 'nilai' => 67]
            ]
            ],
            ['nama_siswa' => 'RENDI',  'jurusan' => 'TSM' ,
            'nilai' =>
            [
                ['matpel' => 'B.INDONESIA', 'nilai' => 90],
                ['matpel' => 'B.INGGRIS', 'nilai' => 50],
                ['matpel' => 'PRODUKTIF KEJURUAN', 'nilai' => 65],
                ['matpel' => 'MATEMATIKA', 'nilai' => 78]
            ]
            ],
            ['nama_siswa' => 'FIRMAN',  'jurusan' => 'RPL' ,
            'nilai' =>
            [
                ['matpel' => 'B.INDONESIA', 'nilai' => 78],
                ['matpel' => 'B.INGGRIS', 'nilai' => 90],
                ['matpel' => 'PRODUKTIF KEJURUAN', 'nilai' => 56],
                ['matpel' => 'MATEMATIKA', 'nilai' => 78]
            ]
            ],
            ['nama_siswa' => 'ABDUL',  'jurusan' => 'RPL' ,
            'nilai' =>
            [
                ['matpel' => 'B.INDONESIA', 'nilai' => 89],
                ['matpel' => 'B.INGGRIS', 'nilai' => 67],
                ['matpel' => 'PRODUKTIF KEJURUAN', 'nilai' => 80],
                ['matpel' => 'MATEMATIKA', 'nilai' => 90]
            ]
            ]
        ];
        return view('pages.siswa2', ['siswa'=>$siswa]);
    }
}