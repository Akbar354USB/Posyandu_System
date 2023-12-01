<?php

namespace App\Http\Controllers;

use App\Models\Fertile;
use App\Models\Kb;
use App\Models\Pregnant;
use App\Models\Toddler;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $balita = Toddler::all();
        $kb = Kb::all();
        $hamil = Pregnant::all();
        $pus = Fertile::all();
        return view('Admin.dashboard', compact('balita', 'kb', 'hamil', 'pus'));
    }
}
