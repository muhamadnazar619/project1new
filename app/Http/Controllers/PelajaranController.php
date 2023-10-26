<?php
 
namespace App\Http\Controllers;

use App\Models\Pelajaran;
use Illuminate\Http\Request;
 

 
class PelajaranController extends Controller
{
 
    public function index()
    {
    	$pelajaran = Pelajaran::all();
    	return view('pelajaran', ['pelajaran' => $pelajaran]);
    }
 
    public function tambah()
    {
    	return view('pelajaran_tambah');
    }
    public function store(Request $request)
    {
    	$this->validate($request,[
    		'nama_pelajaran' => 'required'
            // 'jam_mulai' => 'required',
    		// 'jam_akhir' => 'required'
    	]);
 
        Pelajaran::create([
    		'nama_pelajaran' => $request->nama_pelajaran
            // 'jam_mulai' => $request->jam_mulai,
    		// 'jam_akhir' => $request->jam_akhir
    	]);
 
    	return redirect('/pelajaran');
    }
    
    public function edit($id)
    {
        $pelajaran = Pelajaran::find($id);
        return view('pelajaran_edit', ['pelajaran' => $pelajaran]);
    }

    public function update(Request $request,$id)
{
    // dd($request->all());
    $this->validate($request,[
	   'nama_pelajaran' => 'required'
	//    'jam_mulai' => 'required',
    //    'jam_akhir' => 'required'
    ]);

 
    $pelajaran = Pelajaran::find($id);
    $pelajaran->nama_pelajaran = $request->nama_pelajaran;
    // $pelajaran->jam_mulai = $request->jam_mulai;
    // $pelajaran->jam_akhir = $request->jam_akhir;
    $pelajaran->save();
    return redirect('/pelajaran');
}

public function delete($id)
{
    $pelajaran = Pelajaran::find($id);
    $pelajaran->delete();
    return redirect('/pelajaran');
}
}