<?php

namespace App\Http\Controllers\Central;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CentralDomainControlellr extends Controller
{
    public function register(){
        return view('register');
    }
    public function store(Request $request){
        $request->validate([
            'email'=>'required|unique:users,email',
        ]);
        $user=User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
        ]);
        return redirect()->back();
    }
}
