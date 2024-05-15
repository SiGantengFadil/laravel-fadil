<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// import model
use App\Models\Artikel;
class ArtikelController extends Controller
{
    //melihat semua data
    public function getArtikel()
    {
        // melihat semua data yang ada didalam model "Movie"
        $artikels = Artikel::all();
        // dump data atau melihat isi data dari sebuah variabel
        // dd($movies);
        // passing data movie ke view 'movie.index'
        return view('artikel.index', compact('artikels'));
    }
    public function getArtikelById($id)
    {
        $artikel = Artikel::findOrFail($id);
        return view ('artikel.show', compact('artikel'));
    }
    public function getArtikelByKategori($kategori)
    {
        $artikel = Artikel::where('kategori', $kategori)->get();
        return view ('artikel.kategori', compact('artikel'));
    }
}