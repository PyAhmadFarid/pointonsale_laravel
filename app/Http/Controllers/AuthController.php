<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginView(){

        return view('auth.login');
    }

    public function login(Request $request){
        $cre = $request->validate([
            "email"=>"required",
            "password"=>"required",
        ]);


        if(Auth::attempt($cre,$request->ingat)){
            return "anda login";
        }

        return "gagal login";

    }
}
