<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MalasngodingController extends Controller
{
    public function nazar_ganteng () {
        return view ('input');
    }
    public function proses(Request $request)
    {
        $this->validate($request,[
            'nama'=> 'requeredlmin:5lmax:20',
            'pekerjaan' => 'required',
            'usia' => 'required|numeric'
        ]);
        
        return view('proses',['data' => $request]);
    }

    function show_nama() {
        return 1+1;
    }
}
