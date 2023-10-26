<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat Pagination Pada Laravel - www.malasngoding.com</title>
	link href="{{ asset('/assets/css/animate.css') }}" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
</head>
<body>
 
	<style type="text/css">
		.pagination li{
			float: left;
			list-style-type: none;
			margin:5px;
		}
	</style>
 
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Siswa</h3>
 
	<p>Cari Data Pegawai :</p>
	<form action="/siswa/cari" method="GET">
		<input type="text" name="cari" placeholder="Cari Siswa .." value="{{ old('cari') }}">
		<button type="submit">Cari</button>
	</form>
		
	<br/>
 
	<table border="1">
		<tr>
			<th>Nama</th>
			{{-- <th>Jabatan</th>
			<th>Umur</th>
			<th>Alamat</th> --}}
		</tr>
		@foreach($siswa as $s)
		<tr>
			<td>{{ $s->nama }}</td>
			{{-- <td>{{ $p->pegawai_jabatan }}</td>
			<td>{{ $p->pegawai_umur }}</td>
			<td>{{ $p->pegawai_alamat }}</td> --}}
		</tr>
		@endforeach
	</table>
 
	<br/>
	Halaman : {{ $siswa->currentPage() }} <br/>
	Jumlah Data : {{ $siswa->total() }} <br/>
	Data Per Halaman : {{ $siswa->perPage() }} <br/>
 
 
	{{ $siswa->links() }}
 
 
</body>
</html>