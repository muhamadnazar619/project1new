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
                    CRUD Data Jadwal - <strong>EDIT DATA</strong> - <a href="https://www.smknegeri1garut.sch.id/" target="_blank">www.smkn1garut.sch.id</a>
                </div>
                <div class="card-body">
                    <a href="/jadwal" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
 
                    <form method="post" action="/jadwal/update/{{ $jadwal->id }}">
 
                    
                    {{ csrf_field() }}
                        {{ method_field('PUT') }}

                        <div class="form-group">
                            <select id="dropdown" class="form-control" name="hari">
                                <option value="0" {{ $jadwal->hari == "0" ? 'selected' : '' }}>Hari</option>
                                <option value="Senin" {{ $jadwal->hari == "Senin" ? 'selected' : '' }}>Senin</option>
                                <option value="Selasa" {{ $jadwal->hari == "Selasa" ? 'selected' : '' }}>Selasa</option>
                                <option value="Rabu" {{ $jadwal->hari == "Rabu" ? 'selected' : '' }}>Rabu</option>
                                <option value="Kamis" {{ $jadwal->hari == "Kamis" ? 'selected' : '' }}>Kamis</option>
                                <option value="Jumat" {{ $jadwal->hari == "Jumat" ? 'selected' : '' }}>Jumat</option>
                                <option value="Sabtu" {{ $jadwal->hari == "Sabtu" ? 'selected' : '' }}>Sabtu</option>
                            </select>

                            @if($errors->has('hari'))
                                <div class="text-danger">
                                    {{ $errors->first('hari') }}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <select class="form-control" name="pelajaran_id" placeholder= "pelajaran_id ..">
                            @foreach ($pelajaran as $p) 
                            <option value="{{$p->id }}" {{ $jadwal->pelajaran_id == $p->id ? 'selected' : '' }}> {{$p->nama_pelajaran}}</option> 

                            @endforeach
                            @if($errors->has('pelajaran_id'))
                                <div class="text-danger">
                                    {{ $errors->first('pelajaran_id')}}
                                </div>
                            @endif
                        </div>
                            </select>
                        </div>

                        <div class="form-group">
                            <select   class="form-control" name="kelas_id" placeholder="kelas_id ..">
                            @foreach ($kelas as $k)
                            <option value="{{ ($k->id) }}" {{ $jadwal->kelas_id == $k ->id ? 'selected' : '' }}> {{$k->nama_kelas}}</option>

                            @endforeach                        
                            @if($errors->has('kelas_id'))
                                <div class="text-danger">
                                    {{ $errors->first('kelas_id')}}
                                </div>
                            @endif   
                        </div>
                            </select>               
                        </div>
                        

                          <div class="form-group">
                            <label>jam mulai</label>
                            <input type="time" id="jam_mulai" name="jam_mulai" value="{{ old('jam_mulai', $jadwal->jam_mulai) }}">
 
                             @if($errors->has('jam_mulai'))
                                <div class="text-danger">
                                    {{ $errors->first('jam_mulai')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>jam akhir</label>
                            <input type="time" id="jam_akhir" name="jam_akhir" value="{{ old('jam_akhir', $jadwal->jam_akhir) }}">
 
                             @if($errors->has('jam_akhir'))
                                <div class="text-danger">
                                    {{ $errors->first('jam_akhir')}}
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
        <script>
                                const dropdown = document.getElementById("dropdown");
                                const selectedOption = document.getElementById("selected-option");

                                dropdown.addEventListener("change", function() {
                                    selectedOption.innerHTML = dropdown.value;
                                });
                                selectedOption.innerHTML = dropdown.value;
                                </script>
    </body>
   
</html>