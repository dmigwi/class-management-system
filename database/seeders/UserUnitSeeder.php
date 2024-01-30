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
            "unit_id" => 5,
            "user_id" => 3,
            "created_at" => "2024-01-30 14:17:24",
            "updated_at" => "2024-01-30 14:17:24",
        ]);

        DB::table('user_unit')->insert([
            "id" => 2,
            "unit_id" => 5,
            "user_id" => 5,
            "created_at" => "2024-01-30 14:17:24",
            "updated_at" => "2024-01-30 14:17:24",
        ]);

        DB::table('user_unit')->insert([
            "id" => 3,
            "unit_id" => 5,
            "user_id" => 6,
            "created_at" => "2024-01-30 14:17:24",
            "updated_at" => "2024-01-30 14:17:24",
        ]);

        DB::table('user_unit')->insert([
            "id" => 4,
            "unit_id" => 5,
            "user_id" => 7,
            "created_at" => "2024-01-30 14:17:24",
            "updated_at" => "2024-01-30 14:17:24",
        ]);

        DB::table('user_unit')->insert([
            "id" => 5,
            "unit_id" => 5,
            "user_id" => 8,
            "created_at" => "2024-01-30 14:17:24",
            "updated_at" => "2024-01-30 14:17:24",
        ]);

        DB::table('user_unit')->insert([
            "id" => 6,
            "unit_id" => 5,
            "user_id" => 9,
            "created_at" => "2024-01-30 14:17:24",
            "updated_at" => "2024-01-30 14:17:24",
        ]);
    }
}
