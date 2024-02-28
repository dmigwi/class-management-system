<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TimerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void {
        DB::table('timer')->insert([
            "id" => 1,
            "instructor" => 2,
            "unit_id" => 5,
            "started_at" => "2024-01-30 14:17:24",
            "stopped_at" => "2024-01-30 15:57:20",
        ]);
        DB::table('timer')->insert([
            "id" => 2,
            "instructor" => 2,
            "unit_id" => 5,
            "started_at" => "2024-01-30 14:17:24",
            "stopped_at" => "2024-01-30 15:57:20",
        ]);
        DB::table('timer')->insert([
            "id" => 3,
            "instructor" => 2,
            "unit_id" => 5,
            "started_at" => "2024-01-30 14:17:24",
            "stopped_at" => "2024-01-30 15:57:20",
        ]);
        DB::table('timer')->insert([
            "id" => 4,
            "instructor" => 2,
            "unit_id" => 5,
            "started_at" => "2024-01-30 14:17:24",
            "stopped_at" => "2024-01-30 15:57:20",
        ]);
        DB::table('timer')->insert([
            "id" => 5,
            "instructor" => 2,
            "unit_id" => 5,
            "started_at" => "2024-01-30 14:17:24",
            "stopped_at" => "2024-01-30 15:57:20",
        ]);
        DB::table('timer')->insert([
            "id" => 6,
            "instructor" => 2,
            "unit_id" => 5,
            "started_at" => "2024-01-30 14:17:24",
            "stopped_at" => "2024-01-30 15:57:20",
        ]);
        DB::table('timer')->insert([
            "id" => 7,
            "instructor" => 2,
            "unit_id" => 5,
            "started_at" => "2024-01-30 14:17:24",
            "stopped_at" => "2024-01-30 15:57:20",
        ]);
        DB::table('timer')->insert([
            "id" => 8,
            "instructor" => 2,
            "unit_id" => 4,
            "started_at" => "2024-01-30 14:17:24",
            "stopped_at" => "2024-01-30 15:57:20",
        ]);
        DB::table('timer')->insert([
            "id" => 9,
            "instructor" => 2,
            "unit_id" => 4,
            "started_at" => "2024-01-30 14:17:24",
            "stopped_at" => "2024-01-30 15:57:20",
        ]);
        DB::table('timer')->insert([
            "id" => 10,
            "instructor" => 2,
            "unit_id" => 4,
            "started_at" => "2024-01-30 14:17:24",
            "stopped_at" => "2024-01-30 15:57:20",
        ]);
        DB::table('timer')->insert([
            "id" => 11,
            "instructor" => 2,
            "unit_id" => 4,
            "started_at" => "2024-01-30 14:17:24",
            "stopped_at" => "2024-01-30 15:57:20",
        ]);
        DB::table('timer')->insert([
            "id" => 12,
            "instructor" => 2,
            "unit_id" => 3,
            "started_at" => "2024-01-30 14:17:24",
            "stopped_at" => "2024-01-30 15:57:20",
        ]);
        DB::table('timer')->insert([
            "id" => 13,
            "instructor" => 2,
            "unit_id" => 3,
            "started_at" => "2024-01-30 14:17:24",
            "stopped_at" => "2024-01-30 15:57:20",
        ]);
        DB::table('timer')->insert([
            "id" => 14,
            "instructor" => 2,
            "unit_id" => 3,
            "started_at" => "2024-01-30 14:17:24",
            "stopped_at" => "2024-01-30 15:57:20",
        ]);
        DB::table('timer')->insert([
            "id" => 15,
            "instructor" => 2,
            "unit_id" => 3,
            "started_at" => "2024-01-30 14:17:24",
            "stopped_at" => "2024-01-30 15:57:20",
        ]);
        DB::table('timer')->insert([
            "id" => 16,
            "instructor" => 2,
            "unit_id" => 3,
            "started_at" => "2024-01-30 14:17:24",
            "stopped_at" => "2024-01-30 15:57:20",
        ]);
    }
}