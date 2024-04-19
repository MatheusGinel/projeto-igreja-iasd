<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaLogadaController extends Controller
{
    public function home(Request $request)
    {
        return view('site.home');
    }
}
