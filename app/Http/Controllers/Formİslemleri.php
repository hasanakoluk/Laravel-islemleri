<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Formİslemleri extends Controller
{
    public function Gorunum()
    {
        return view("form");
    }

    public function sonuc(Request $request)
    {
       echo $request->metin;
    }
}
