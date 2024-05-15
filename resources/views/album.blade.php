@php
 $album1 = \App\models\AlbumMusik::all();
 $album2 = \App\models\AlbumMusik::where('tahun','2023')->orderBy('id','desc') ->get();
 $album3 = \App\models\AlbumMusik::where('tahun','2023')->orderBy('id','desc') ->first();
 $album4 = \App\models\AlbumMusik::where('tahun','2023')->orderBy('id','desc') ->find(5);
 @endphp

{{-- Pakai Foreach --}}
<h1 style="color: rgba(36, 2, 44, 0.78)">Menampilkan Semua Data</h1>
@foreach ($album1 as $data)
<h1>Id : {{ $data->id}}<h1>
<h1>Judul : {{ $data->judul}}<h1>
<h1>Tahun : {{ $data->tahun}}<h1>
<h1>Cover Album: {{ $data->cover_album}}<h1>
<hr>
@endforeach

<h1 style="color: forestgreen">Menampilkan Semua Data Yang Di filter</h1>
@foreach ($album2 as $data)
    <h1>Id : {{ $data->id}}<h1>
    <h1>Judul : {{ $data->judul}}<h1>
    <h1>Tahun : {{ $data->tahun}}<h1>
    <h1>Cover Album: {{ $data->cover_album}}<h1>
    <hr>
@endforeach

{{-- Tanpa Foreach (first) --}}
<h1 style="color:blue">Menampilkan Satu Data</h1>
<h1>Tanpa Foreach</h1>
<h1>Id : {{ $album3->id ?? 'Null'}}<h1>
<h1>Judul : {{ $album3->judul ?? 'Null'}}<h1>
<h1>Tahun : {{ $album3->tahun ?? 'Null'}}<h1>
<h1>Cover Album: {{ $album3->cover_album ?? 'Null'}}<h1>
<hr>


{{-- Tanpa Foreach (Find) --}}
<h1 style="color:blueviolet">Menampilkan Data Yang Dipilih</h1>
<h1>Tanpa Foreach</h1>
<h1>Id : {{ $album4->id ?? 'Null'}}<h1>
<h1>Judul : {{ $album4->judul ?? 'Null'}}<h1>
<h1>Tahun : {{ $album4->tahun ?? 'Null'}}<h1>
<h1>Cover Album: {{ $album4->cover_album ?? 'Null'}}<h1>
<hr>


