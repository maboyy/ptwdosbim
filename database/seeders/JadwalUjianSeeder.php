<?php

namespace Database\Seeders;

use App\Models\JadwalUjian;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class JadwalUjianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where("nbi", "1461900141")->first();
        $date = Carbon::now();

        $jadwalUjian = [
            [
                "user_id"     => $user->id,
                "mata_kuliah_id" => 1,
                "date"        => $date->format("Y-m-d"),
                "time"        => "17:00:00",
                "created_at"  => now(),
                "updated_at"  => now(),
            ],
            [
                "user_id"     => $user->id,
                "mata_kuliah_id" => 2,
                "date"        => $date->addDay(1)->format("Y-m-d"),
                "time"        => "20:00:00",
                "created_at"  => now(),
                "updated_at"  => now(),
            ],
            [
                "user_id"     => $user->id,
                "mata_kuliah_id" => 3,
                "date"        => $date->addDay(2)->format("Y-m-d"),
                "time"        => "19:00:00",
                "created_at"  => now(),
                "updated_at"  => now(),
            ],
        ];

        JadwalUjian::insert($jadwalUjian);
    }
}
