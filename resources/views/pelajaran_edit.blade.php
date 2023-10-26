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
                    CRUD Data Pelajaran - <strong>EDIT DATA</strong> - <a href="https://www.smknegeri1garut.sch.id/" target="_blank">www.smkn1garut.sch.id</a>
                </div>
                <div class="card-body">
                    <a href="/pelajaran" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
 
                    <form action="/pelajaran/update/{{ $pelajaran->id }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <div class="form-group">
                            <label>Nama Pelajaran</label>
                            <input type="text" name="nama_pelajaran" class="form-control" placeholder="Nama pegawai .." value=" {{ $pelajaran->nama_pelajaran }}">
 
                            @if($errors->has('nama_pelajaran'))
                                <div class="text-danger">
                                    {{ $errors->first('nama_pelajaran')}}
                                </div>
                            @endif
 
                        </div>
 
                        <!-- <div class="form-group">
                            <label>jam mulai</label>
                            <input type="datetime-local" id="jam_mulai" name="jam_mulai" value=" {{ $pelajaran->jam_mulai }}">
 
                             @if($errors->has('jam_mulai'))
                                <div class="text-danger">
                                    {{ $errors->first('jam_mulai')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>jam akhir</label>
                            <input type="datetime-local" id="jam_akhir" name="jam_akhir"value=" {{ $pelajaran->jam_akhir }}">
 
                             @if($errors->has('jam_akhir'))
                                <div class="text-danger">
                                    {{ $errors->first('jam_akhir')}}
                                </div>
                            @endif
 
                        </div> -->

                        
 
                        <div class="form-group">
                            <button type="submit">Submit</button>
                        </div>
 
                    </form>
 
                </div>
            </div>
        </div>
    </body>
</html>