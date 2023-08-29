<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index(){
        $dataKategori = Kategori::all();
        return view('admin.kategori.kategori', compact('dataKategori'));
    }
    
    public function kategori_add(){
        return view('admin.kategori.kategori-add');
    }
    
    public function store(Request $request){
        $dataKategori = [
            'kategori' => $request->val_kategori,
            'deskripsi' => $request->val_deskripsi,
        ];
        Kategori::create($dataKategori);
        return redirect('/kategori');
        
    }
}
