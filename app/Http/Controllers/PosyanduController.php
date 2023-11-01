<?php

namespace App\Http\Controllers;

use App\Models\Posyandu;
use Illuminate\Http\Request;

class PosyanduController extends Controller
{
    public function index(){
        $posyandu = Posyandu::all();
        
        // return view('Admin.Kelas.index', compact('kelas'));
        return view('Induk.Posyandu.index', compact('posyandu'));
    }

    public function create(){
        return view('Induk.Posyandu.create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'adress' => 'required',
            'telpon' => 'required',
            'village' => 'required',
        ],[
            'name.required' => 'kode posyandu belum di masukkan',
            'address.required' => 'alamat posyandu belum di masukkan',
            'telpon.required' => 'telpon belum di masukkan',
            'village.required' => 'dusun belum di masukkan'
        ]);

        Posyandu::create($request->all());
        return redirect()->route('posyandu-index');
        // return redirect()->route('kelas-index')->with('status', 'Sukses Tambah Data Kelas');
    }

    public function destroy($id){
        $posyandu = Posyandu::where("id", $id)->first();
        $posyandu->delete();
        
        // return redirect()->route('kelas-index')->with('status', 'Sukses Hapus Data Kelas');
        return redirect()->route('posyandu-index');
    }
}
