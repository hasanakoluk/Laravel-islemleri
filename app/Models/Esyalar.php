<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Esyalar extends Model
{
    use HasFactory;
    protected $table = "beyazesya";
    protected $fillable = ["urunAdi","urunTipi","created_at","uptadet_at"];
}
