<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class JokiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * @return void 
     */
    public function run()
    {
        //data faker indonesia
        $faker = Faker::create('id,ID');

        //Membuat dummy sebanyak 10 record
        for($i = 1; $i <= 10; $i++){

            //insert data dummy Joki dengan Faker
            DB::table ('guru')->insert([
               'nama' => $faker->name,
               'umur' => $faker->address,
            ]);
        }
    }
}

//php artisan migrate:fresh {buat ngehapus table yang gagal}