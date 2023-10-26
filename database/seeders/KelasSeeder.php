<?php

namespace Database\Seeders;

use App\Models\Kelas;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    	$faker = Faker::create('id_ID');

        for($i = 1; $i <= 3; $i++){

        DB::table('kelas')->insert([
    			'nama_kelas' => $faker->sentence,
    		]);
    }
}
}