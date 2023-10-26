<?php

namespace Database\Seeders;

use App\Models\Siswa;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
    //data faker indonesia
    $faker = Faker::create('id,ID');

    //Membuat dummy sebanyak 10 record
    for($i = 1; $i <= 80; $i++){

        //insert data dummy Joki dengan Faker
        DB::table ('siswa')->insert([
           'nama' => $faker->name,
           
        ]);
    }
}
}
