<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Toddler;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function create(){
        $toddler = Toddler::all();
        return view('register.create', compact("toddler"));
    }

    public function store(Request $request){
        $this->validate($request, [
            'height' => 'required',
            'weight' => 'required',
            'lk' => 'required',
            'll' => 'required',
            'toddler_id' => 'required',
        ],[
            'height.required' => 'tinggi badan belum di masukkan',
            'weight.required' => 'berat badan belum di masukkan',
            'lk.required' => 'lingkar kepala belum di masukkan',
            'll.required' => 'lingkar lengan belum di masukkan',
            'posyandu_id.required' => 'tempat posyandu belum di masukkan',
        ]);
        Service::create($request->all());
        return redirect()->route('service-index');
    }

    public function index(){
        $service = Service::with("Toddler")->paginate(10);

        return view('register.index', compact('service'));
    }

    public function destroy($id){
        $service = Service::where("id", $id)->first();
        $service->delete();

        return redirect()->route('service-index');
    }

    public function edit($id){
        $service = Service::where("id", $id)->first();
        $toddler = Toddler::all();
        
        return view('register.edit', compact('service','toddler'));
    }

    public function update(Request $request, $id){
        $service = Service::where("id", $id)->first();
        $service->update($request->all());

        return redirect()->route('service-index');
    }
}
