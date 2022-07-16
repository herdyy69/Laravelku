<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Karyawan;
use App\Models\jabatan;
use App\Models\bidang;

class TaskController extends Controller
{
    public function tampil(){
        $karyawan = Karyawan::all();
        $jabatan = jabatan::all();
        $bidang = bidang::all();
        return view('task.index', compact('karyawan','jabatan','bidang'));
    }

    public function search_k($id){
        $karyawan = Karyawan::findOrFail($id);
        return $karyawan;
    }
    public function search_j($id){
        $jabatan = jabatan::findOrFail($id);
        return $jabatan;
    }
    public function search_b($id){
        $bidang = bidang::findOrFail($id);
        return $bidang;
    }

    public function search_nama_k($nama){
        $Karyawan = Karyawan::where('nama', 'Like', '%' .$nama .'%')->get();
        return $Karyawan;
    }
    public function search_nama_b($nama_bidang){
        $bidang = bidang::where('nama_bidang', 'Like', '%' .$nama_bidang .'%')->get();
        return $bidang;
    }
    public function search_nama_j($nama_jabatan){
        $jabatan = jabatan::where('nama_jabatan', 'Like', '%' .$nama_jabatan .'%')->get();
        return $jabatan;
    }

    public function tambah_k($a, $b){
        $karyawan = new Karyawan();
        $karyawan->nama = $a;
        $karyawan->no_hp = $a;
        $karyawan->save();
        return redirect('taskindex');
    }
    public function tambah_b($a){
        $bidang = new bidang();
        $bidang->nama_bidang = $a;
        $bidang->save();
        return redirect('taskindex');
    }
    public function tambah_J($a){
        $jabatan = new jabatan();
        $jabatan->nama_jabatan = $a;
        $jabatan->save();
        return redirect('taskindex');
    }

    public function edit_K($id, $a, $b){
        $karyawan = Karyawan::find($id);
        $karyawan->nama = $a;
        $karyawan->no_hp = $a;
        $karyawan->save();
        return redirect('taskindex');
    }
    public function edit_b($id, $a){
        $bidang = bidang::find($id);
        $bidang->nama_bidang = $a;
        $bidang->save();
        return redirect('taskindex');
    }
    public function edit_j($id, $a){
        $jabatan = jabatan::find($id);
        $jabatan->nama_jabatan = $a;
        $jabatan->save();
        return redirect('taskindex');
    }

    public function hapus_k($id){
        $Karyawan = Karyawan::find($id);
        $Karyawan->delete();
       return redirect('taskindex');
    }
    public function hapus_b($id){
        $bidang = bidang::find($id);
        $bidang->delete();
       return redirect('taskindex');
    }
    public function hapus_j($id){
        $jabatan = jabatan::find($id);
        $jabatan->delete();
       return redirect('taskindex');
    }
   
}
