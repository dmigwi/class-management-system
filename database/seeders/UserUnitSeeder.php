<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserUnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void {
        DB::table('user_unit')->insert([
            "id" => 1,
            "user_id" => 3,
            "timer_id" => 1,
            "created_at" => "2024-01-30 14:17:24",
        ]);

        DB::table('user_unit')->insert([
            "id" => 2,
            "user_id" => 5,
            "timer_id" => 1,
            "created_at" => "2024-01-30 14:17:24",
        ]);

        DB::table('user_unit')->insert([
            "id" => 3,
            "user_id" => 6,
            "timer_id" => 1,
            "created_at" => "2024-01-30 14:17:24",
        ]);

        DB::table('user_unit')->insert([
            "id" => 4,
            "user_id" => 7,
            "timer_id" => 1,
            "created_at" => "2024-01-30 14:17:24",
        ]);

        DB::table('user_unit')->insert([
            "id" => 5,
            "user_id" => 8,
            "timer_id" => 1,
            "created_at" => "2024-01-30 14:17:24",
        ]);

        DB::table('user_unit')->insert([
            "id" => 6,
            "user_id" => 9,
            "timer_id" => 1,
            "created_at" => "2024-01-30 14:17:24",
        ]);
    }
}
