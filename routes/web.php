<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});




//test route

Route::get('xx',function (){
    return view('panel.layouts.app');
});
