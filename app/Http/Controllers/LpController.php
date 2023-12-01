<?php

namespace App\Http\Controllers;

use App\Models\Fertile;
use App\Models\Pregnant;
use App\Models\Report;
use App\Models\Toddler;
use Illuminate\Http\Request;

class LpController extends Controller
{
    public function imageScroll(){
        $report = Report::all();
        $balita = Toddler::all();
        $hamil = Pregnant::all();
        $pus = Fertile::all();
        
        return view('backend.landingPage', compact('report','balita','hamil','pus'));
    }
}
