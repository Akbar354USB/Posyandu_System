<?php

namespace App\Http\Controllers;

use App\Models\Postpartum;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PostpartumController extends Controller
{
    public function index(){
        $postpartum = Postpartum::paginate(10);
        
        return view('Induk.Nifas.index', compact('postpartum'));
    }

    public function create(){
        return view('Induk.Nifas.create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'nik' => 'required',
            'birth' => 'required',
            'telpon' => 'required',
            'born' => 'required',
            'status' => 'required',
        ],[
            'name.required' => 'nama suami belum di masukkan',
            'nik.required' => 'nama istri belum di masukkan',
            'birth.required' => 'alamat belum di masukkan',
            'telpon.required' => 'jenis kontrasepsi belum di masukkan',
            'born.required' => 'tanggal pasang belum di masukkan',
            'status.required' => 'taggal di lepas belum di masukkan',
        ]);
        Postpartum::create($request->all());
        return redirect()->route('postpartum-index');
    }


    public function destroy($id){
        $postpartum = Postpartum::where("id", $id)->first();
        $postpartum->delete();

        return redirect()->route('postpartum-index');
    }

    public function edit($id){
        $postpartum = Postpartum::where("id", $id)->first();
        
        return view('Induk.Nifas.edit', compact('postpartum'));
    }

    public function update(Request $request, $id){
        $postpartum = Postpartum::where("id", $id)->first();
        $postpartum->update($request->all());

        return redirect()->route('postpartum-index');
    }

    public function exportpdf(){
        $pospartum = Postpartum::all();

        $pdf = Pdf::loadView('Induk.Nifas.export-pdf', ['pospartum' => $pospartum])->setPaper('a4', 'landscape');
        return $pdf->download('Ibu Nifas '. Carbon::now()->timestamp.'.pdf');
    }
}
