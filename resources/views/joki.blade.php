<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Laravel #20 : Eloquent Laravel</title>
</head>
<body>
 
<h1>Data Pegawai</h1>
<h3>www.malasngoding.com</h3>
 
<ul>
	@foreach($joki as $j)
		<li>{{ "Nama : ". $j->nama . ' | Alamat : ' . $j->alamat }}</li>
	@endforeach
</ul>
 
</body>
</html>