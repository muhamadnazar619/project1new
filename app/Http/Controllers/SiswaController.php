<?php
 
namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\Kelas;
use Illuminate\Http\Request;
 

use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
 
    public function index()
    {
    	$siswa = Siswa::with('kelas')->get();
    	return view('siswa', ['siswa' => $siswa]);
    
    
    }

   // public function iak()
    // {
    //     $siswa = DB::table('siswa')->paginate(10);

    //     return view('iak', ['siswa' => $siswa]);
    // }
    public function tambah()
    {
        $kelas = DB::table('kelas')->get();
        // $kelas = Kelas::get select();
        // dd($kelas);
        return view ('siswa_tambah',['kelas' => $kelas]);
        // return view ('siswa_tambah',['kelas' => $kelas]);
    }

        public function store(Request $request)
        {
            $this->validate($request,[
                'nama' => 'required'
            ]);
        
            Siswa::create([
                'nama' => $request->nama,
                'kelas_id' => $request->kelas_id
                
                
            ]);
 
    	return redirect('/siswa');
    }

    public function edit($id)
    {
        $siswa = Siswa::find($id);
        $kelas = Kelas::all();
        return view('siswa_edit',['siswa' => $siswa,'kelas' => $kelas]);
    }

    public function update($id, Request $request)
{
    $this->validate($request,[
	   'nama' => 'required',
	   'kelas_id' => 'required'
    ]);
 
    $siswa = Siswa::find($id);
    $siswa->nama = $request->nama;
    $siswa->kelas_id = $request->kelas_id;
    $siswa->save();
    return redirect('/siswa');
}
public function delete($id)
{
    $siswa = Siswa::find($id);
    $siswa->delete();
    return redirect('/siswa');
}
}


