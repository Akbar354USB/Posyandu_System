<?php

namespace App\Http\Controllers;

use App\Models\Kb;
use Illuminate\Http\Request;

class KbController extends Controller
{
    public function index(){
        $kb = Kb::all();
        
        return view('Induk.KB.index', compact('kb'));
    }

    public function create(){
        return view('Induk.KB.create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'name_husband' => 'required',
            'name_wife' => 'required',
            'adress' => 'required',
            'contraception' => 'required',
            'installed' => 'required',
            'uninstal' => 'required',
        ],[
            'name_husband.required' => 'nama suami belum di masukkan',
            'name_wife.required' => 'nama istri belum di masukkan',
            'adress.required' => 'alamat belum di masukkan',
            'contraception.required' => 'jenis kontrasepsi belum di masukkan',
            'installed.required' => 'tanggal pasang belum di masukkan',
            'uninstal.required' => 'taggal di lepas belum di masukkan',
        ]);

        Kb::create($request->all());
        return redirect()->route('kb-index');
    }

    // public function index(){
    //     $posyandu = Posyandu::all();
        
    //     // return view('Admin.Kelas.index', compact('kelas'));
    //     return view('Induk.Posyandu.index', compact('posyandu'));
    // }

    // public function create(){
    //     return view('Induk.Posyandu.create');
    // }


    // public function destroy($id){
    //     $posyandu = Posyandu::where("id", $id)->first();
    //     $posyandu->delete();

    //     // return redirect()->route('kelas-index')->with('status', 'Sukses Hapus Data Kelas');
    //     return redirect()->route('posyandu-index');
    // }

    // public function edit($id){
    //     $posyandu = Posyandu::where("id", $id)->first();

    //     return view('Induk.Posyandu.edit', compact('posyandu'));
    // }

    // public function update(Request $request, $id){
    //     $posyandu = Posyandu::where("id", $id)->first();
    //     $posyandu->update($request->all());

    //     return redirect()->route('posyandu-index');
    // }
}
