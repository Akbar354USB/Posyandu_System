<?php

namespace App\Http\Controllers;

use App\Models\Posyandu;
use App\Models\Toddler;
use Illuminate\Http\Request;

class ToddlerController extends Controller
{
    public function index(){
        $todller = Toddler::with("Posyandu")->paginate(5);

        return view('Induk.Balita.index', compact('todller'));
    }

    public function create(){
        $posyandu = Posyandu::all();
        return view('Induk.Balita.create', compact("posyandu"));
    }

    public function store(Request $request){
        $this->validate($request, [
            'nik' => 'required',
            'name' => 'required',
            'date_birth' => 'required',
            'gender' => 'required',
            'adress' => 'required',
            'name_mom' => 'required',
            'posyandu_id' => 'required',
        ],[
            'nik.required' => 'nik belum di masukkan',
            'name.required' => 'nama belum di masukkan',
            'adress.required' => 'alamat belum di masukkan',
            'date_birth.required' => 'tanggal lahir belum di masukkan',
            'gender.required' => 'jenis kelamin belum di masukkan',
            'name_mom.required' => 'nama ibu belum di masukkan',
            'posyandu_id.required' => 'tempat posyandu belum di masukkan',
        ]);
        Toddler::create($request->all());
        return redirect()->route('toddler-index');
    }
}
