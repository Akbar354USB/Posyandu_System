<?php

namespace App\Http\Controllers;


class KbController extends Controller
{
    public function index(){
        return view('Induk.KB.index');
    }

    public function create(){
        return view('Induk.KB.create');
    }
}
