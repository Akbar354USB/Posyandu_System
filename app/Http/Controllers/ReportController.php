<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function create(){
        return view('Laporan.create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'photo' => 'required',
            'note' => 'required',
        ],[
            'name' => 'nama suami belum di masukkan',
            'photo' => 'nama istri belum di masukkan',
            'note' => 'alamat belum di masukkan',
        ]);

        $data = Report::create($request->all());
        if($request->hasFile('photo')){
            $request->file('photo')->move('laporan/', $request->file('photo')->getClientOriginalName());
            $data->photo = $request->file('photo')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('report-index');
    }

    public function index(){
        $report = Report::all();
        
        return view('Laporan.index', compact('report'));
    }

    public function view($id){
        $report = Report::where("id", $id)->first();
        
        // return view('Laporan.view', compact('report'));
        return view('Laporan.view', compact('report'));
    }

    public function destroy($id){
        $report = Report::where("id", $id)->first();
        $report->delete();

        return redirect()->route('report-index');
    }
}
