<?php

namespace App\Http\Controllers;

use App\Models\Kb;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Illuminate\Http\Request;

class KbController extends Controller
{
    public function index(){
        $kb = Kb::paginate(5);
        
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


    public function destroy($id){
        $kb = Kb::where("id", $id)->first();
        $kb->delete();

        return redirect()->route('kb-index');
    }

    public function edit($id){
        $kb = Kb::where("id", $id)->first();
        
        return view('Induk.KB.edit', compact('kb'));
    }

    public function update(Request $request, $id){
        $kb = Kb::where("id", $id)->first();
        $kb->update($request->all());

        return redirect()->route('kb-index');
    }

    public function exportpdf(){
        $kb = Kb::all();

        $pdf = Pdf::loadView('Induk.KB.export-pdf', ['kb' => $kb])->setPaper('a4', 'landscape');
        return $pdf->download('KB '. Carbon::now()->timestamp.'.pdf');
    }
}
