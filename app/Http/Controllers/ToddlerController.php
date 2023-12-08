<?php

namespace App\Http\Controllers;

use App\Models\Posyandu;
use App\Models\Toddler;
// use Barryvdh\DomPDF\PDF;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ToddlerController extends Controller
{
    public function index(){
        $todller = Toddler::with("Posyandu")->paginate(10);

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

    public function destroy($id){
        $toddler = Toddler::where("id", $id)->first();
        $toddler->delete();

        return redirect()->route('toddler-index');
    }

    public function edit($id){
        $toddler = Toddler::where("id", $id)->first();
        $posyandu = Posyandu::all();
        
        return view('Induk.Balita.edit', compact('toddler','posyandu'));
    }

    public function update(Request $request, $id){
        $toddler = Toddler::where("id", $id)->first();
        $toddler->update($request->all());

        return redirect()->route('toddler-index');
    }

    public function exportpdf(){
        $toddlers = Toddler::all();

        $pdf = Pdf::loadView('Induk.Balita.export-pdf', ['toddlers' => $toddlers])->setPaper('a4', 'landscape');
        return $pdf->download('balita.pdf'. Carbon::now()->timestamp.'.pdf');
    }
}
