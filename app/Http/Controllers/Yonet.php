<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Yonet extends Controller
{
    public function site()
    {
        $data["yazi1"]="Crud İşlemleri";
        $data["yazi2"]="Web sayfamıza hoş geldiniz";
        return view("web",$data);
    }
}
