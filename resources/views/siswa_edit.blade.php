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
                    CRUD Data siswa - <strong>EDIT DATA</strong> - <a href="https://www.smknegeri1garut.sch.id/" target="_blank">www.smkn1garut.sch.id</a>
                </div>
                <div class="card-body">
                    <a href="/siswa" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
 
                    <form method="POST" action="/siswa/update/{{ $siswa->id }}"> 
 
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control" placeholder="Nama siswa .." value=" {{ $siswa->nama }}">
 
                            @if($errors->has('nama'))
                                <div class="text-danger">
                                    {{ $errors->first('nama')}}
                                </div>
                            @endif
 
                        </div>
 
                        

                        <td>
                                   
                        <div class="form-group">
                            <select   class="form-control" name="kelas_id" placeholder="kelas_id ..">
                            @foreach ($kelas as $k)
                            <option value=" {{ ($k->id) }}">{{$k->nama_kelas}}</option>
                            @endforeach
                            </select>
                            @if($errors->has('kelas_id'))
                                <div class="text-danger">
                                    {{ $errors->first('kelas_id')}}
                                </div>
                            @endif                  
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