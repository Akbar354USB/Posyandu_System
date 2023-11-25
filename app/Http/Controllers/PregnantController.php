<?php

namespace App\Http\Controllers;

use App\Models\Pregnant;
use Illuminate\Http\Request;

class PregnantController extends Controller
{
    public function create(){
        $pregnant = Pregnant::all();
        return view('Induk.Hamil.create', compact("pregnant"));
    }

    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'nik' => 'required',
            'usia' => 'required',
            'birth' => 'required',
        ],[
            'name.required' => 'tinggi badan belum di masukkan',
            'nik.required' => 'berat badan belum di masukkan',
            'usia.required' => 'lingkar kepala belum di masukkan',
            'birth.required' => 'lingkar lengan belum di masukkan',
        ]);
        Pregnant::create($request->all());
        return redirect()->route('pregnant-index');
    }

    public function index(){
        $pregnant = Pregnant::paginate(5);

        return view('Induk.Hamil.index', compact('pregnant'));
    }

    public function destroy($id){
        $pregnant = Pregnant::where("id", $id)->first();
        $pregnant->delete();

        return redirect()->route('pregnant-index');
    }

    public function edit($id){
        $pregnant = Pregnant::where("id", $id)->first();
        
        return view('Induk.Hamil.edit', compact('pregnant'));
    }

    public function update(Request $request, $id){
        $pregnant = Pregnant::where("id", $id)->first();
        $pregnant ->update($request->all());

        return redirect()->route('pregnant-index');
    }
}
