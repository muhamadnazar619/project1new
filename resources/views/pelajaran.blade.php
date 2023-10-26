

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
 
                    <!-- <a class="navbar-brand" href="#">Tukang Ngoding</a> -->
                    <a class="navbar-brand" href="#">
                    <img src="https://www.smknegeri1garut.sch.id/tampilan/img/logo.png" width="60" height="60" alt="Malas Ngoding">
                    SMKN 1 Garut
                    </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item ">
                            <a class="nav-link" href="/siswa">Data Siswa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/kelas">Data Kelas</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="/pelajaran">Mata Pelajaran</a>
                        </li>                   
                        <li class="nav-item">
                            <a class="nav-link"href="/jadwal">Jadwal</a>
                        </li>
                    </ul>

                </div>

                </nav>
            <div class="card mt-5">
                <div class="card-header text-center">
                    CRUD Data Pelajaran - <a href="https://www.smknegeri1garut.sch.id/" target="_blank">www.smkn1garut.sch.id</a>
                </div>
                <div class="card-body">
                    <a href="/pelajaran/tambah" class="btn btn-primary">Input Pelajaran Baru</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Nama Pelajaran</th>
                                <!-- <th>Jam mulai</th>
                                <th>Jam akhir</th> -->
                                <th>OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pelajaran as $p)
                            <tr>
                                <td>{{ $p->nama_pelajaran }}</td>
                                <!-- <td>{{ $p->jam_mulai }}</td>
                                <td>{{ $p->jam_akhir }}</td> -->
                                <td>
                                    <a href="/pelajaran/edit/{{ $p->id }}" class="btn btn-warning">Edit</a>
                                    <button onclick="confirmDelete({{ $p->id }})" class="btn btn-danger">Hapus</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
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
            window.location.href = '/pelajaran/hapus/' + id; // Ganti dengan URL penghapusan sesuai proyek Anda
        }
    });
}
</script>

</html>