@extends('layouts.mainlayout')

{{-- judul konten --}}
@section('title','data siswa')
{{-- isi konten yg akan di tampilkan --}}
@section('content')
     <div class="mt-5">
        
     </div>


    <div class="mt-5">
        <h1>Ini halaman Home</h1>
        <h3>Selamat Datang, {{$nama}}. Role anda adalah {{$role}}</h3>

        @if ($role == 'admin')
        <a href="#" >menuju halaman admin</a>
        @elseif ($role == 'petugas')
        <a href="#" >menuju halaman petugas</a>
        @else
        role tidak ada
        @endif
        <br>
<table class="table table-bordered table table-striped table-hover">
    <tr>
        <th>NIS</th>
        <th>Nama Siswa</th>
        <th>Jurusan</th>
        <th>Tingkat</th>
        <th>Ekskul</th>
      </tr>
        @foreach ($warsel as $siswa)
        <tr>
          <td>{{$siswa['nis']}}</td>
          <td>{{$siswa['nama_siswa']}}</td>
          <td>{{$siswa['jurusan']}}</td>
          <td>{{$siswa['tingkat']}}</td>
          <td>{{$siswa['ekskul']}}</td>

        </tr>
            </br>
        @endforeach
</table>

@endsection
