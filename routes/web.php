<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
    //return view('welcome');
//});

Route::get('/', function () {
    return view('Home', [
        "link" => "home",
        "title" => "fahriza || home"
    ]);
});
Route::get('/about', function () {
    return view('about', [
        "link" => "about",
        "title" => "fahriza || about",
        "nama" => "Fahriza Fattah",
        "Instagram" => "@fahrizafgh;_",
        "gambar" => "yaaa.jpeg"
    ]);
});
Route::get('/gallery', function () {
    return view('gallery', [
        "link" => "gallery",
        "title" => "fahriza || gallery",
    ]);
});
