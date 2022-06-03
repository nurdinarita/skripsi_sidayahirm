<!DOCTYPE html>
<html>
<head>
	<title>Data Santri</title>
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
		<h5>LAPORAN DATA SANTRI</h4>
    </center>

 
	<table class='table table-bordered'>
        <thead>
            <tr>
                <th>#</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>tanggal_lahir</th>
                <th>Tempat Lahir</th>
                <th>Alamat</th>
                <th>Nama Ayah</th>
                <th>Nama Ibu</th>
                <th>Tahun Masuk</th>
                <th>Mukim/Tidak</th>
                <th>Provinsi</th>
                <th>Kabupaten</th>
            </tr>
        </thead>
		<tbody>
            @foreach($santri as $s)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$s->nik}}</td>
                <td>{{$s->nama}}</td>
                <td>{{$s->gender}}</td>
                <td>{{$s->tanggal_lahir}}</td>
                <td>{{$s->tempat_lahir}}</td>
                <td>{{$s->alamat}}</td>
                <td>{{$s->nama_ayah}}</td>
                <td>{{$s->nama_ibu}}</td>
                <td>{{$s->tahun_masuk}}</td>
                <td>{{$s->mukim_tidak}}</td>
                <td>{{$s->provinsi}}</td>
                <td>{{$s->kabupaten}}</td>
            </tr>
            @endforeach
		</tbody>
	</table>
 
</body>
</html>