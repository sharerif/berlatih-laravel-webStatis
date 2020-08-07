<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
        return view('registerPage');
    }

    public function welcome(Request $r){
        $fn = $r['first_name'] . ' ' . $r['last_name'];
        return view('welcomePage', ['fullName' => strtoupper($fn)]);
    }
}
