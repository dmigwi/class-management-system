<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UnitUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void {
        DB::table('unit_user')->insert([
            "id" => 1,
            "user_id" => 3,
            "unit_id" => 3,
            "created_at" => "2024-01-30 14:17:24",
        ]);

        DB::table('unit_user')->insert([
            "id" => 2,
            "user_id" => 3,
            "unit_id" => 4,
            "created_at" => "2024-01-30 14:17:24",
        ]);

        DB::table('unit_user')->insert([
            "id" => 3,
            "user_id" => 3,
            "unit_id" => 5,
            "created_at" => "2024-01-30 14:17:24",
        ]);

        DB::table('unit_user')->insert([
            "id" => 4,
            "user_id" => 5,
            "unit_id" => 3,
            "created_at" => "2024-01-30 14:17:24",
        ]);

        DB::table('unit_user')->insert([
            "id" => 5,
            "user_id" => 5,
            "unit_id" => 4,
            "created_at" => "2024-01-30 14:17:24",
        ]);

        DB::table('unit_user')->insert([
            "id" => 6,
            "user_id" => 5,
            "unit_id" => 5,
            "created_at" => "2024-01-30 14:17:24",
        ]);
        DB::table('unit_user')->insert([
            "id" => 7,
            "user_id" => 6,
            "unit_id" => 3,
            "created_at" => "2024-01-30 14:17:24",
        ]);

        DB::table('unit_user')->insert([
            "id" => 8,
            "user_id" => 6,
            "unit_id" => 4,
            "created_at" => "2024-01-30 14:17:24",
        ]);

        DB::table('unit_user')->insert([
            "id" => 9,
            "user_id" => 6,
            "unit_id" => 5,
            "created_at" => "2024-01-30 14:17:24",
        ]);
        DB::table('unit_user')->insert([
            "id" => 10,
            "user_id" => 7,
            "unit_id" => 3,
            "created_at" => "2024-01-30 14:17:24",
        ]);

        DB::table('unit_user')->insert([
            "id" => 11,
            "user_id" => 7,
            "unit_id" => 4,
            "created_at" => "2024-01-30 14:17:24",
        ]);

        DB::table('unit_user')->insert([
            "id" => 12,
            "user_id" => 7,
            "unit_id" => 5,
            "created_at" => "2024-01-30 14:17:24",
        ]);
        DB::table('unit_user')->insert([
            "id" => 13,
            "user_id" => 8,
            "unit_id" => 3,
            "created_at" => "2024-01-30 14:17:24",
        ]);

        DB::table('unit_user')->insert([
            "id" => 14,
            "user_id" => 8,
            "unit_id" => 4,
            "created_at" => "2024-01-30 14:17:24",
        ]);

        DB::table('unit_user')->insert([
            "id" => 15,
            "user_id" => 8,
            "unit_id" => 5,
            "created_at" => "2024-01-30 14:17:24",
        ]);
    }
}
