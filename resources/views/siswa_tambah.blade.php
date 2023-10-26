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
                    CRUD Data siswa - <strong>TAMBAH DATA</strong> - <a href="https://www.smknegeri1garut.sch.id/" target="_blank">www.smkn1garut.sch.id</a>
                </div>
                <div class="card-body">
                    <a href="/siswa" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
                    <form method="post" action="/siswa/store">
 
                        {{ csrf_field() }}
 
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control" placeholder="Nama siswa ..">
 
                            @if($errors->has('nama'))
                                <div class="text-danger">
                                    {{ $errors->first('nama')}}
                                </div>
                            @endif
 
                        </div>
 
                        <!-- <div class="form-group">
                            <label>ID Kelas</label>
                            <textarea name="kelas_id" class="form-control" placeholder="Id Kelas .."></textarea>
 
                             @if($errors->has('kelas_id'))
                                <div class="text-danger">
                                    {{ $errors->first('kelas_id')}}
                                </div>
                            @endif
 
                        </div>
  -->
                        <div class="form-group">
                            <label for="position-option">Kelas</label>
                            <select class="form-control" id="position-option" name="kelas_id">
                            @foreach ($kelas as $k)
                                <option value="{{ $k->id }}">{{ $k->nama_kelas }}</option>
                            @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>
 
                    </form>
 
                </div>
            </div>
        </div>
    </body>
</html>