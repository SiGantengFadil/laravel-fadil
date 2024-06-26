@extends('layouts.layout')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-header">Data Penulis
                <a href="{{route('penulis.create')}}" class="btn btn-sm btn-primary" style="float: right">Tambah</a>
            </div>
            <div class="card-boby">
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th>No</th>
                            <th>Nama Penulis</th>
                            <th>Aksi</th>
                        </tr>
                        @php $no = 1; @endphp
                        @foreach ($penulis as $item)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$item->nama_penulis}}</td>
                            <td>
                                <form action="{{route('penulis.destroy', $item->id)}}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <a href="{{route('penulis.edit', $item->id)}}" class="btn btn-sm btn-success">Edit
                                    </a>
                                    <a href="{{route('penulis.show', $item->id)}}" class="btn btn-sm btn-warning">Show
                                    </a>
                                    <button class="btn btn-sm btn-danger" type="submit"
                                        onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
