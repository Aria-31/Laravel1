@extends('layouts.mainlayout')

@section('title', 'kelas')

@section('content')
<h1>Halo ini halaman Kelas</h1>
<table class="table table-bordered table table-striped table-hover">
    <tr>
        <th>No</th>
        <th>Nama Kelas</th>
    </tr>
@foreach ($kelas as $data)

      <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$data->name}}</td>
      </tr>

@endforeach

</table>
@endsection
