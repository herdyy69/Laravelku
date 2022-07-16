<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function tampil(){
        $post = Post::all();
        return view('post.index', compact('post'));
    }

    public function search($id){
        $post = Post::findOrFail($id);
        return $post;
    }

    public function search_judul($judul){
        $post = Post::where('judul', 'Like', '%' .$judul .'%')->get();
        return $post;
    }

    public function edit($id, $a, $b){
        $post = Post::find($id);
        $post->judul = $a;
        $post->konten = $a;
        $post->save();
        return $post;
    }
    public function tambah($a, $b){
        $post = new Post();
        $post->judul = $a;
        $post->konten = $a;
        $post->save();
        return redirect('postindex');
    }
    public function hapus($id){
        $post = Post::find($id);
        $post->delete();
       return redirect('postindex');
    }
}
