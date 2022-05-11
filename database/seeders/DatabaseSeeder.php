<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('users')->insert([
            [
                "nom" => "rayen",
                "prenom" => "admin",
                "email" => "admin@gmail.com",
                "numtel" => "12345678",
                "genre" => "male",
                "role" => "admin",
                "password" => Hash::make("adminadmin"),
            ]
        ]);
    }
}
