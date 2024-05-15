@extends('layout.layout')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$artikel->judul}}</div>
                <img src="{{$artikel->foto}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">{{$artikel->konten}}</p>
                    <p>Penulis : {{$artikel->penulis}}</p>
                    <p>Kategori : <a href="{{ url('artikel/kategori/' . $artikel->kategori) }}">{{ $artikel->kategori
                    }}</a></p>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection