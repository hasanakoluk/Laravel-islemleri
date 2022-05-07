<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Esyalar;
class Crudİslemleri extends Controller
{
    public function List()
    {
        $esya = Esyalar::where("id",2)->first();
        echo $esya->urunAdi;
    }

    public function Add()
    {
        Esyalar::create([
           "urunAdi"=>"Dolap",
           "urunTipi"=>"gardrop"
        ]);
    }

    public function Update()
    {
        Esyalar::whereId(2)->update([
           "urunAdi"=>"çekmece",
           "urunTipi"=>"mutfak"
        ]);
    }

    public function Delete()
    {
        Esyalar::whereId(3)->Delete();
    }

}
