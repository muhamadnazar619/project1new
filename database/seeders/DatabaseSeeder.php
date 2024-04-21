<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'admin',
            'password' => Hash::make('admin'),
        ]);
        // $this->call(ArticleSeeder::class);
        // $this->call(GuruSeeder::class);
        // $this->call(JadwalSeeder::class);
        // $this->call(JokiSeeder::class);
        // $this->call(KaryawanSeeder::class);
        // $this->call(KelasSeeder::class);
        // $this->call(PegawaiSeeder::class);
        // $this->call(PelajaranSeeder::class);
        // $this->call(SiswaSeeder::class);
    }
}
