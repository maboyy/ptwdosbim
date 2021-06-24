<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(5)->create();

        $this->call(UserTableSeeder::class);
        $this->call(MataKuliahTableSeeder::class);
        $this->call(JadwalUjianSeeder::class);
    }
}
