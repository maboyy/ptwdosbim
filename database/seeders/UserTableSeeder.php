<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                "name" => "Abi Ubet Assabi",
                "nbi" => "1461900141",
                "password" => bcrypt("password"),
                "email_verified_at" => now(),
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "Shandi Maulana",
                "nbi" => "1461900160",
                "password" => bcrypt("password"),
                "email_verified_at" => now(),
                "created_at" => now(),
                "updated_at" => now(),
            ]
        ];

        User::insert($users);
    }
}
