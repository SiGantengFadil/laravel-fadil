@extends('layout.layout')
@section('content')
<div class="container">
    <div class="row">
        @foreach ($artikels as $artikel )
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="{{$artikel->foto}}" class="card-img-top" alt="..." style="height: 400px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title">{{$artikel->judul}}</h5>
                    <a  href="artikel/{{$artikel->id}}" class="btn btn-danger">Lihat</a>
                    </p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection