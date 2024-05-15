<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\PenulisController;
use App\Http\controllers\MovieController;
use App\Http\controllers\MyController;
use App\Models\Film;
use App\Models\Sekola;
use App\Models\Siswa;
use App\Models\AlbumMusik;
use GuzzleHttp\Psr7\Request;
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

Route::get('/halaman2', function () {
    return view('animals');
});

Route::get('/halaman3', function () {
    return view('fruits');
});

Route::get('/about', function () {
    $nama = "muhammad Bentar";
    $jenis_kelamin = "Laki-Laki";
    $pendidikan_terakhir = "SMK";
    $pekerjaan = "Pelajar";
    return view('Biodata',compact('nama','jenis_kelamin','pendidikan_terakhir','pekerjaan'));
});

//parameter
Route::get('/sample/{nama}', function (Request $request, $nama) {
    $nama2 = $nama;
    return view('sample',compact('nama2'));
});

Route::get('sekola', function(){
    return view ('Sekola');
});

Route::get('siswa', function(){
    return view ('siswa');
});
Route::get('AlbumMusik', function(){
    return view ('Album');
});

Route::get('AlbumMusik', function(){
    return view ('Album');
});

Route::get('film', function(){
    return view ('Film');
});

Route::get('film/{id}', function(int $id){
    return view('detail-film', ['film' => Film::findOrFail($id)]);
});

//route with controller
Route::get('perkenalan',[App\Http\controllers\MyController::class,'introduce']);
Route::get('hewan', [MyController::class,'animals']);

//route movie
route::get('movie', [MovieController::class, 'getMovie']);
route::get('movie/{id}', [MovieController::class, 'getMovieById']);

route::get('artikel', [ArtikelController::class, 'getArtikel']);
route::get('artikel/{id}', [ArtikelController::class, 'getArtikelById']);
Route::get('artikel/kategori/{kategori}', [ArtikelController::class, 'getArtikelByKategori']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//route card

Route::resource('penulis', PenulisController::class);
