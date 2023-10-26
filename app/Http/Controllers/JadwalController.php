<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\Kelas;
use App\Models\Pelajaran;
use Illuminate\Http\Request;
use App\Models\Joki;


class JadwalController extends Controller
{

        public function index()
        {
            
            $jadwal = Jadwal::with('pelajaran')->with('kelas')->get();

    
            return view('jadwal', ['jadwal' => $jadwal]);
        }

        public function tambah()
        {
            $pelajaran = Pelajaran::all();
            $kelas = Kelas::all();
            return view('jadwal_tambah', ['kelas' =>$kelas, 'pelajaran' =>$pelajaran]);
        }

        public function store(Request $request)
    {
    	$this->validate($request,[
    		'hari' => 'required' 
    		
    	]);

        $jadwal = new Jadwal();
        $jadwal->hari = $request->hari;
        $jadwal->jam_mulai = $request->jam_mulai;
        $jadwal->jam_akhir = $request->jam_akhir;
        $jadwal->pelajaran_id = $request->pelajaran_id;
        $jadwal->kelas_id = $request->kelas_id;
        $jadwal->save();

 
        // Jadwal::create([
    	// 	'hari' => $request->hari,
        //     'jam_mulai' => $request->jam_mulai,
        //     'jam_akhir' => $request->jam_akhir
            
    		
    	// ]);
 
    	return redirect('/jadwal');
    }

    public function edit($id)
    {
        $jadwal = Jadwal::find($id);
        $pelajaran = Pelajaran::all();
        $kelas = Kelas::all();

        return view('jadwal_edit',['jadwal' =>$jadwal,'kelas' =>$kelas, 'pelajaran' =>$pelajaran]);
    }

    public function update($id, Request $request)
{
    $this->validate($request,[
	   'hari' => 'required',
       
	   
    ]);
 
    $jadwal = Jadwal::find($id);
    $jadwal->hari = $request->hari;
    $jadwal->jam_mulai = $request->jam_mulai;
    $jadwal->jam_akhir = $request->jam_akhir;
    $jadwal->pelajaran_id = $request->pelajaran_id;
    $jadwal->kelas_id = $request->kelas_id;
   
    $jadwal->save();
    return redirect('/jadwal');
}

public function delete($id)
{
    $jadwal = Jadwal::find($id);
    $jadwal->delete();
    return redirect('/jadwal');
}


 
}