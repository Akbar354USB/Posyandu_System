<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BalitaController extends Controller
{
    public function index(){
        return view('Induk.Balita.index');
    }

    public function create(){
        return view('Induk.Balita.create');
    }
}
