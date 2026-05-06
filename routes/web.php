<?php

use App\Http\Controllers\FakultasController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

route::resource('/fakultas', FakultasController ::class);    

// route::get('/fakultas',function(){
//     return view ('fakultas.list-fakultas');
// });

// route::get('/edit',function(){
//     return view ('fakultas.edit-fakultas');
// });

// route::get('/detail',function(){
//     return view ('fakultas.detail-fakultas');
// });