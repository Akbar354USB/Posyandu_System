<?php

namespace App\Http\Controllers;

use App\Charts\KembangbayiChart;
use Illuminate\Http\Request;

class UptoddlerController extends Controller
{
    public function index(KembangbayiChart $chart){
        $data['chart'] = $chart->build();
    return view('statistik.index', ['chart' => $chart->build()]);
    }

    // public function index(){
        
    //     return view('statistik.index');
    // }
}

//MonthlyUsersCh