@php
 $siswa = \App\models\siswa::where('kelas','Xl RPL 2')->orderBy('id','desc') ->get();
 $siswa2 = \App\models\siswa::find(3);
 $siswa3 = \App\models\siswa::where('kelas', 'Xl RPL 3')->orderBy('id','desc')->first();
 //->where('nama','maulana')
 //->where('jenis_kelamin','1')


@endphp
    
     <h1>First</h1>
    <h1>ID : {{ $siswa3->id ?? 'Null'}}<h1>
    <h1>Nama : {{ $siswa3->nama ?? 'Null'}}<h1>
    <h1>Kelas : {{ $siswa3->kelas ?? 'Null'}}<h1>
    <h1>Jenis Kelamin : {{ $siswa3->jenis_kelamin ?? 'Null'}}<h1>
    <hr>

    {{-- <h1>Tanpa Foreach</h1>
    <h1>ID : {{ $siswa->id ?? 'Null'}}<h1>
    <h1>Nama : {{ $siswa->nama ?? 'Null'}}<h1>
    <h1>Kelas : {{ $siswa->kelas ?? 'Null'}}<h1>
    <h1>Jenis Kelamin : {{ $siswa->jenis_kelamin ?? 'Null'}}<h1>
    <hr> --}}

{{-- @foreach ($siswa as $data)
    <h1>Id : {{ $data->id}}<h1>
    <h1>Nama : {{ $data->nama}}<h1>
    <h1>Kelas : {{ $data->kelas}}<h1>
    <h1>Jenis Kelamin : {{ $data->jneis_kelamin}}<h1>
    <hr>
@endforeach  --}} 
