<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Yonet;
use App\Http\Controllers\Formİslemleri;
use App\Http\Controllers\Crudİslemleri;

Route::get('/web',[Yonet::class,"site"])->name("web");
Route::get('/form',[Formİslemleri::class,"Gorunum"]);
Route::middleware('arakontrol')->post('/form-sonuc',[Formİslemleri::class,"sonuc"])->name("sonuc");
Route::get('/list',[Crudİslemleri::class,"List"]);
Route::get('/add',[Crudİslemleri::class,"Add"]);
Route::get('/update',[Crudİslemleri::class,"update"]);
Route::get('/delete',[Crudİslemleri::class,"delete"]);
