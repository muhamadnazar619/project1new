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
                    CRUD Data Hari - <strong>TAMBAH DATA</strong> - <a href="https://www.smknegeri1garut.sch.id/" target="_blank">www.smkn1garut.sch.id</a>
                </div>
                <div class="card-body">
                    <a href="/jadwal" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
                    <form method="post" action="/jadwal/store">
 
                        {{ csrf_field() }}

                        
 
                        <div class="form-group">
                            
                        <select class="form-control" name="hari" placeholder= "Hari Jadwal ..">
                        <option selected>Hari</option>
                        <option value="1">Senin</option>
                        <option value="2">Selasa</option>
                        <option value="3">Rabu</option>
                        <option value="4">Kamis</option>
                        <option value="5">Jumat</option>
                        <option value="6">Sabtu</option> 

                           @if($errors->has('hari'))
                                <div class="text-danger">
                                    {{ $errors->first('hari')}}
                                </div>
                            @endif
                        </select>
                        
                        </div>
                        <br>
                        
                        
                        <div class="form-group">
                        <select class="form-control" name="pelajaran_id" placeholder= "pelajaran_id ..">
                        @foreach ($pelajaran as $p)
                        <option value="{{$p->id }}"> {{$p->nama_pelajaran}}</option> 
                           
                        @endforeach
                            @if($errors->has('pelajaran_id'))
                                <div class="text-danger">
                                    {{ $errors->first('pelajaran_id')}}
                                </div>
                            @endif
                        </select>
                        </div>

                        <div class="form-group">
                           
                            <select   class="form-control" name="kelas_id" placeholder="kelas_id ..">
                            @foreach ($kelas as $k)
                            <option value="{{$k->id }}">{{$k->nama_kelas}}</option>

                            @endforeach
                             @if($errors->has('kelas_id'))
                                <div class="text-danger">
                                    {{ $errors->first('kelas_id')}}
                                </div>
                            @endif
                            </select>
                        </div>

                        <div class="form-group">
                            <label>jam Mulai</label>
                            <input type="time" id="jam_mulai" name="jam_mulai">
 
                             @if($errors->has('jam_mulai'))
                                <div class="text-danger">
                                    {{ $errors->first('jam_mulai')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>akhir</label>
                            <input type="time" id="jam_akhir" name="jam_akhir">

                             @if($errors->has('jam_akhir'))
                                <div class="text-danger">
                                    {{ $errors->first('jam_akhir')}}
                                </div>
                            @endif
 
                        </div>
 
                        <!-- {{-- <div class="form-group">
                            <label>Alamat</label>
                            <textarea name="alamat" class="form-control" placeholder="Alamat pegawai .."></textarea>
 
                             @if($errors->has('alamat'))
                                <div class="text-danger">
                                    {{ $errors->first('alamat')}}
                                </div> --}}
                            {{-- @endif
 
                        </div> --}} -->
 
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>
 
                    </form>
 
                </div>
            </div>
        </div>
    </body>
</html>