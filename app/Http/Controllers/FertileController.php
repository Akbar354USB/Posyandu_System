<?php

namespace App\Http\Controllers;

use App\Models\Fertile;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FertileController extends Controller
{
    public function index(){
        $fertile = Fertile::paginate(10);
        
        return view('Induk.Pus.index', compact('fertile'));
    }

    public function create(){
        return view('Induk.Pus.create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'name_husband' => 'required',
            'name_wife' => 'required',
            'adress' => 'required',
            'telpon' => 'required',
        ],[
            'name_husband.required' => 'nama suami belum di masukkan',
            'name_wife.required' => 'nama istri belum di masukkan',
            'adress.required' => 'alamat belum di masukkan',
            'telpon.required' => 'Telpon belum di masukkan',
        ]);
        Fertile::create($request->all());
        return redirect()->route('fertile-index');
    }


    public function destroy($id){
        $fertile = Fertile::where("id", $id)->first();
        $fertile->delete();

        return redirect()->route('fertile-index');
    }

    public function edit($id){
        $fertile = Fertile::where("id", $id)->first();
        
        return view('Induk.Pus.edit', compact('fertile'));
    }

    public function update(Request $request, $id){
        $fertile = Fertile::where("id", $id)->first();
        $fertile->update($request->all());

        return redirect()->route('fertile-index');
    }

    public function exportpdf(){
        $fertile = Fertile::all();

        $pdf = Pdf::loadView('Induk.Pus.export-pdf', ['fertile' => $fertile])->setPaper('a4', 'landscape');
        return $pdf->download('PUS '. Carbon::now()->timestamp.'.pdf');
    }

}
