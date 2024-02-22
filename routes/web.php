<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Nama saya';
 });
 
 
 Route::get('/user/{name}', function ($name) {
    return 'Nama saya. $name';
 });
 




//Route::get('/', function () {
  // return ('2141764092/Rininovitaaa');
//});

//Route::get('/hello', function () {
  // return ('2141764092/Rininovitaaa. hello');
//});


//Route::get('/', function () {
  //  return ('Selamat Datang. hello');
//});



