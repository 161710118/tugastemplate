@extends('layouts.3')
@section('konten')
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    <div class="jumbotron">
       <center><h1>---data tabel!---</h1></center>
        <p></p>
      </div>
<div class="container">
	<table border="2" class="tables">
        <th>Id</th>
        <th>Nim</th>
        <th>Nama</th>
        <th>Tempat Lahir</th>
        <th>Tanggal lahir</th>
        <th>Alamat</th>
        <th>Cita-Cita</th>
        <th>Hobi</th>
   @foreach ($c as $gg)
   <tr>
 	<td>{{$gg -> id}}</td>
 	<td>{{$gg -> NIS}}</td>
 	<td>{{$gg -> Nama_Siswa}}</td>
 	<td>{{$gg -> Tempat_Lahir}}</td>
 	<td>{{$gg -> Tanggal_Lahir}}</td>
 	<td>{{$gg -> Alamat}}</td>
 	<td>{{$gg -> Cita_cita}}</td>
 	<td>{{$gg -> Hobi}}</td>
 	@endforeach
</tr>
</table>
<div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
           <br> <li><center><a href="1" button type="button" class="btn btn-lg btn-primary">Kembali Ke Halaman Awal</button></a></li></center></br>>
            </ul>
        </div>
</body>
</html>
@endsection