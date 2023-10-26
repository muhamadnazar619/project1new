<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SapiController extends Controller
{
   public function index(){
   $nama = "Nazargembala_";
   $jenisjenisSapi = ["Simental", "Limousin","Brahman"];
   $gambarsapi = ["https://asset.kompas.com/crops/DJEURl2igQhjpv7-o3teFb3FvsA=/51x0:960x606/1200x800/data/photo/2022/07/09/62c9539e3261a.jpg","https://asset.kompas.com/crops/DJEURl2igQhjpv7-o3teFb3FvsA=/51x0:960x606/1200x800/data/photo/2022/07/09/62c9539e3261a.jpg","https://asset.kompas.com/crops/DJEURl2igQhjpv7-o3teFb3FvsA=/51x0:960x606/1200x800/data/photo/2022/07/09/62c9539e3261a.jpg"];
   $karyawan = "Asep Kangkung";
   return view('hewan',
   [
   'ngaran' => $nama , 
   'sapi' => $jenisjenisSapi,
   'bigost' => $karyawan,
   'foto' => $gambarsapi
   ]); 
}
}   