<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>SMKN 1 Garut</title>
    </head>
    <body>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
 
            <a class="navbar-brand" href="#">
                    <img src="https://www.smknegeri1garut.sch.id/tampilan/img/logo.png" width="60" height="60" alt="Malas Ngoding">
                    SMKN 1 Garut
                    </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="/siswa">Data Siswa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/kelas">Data Kelas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/pelajaran">Mata Pelajaran</a>
                        </li>                   
                        <li class="nav-item">
                            <a class="nav-link"href="/jadwal">Jadwal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"href="/logout">Logout</a>
                        </li>
                    </ul>

                </div>

            </nav>
            
            <div class="card mt-5">
                <div class="card-header text-center">
                    CRUD Data Siswa - <a href="https://www.smknegeri1garut.sch.id/" target="_blank">www.smkn1garut.sch.id</a>
                </div>
                <div class="card-body">
                    <a href="/siswa/tambah" class="btn btn-primary">Input Siswa Baru</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Kelas</th>
                                <th>OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($siswa as $s)
                            <tr>
                                <td>{{ $s->nama }}</td>
                                <td>{{ $s->kelas->nama_kelas ?? 'belum ada kelas'}}</td>
                                
                                
                                <td>
                                
                                    <a href="/siswa/edit/{{ $s->id }}" class="btn btn-warning">Edit</a>
                                    <button onclick="confirmDelete({{ $s->id }})" class="btn btn-danger">Hapus</button>
                               
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
            window.location.href = '/siswa/hapus/' + id; // Ganti dengan URL penghapusan sesuai proyek Anda
        }
    });
}
</script>
    </body>
</html>