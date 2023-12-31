<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Contracts\Encryption\EncryptException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use PhpParser\Node\Stmt\TryCatch;
use Symfony\Component\VarDumper\VarDumper;

class KategoriController extends Controller
{
    // category index admin
    public function index(){
        $dataKategori = Kategori::latest('created_at')->get();
        return view('admin.kategori.kategori', compact('dataKategori'));
    }
    
    // view add kategori
    public function kategori_add(){
        return view('admin.kategori.kategori-add');
    }
    
    // store value category update
    public function store(Request $request){
        $request->validate([
            'val_kategori'      => 'required|unique:kategori,kategori',
            'val_deskripsi'     => 'required'
        ]);
        $dataKategori = [
            'kategori'      => $request->val_kategori,
            'deskripsi'     => $request->val_deskripsi,
        ];
        Kategori::create($dataKategori);
        return redirect('/kategori');
        
    }

// delete kategori
    public function destroy($dataKategori){
        try {
            $kategori_i_decrypt = Crypt::decrypt($dataKategori);
        } catch (DecryptException $e) {
            abort(404);
        }

        $fKategori = Kategori::find($kategori_i_decrypt);
        $fKategori->delete();
        return redirect('/kategori');
    }

    // view update kategori
    public function kategori_edit($kategori){
        try {
            $kategori_i_decrypt = Crypt::decrypt($kategori);
        } catch (DecryptException $e) {
            abort(404);
        }
        
        $dataKategori = Kategori::find($kategori_i_decrypt);
        return view('admin.kategori.kategori-edit', compact('dataKategori'));
    }

    // store value update kategori
    public function update(Request $request, $kategori){
        try {
            $kategori_i_decrypt = Crypt::decrypt($kategori);
        } catch (DecryptException $e) {
            abort(404);
        }

        $request->validate([
            'val_kategori'      =>  'required',
            'val_deskripsi'     =>  'required'
        ]);

        $kategori = [
            'kategori'      =>  $request->val_kategori,
            'deskripsi'     =>  $request->val_deskripsi
        ];

        $dataKategori = Kategori::find($kategori_i_decrypt);
        $dataKategori->update($kategori);         
        return redirect('/kategori');
    }
    

    // detail kategori
    public function show($kategori){
        try {
            $kategori_i_decrypt = Crypt::decrypt($kategori);
        } catch (DecryptException $e) {
            abort(404);
        }

        $dataKategori =  Kategori::find($kategori_i_decrypt);
        return view('admin.kategori.kategori-detail', compact('dataKategori'));
    }
}
