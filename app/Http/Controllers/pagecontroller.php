<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagecontroller extends Controller
{
    //
}
Route::get('/about', function () {
    echo('Nama : Muhammad Azrieal Rhamdan <br> Nim : 2031710169');
});

Route::get('/articles/1', function () {
    echo('halaman artikel dengan id 1');
});

Route::get('/articles/2', function () {
    echo('halaman artikel dengan id 2');
});