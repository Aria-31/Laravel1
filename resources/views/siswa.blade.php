<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>siswa</title>
</head>
<body>
   <h1>Detail Siswa</h1>
   <h2>Ini adalah detail siswa dari nis {{ $data['nis'] }}</h2>
   <table>
    <tr>
        <td>NIS</td>
        <td>:</td>
        <td>{{$data['nis']}}</td>
    </tr>
    <tr>
        <td>Nama Siswa</td>
        <td>:</td>
        <td>{{$data['nama_siswa']}}</td>
    </tr>
    <tr>
        <td>Jurusan</td>
        <td>:</td>
        <td>{{$data['jurusan']}}</td>
    </tr>
    <tr>
        <td>Tingkat</td>
        <td>:</td>
        <td>{{$data['tingkat']}}</td>
    </tr>
    <tr>
        <td>Ekskul</td>
        <td>:</td>
        <td>{{$data['ekskul']}}</td>
    </tr>
   </table>
</body>
</html>
