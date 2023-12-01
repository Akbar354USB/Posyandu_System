<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function addUser(){
        return view('manage_user.add_user');
    }

    public function indexUser(){
        $user = User::paginate(5);

        return view('manage_user.index_user', compact('user'));
    }

    public function destroyUser($id){
        $user = User::where("id", $id)->first();
        $user->delete();

        return redirect()->route('user-index');
    }

    public function store(Request $request){
        
        User::create($request->all());
        return redirect()->route('user-index');
    }
}
