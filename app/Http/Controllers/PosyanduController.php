<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PosyanduController extends Controller
{
    public function index(){
        return view('Induk.Posyandu.index');
    }

    public function create(){
        return view('Induk.Posyandu.create');
    }
}
