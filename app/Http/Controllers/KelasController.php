<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use Illuminate\Http\Request;
use App\Models\Joki;
use App\Models\Kelas;
use App\Models\Siswa;

class KelasController extends Controller
{

        public function index()
        {
            
            $kelas = Kelas::with('siswa')->with('jadwal.pelajaran')->get();
            return view('kelas', ['kelas' => $kelas]);
        }

        public function tambah()
        {
            $kelas = Kelas::all();
            return view('kelas_tambah');
        }

        public function store(Request $request)
        {
            $this->validate($request,[
                'nama_kelas' => 'required'

            ]);

           
                $kelas = new Kelas();

                $kelas->nama_kelas = $request->nama_kelas;
                $kelas->save();
           
            
            return redirect('/kelas');
        }
            public function edit($id)
            {
                $kelas = Kelas::find($id);
                return view('kelas_edit', ['kelas' => $kelas]); 
            }
            
            public function update($id, Request $request)
{
    $this->validate($request,[
	   'nama_kelas' => 'required'
	   
    ]);
 
    $kelas = Kelas::find($id);
    $kelas->nama_kelas = $request->nama_kelas;
    $kelas->save();
    return redirect('/kelas');
}

public function detail($id)
{
    $kelas = Kelas::find($id);
    $siswa = Siswa::where('kelas_id', $id)->get();
    $jadwal = Jadwal::where('kelas_id', $id)->get();
    if (!$kelas) {
        abort(404); // Return a 404 response if the class with the given ID is not found
    }
    return view('kelas_detail',compact('kelas', 'siswa', 'jadwal'));
}


public function delete($id)
{
    $kelas = Kelas::find($id);
    $kelas->delete();
    return redirect('/kelas');
}
}