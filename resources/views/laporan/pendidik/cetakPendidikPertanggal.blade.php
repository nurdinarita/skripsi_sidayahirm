<!DOCTYPE html>
<html>
<head>
	<title>Data Pendidik</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
    <center class="mt-5 mb-2">
		<h5>LAPORAN DATA PENDIDIK</h4>
    </center>

 
	<table class='table table-bordered'>
        <thead>
            <tr>
                <th>#</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>Tanggal Lahir</th>
                <th>Tempat Lahir</th>
                <th>Alamat</th>
                <th>NPWP</th>
                <th>Pendidikan Terakhir</th>
                <th>Riwayat Pendidikan Terakhir</th>
                <th>Mata Pelajaran</th>
                <!-- <th>Judul Kitab</th> -->
            </tr>
        </thead>
        <tbody>
            @foreach($pendidik as $p)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$p->nik}}</td>
                <td>{{$p->nama}}</td>
                <td>{{$p->gender}}</td>
                <td>{{$p->tanggal_lahir}}</td>
                <td>{{$p->tempat_lahir}}</td>
                <td>{{$p->alamat}}</td>
                <td>{{$p->npwp}}</td>
                <td>{{$p->pendidikan_terakhir}}</td>
                <td>{{$p->riwayat_pendidikan_terakhir}}</td>
                <td>{{$p->mapel->mapel}}</td>
            </tr>
            @endforeach
        </tbody>
	</table>
 
</body>
</html>