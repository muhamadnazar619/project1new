<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Joki;


class JokiController extends Controller
{

        public function index()
        {
            //mengambil data Joki
            $joki = Joki::find(1);

            //mengirim data Joki ke view Joki
            return view('joki', ['joki' => $joki]);
        }

}
