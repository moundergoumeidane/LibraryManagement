<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        return view('profile.index')->with('user',$user);
    }

    public function edit()
    {
        $user = auth()->user();
        return view('profile.edit')->with('user',$user);
    }

    public function update(Request $request)
    {
        $data=$request->validate([
            "last_name"=>"required|string|max:50",
            "first_name"=>"required|string|max:50",
            "password"=>"string",
        "email"=>"required|string|unique:users,email,".auth()->user()->getAuthIdentifier(),

        ]);
        $p = auth()->user();
        $p->update($data);
        return redirect()->route('profile.index');
    }
}
