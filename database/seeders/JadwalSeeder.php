<?php

namespace Database\Seeders;

use App\Models\Jadwal;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JadwalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
    	$faker = Faker::create('id_ID');
        
        for($i = 1; $i <= 4; $i++){

        DB::table('jadwal')->insert([
    			'hari' => $faker->sentence,
    		]);
    }
}
}