<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
    <title>SMKN 1 GARUT</title>
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
 
        <a class="navbar-brand" href="#"><img src="https://www.smknegeri1garut.sch.id/tampilan/img/logo.png" width="60" height="60" alt="Malas Ngoding">SMKN 1 Garut</a>

 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
 <span class="navbar-toggler-icon"></span>
 </button>

 <div class="collapse navbar-collapse" id="navbarSupportedContent">

     <ul class="navbar-nav mr-auto">
         <li class="nav-item">
             <a class="nav-link" href="/siswa">Data Siswa</a>
         </li>
         <li class="nav-item">
             <a class="nav-link" href="/kelas">Data Kelas</a>
         </li>
         <li class="nav-item">
             <a class="nav-link" href="/pelajaran">Mata Pelajaran</a>
         </li>                   
         <li class="nav-item active">
             <a class="nav-link"href="/jadwal">Jadwal</a>
         </li>
                        <li class="nav-item">
                            <a class="nav-link"href="/logout">Logout</a>
                        </li>
     </ul>

     <!-- <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Cari" aria-label="Cari">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cari</button>
      </form> -->

 </div>

</nav>
        <div class="card mt-5">
            <div class="card-header text-center">
                CRUD Data Jadwal - <a href="https://www.smknegeri1garut.sch.id/" target="_blank">www.smkn1garut.sch.id</a>
            </div>
            <div class="card-body">
                <a href="/jadwal/tambah" class="btn btn-primary">Input Hari Baru</a>
                <br />
                <br />
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>Hari</th>
                            <th>Pelajaran</th>
                            <th>Kelas</th>
                            <th>jam_mulai</th>
                            <th>jam_akhir</th>
                            <th>OPSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($jadwal as $j)
                            <tr>
                               {{--@if($j->hari == '3')
                                <td>Rabu</td>
                                @endif --}} 
                                <td>{{ $j->hari }}</td>
                                <td>{{ $j->pelajaran->nama_pelajaran ?? '' }}</td>
                                <td>{{ $j->kelas->nama_kelas ?? '' }}</td>
                                <td>{{ $j->jam_mulai }}</td>
                                <td>{{ $j->jam_akhir }}</td>
                                
                                <td>
                                    <a href="/jadwal/edit/{{ $j->id }}" class="btn btn-warning">Edit</a>
                                    <button onclick="confirmDelete({{ $j->id }})" class="btn btn-danger">Hapus</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script>
// Fungsi untuk menampilkan SweetAlert saat pengguna mengklik tombol hapus
function confirmDelete(id) {
    Swal.fire({
        title: 'Apakah Anda yakin?',
        text: 'Anda tidak akan dapat mengembalikan ini!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Ya, hapus!',
        cancelButtonText: 'Batal'
    }).then((result) => {
        if (result.value) {
            // Jika pengguna menekan "Ya", redirect atau kirim form penghapusan di sini
            window.location.href = '/jadwal/hapus/' + id; // Ganti dengan URL penghapusan sesuai proyek Anda
        }
    });
}
</script>
</body>
