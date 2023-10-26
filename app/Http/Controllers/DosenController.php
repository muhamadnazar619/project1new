<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function sapi(){
        $nama = "Diki Alfarabi Hadi";
        $pelajaran = ["Algoritma & Pemrograman", "Kalkulus","Pemrograman Web"];
        $hobi = "gosip";
    	return view('bio',
        [
        'ngaran' => $nama , 
        'matkul' => $pelajaran,
        'bigost' => $hobi
        ]);
    }
}
