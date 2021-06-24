<?php

namespace Database\Seeders;

use App\Models\MataKuliah;
use Illuminate\Database\Seeder;

class MataKuliahTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $matakuliah = [
            [
                "name"       => "Pengembangan Teknologi Web",
                "dosen"        => "Anang Pramono, S.Kom, M.M",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name"       => "Manajemen Proyek Perangkat Lunak",
                "dosen"      => "Ery Sadewa Y.W, S.Kom, M.M",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name"       => "Arsitekstur Organisasi Dan Komputer",
                "dosen"      => "Anton Breva, ST. M.MT",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "Pengembangan Teknologi Web",
                "dosen" => "Elsen",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "Aristektur Organisasi Komputer",
                "dosen" => "Elvianto",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "Manajemen Proyek Perangkat Lunak",
                "day" => "Aidil",
                "created_at" => now(),
                "updated_at" => now(),
            ],
        ];

        MataKuliah::insert($matakuliah);
    }
}
