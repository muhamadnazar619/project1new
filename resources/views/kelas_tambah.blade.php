<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>SMKN 1 GARUT - www.smkn1garut.sch.id</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    CRUD Data Kelas - <strong>TAMBAH DATA</strong> - <a href="https://www.smknegeri1garut.sch.id/" target="_blank">www.smkn1garut.sch.id</a>
                </div>
                <div class="card-body">
                    <a href="/kelas" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
                    <form method="post" action="/kelas/store">
 
                        {{ csrf_field() }}
 
                        <div class="form-group">
                            <label>Kelas</label>
                            <input type="text" name="nama_kelas" class="form-control" placeholder="Nama kelas ..">
 
                            @if($errors->has('nama_kelas'))
                                <div class="text-danger">
                                    {{ $errors->first('nama_kelas')}}
                                </div>
                            @endif
 
                        </div>
 
                        {{-- <div class="form-group">
                            <label>Alamat</label>
                            <textarea name="alamat" class="form-control" placeholder="Alamat pegawai .."></textarea>
 
                             @if($errors->has('alamat'))
                                <div class="text-danger">
                                    {{ $errors->first('alamat')}}
                                </div> --}}
                            {{-- @endif
 
                        </div> --}}
 
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>
 
                    </form>
 
                </div>
            </div>
        </div>
    </body>
</html>