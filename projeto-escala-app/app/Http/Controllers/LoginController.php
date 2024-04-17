<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function entrar(){
        return view('site.entrar');
    }
}
