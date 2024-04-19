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

Route::get('/', function () {
    return view('welcome');
});

//route basic
route::get('/about',function (){
    return '<h1>Hallo</h1>'
    . 'Selamat Datang di webapp saya<br>'
    . 'laravel, emang keren.';
});

route::get('animals',function () {
    $king = "lion";
    $hewan = ["monkey", "dragonfly", "tiger", "buterfly", "crocodile"];
    return view('animals_page', compact('king', 'hewan'));
});
