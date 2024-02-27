<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AttendanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void {
        DB::table('attendances')->insert([
            "id" => 1,
            "timer_id" => 1,
            "sender" => 3,
            "created_at" => "2024-01-30 14:17:24",
        ]);
        DB::table('attendances')->insert([
            "id" => 2,
            "timer_id" => 1,
            "sender" => 5,
            "created_at" => "2024-01-30 14:17:24",
        ]);
        DB::table('attendances')->insert([
            "id" => 3,
            "timer_id" => 1,
            "sender" => 6,
            "created_at" => "2024-01-30 14:17:24",
        ]);
        DB::table('attendances')->insert([
            "id" => 4,
            "timer_id" => 2,
            "sender" => 3,
            "created_at" => "2024-01-30 14:17:24",
        ]);
        DB::table('attendances')->insert([
            "id" => 5,
            "timer_id" => 2,
            "sender" => 5,
            "created_at" => "2024-01-30 14:17:24",
        ]);
        DB::table('attendances')->insert([
            "id" => 6,
            "timer_id" => 2,
            "sender" => 6,
            "created_at" => "2024-01-30 14:17:24",
        ]);
        DB::table('attendances')->insert([
            "id" => 7,
            "timer_id" => 3,
            "sender" => 5,
            "created_at" => "2024-01-30 14:17:24",
        ]);
        DB::table('attendances')->insert([
            "id" => 8,
            "timer_id" => 3,
            "sender" => 6,
            "created_at" => "2024-01-30 14:17:24",
        ]);
        DB::table('attendances')->insert([
            "id" => 9,
            "timer_id" => 4,
            "sender" => 3,
            "created_at" => "2024-01-30 14:17:24",
        ]);
        DB::table('attendances')->insert([
            "id" => 10,
            "timer_id" => 4,
            "sender" => 6,
            "created_at" => "2024-01-30 14:17:24",
        ]);
        DB::table('attendances')->insert([
            "id" => 11,
            "timer_id" => 5,
            "sender" => 3,
            "created_at" => "2024-01-30 14:17:24",
        ]);
        DB::table('attendances')->insert([
            "id" => 12,
            "timer_id" => 5,
            "sender" => 5,
            "created_at" => "2024-01-30 14:17:24",
        ]);
        DB::table('attendances')->insert([
            "id" => 13,
            "timer_id" => 5,
            "sender" => 6,
            "created_at" => "2024-01-30 14:17:24",
        ]);
        DB::table('attendances')->insert([
            "id" => 14,
            "timer_id" => 6,
            "sender" => 3,
            "created_at" => "2024-01-30 14:17:24",
        ]);
        DB::table('attendances')->insert([
            "id" => 15,
            "timer_id" => 6,
            "sender" => 6,
            "created_at" => "2024-01-30 14:17:24",
        ]);
        DB::table('attendances')->insert([
            "id" => 16,
            "timer_id" => 6,
            "sender" => 5,
            "created_at" => "2024-01-30 14:17:24",
        ]);
        DB::table('attendances')->insert([
            "id" => 17,
            "timer_id" => 6,
            "sender" => 7,
            "created_at" => "2024-01-30 14:17:24",
        ]);
        DB::table('attendances')->insert([
            "id" => 18,
            "timer_id" => 7,
            "sender" => 3,
            "created_at" => "2024-01-30 14:17:24",
        ]);
        DB::table('attendances')->insert([
            "id" => 19,
            "timer_id" => 7,
            "sender" => 5,
            "created_at" => "2024-01-30 14:17:24",
        ]);
        DB::table('attendances')->insert([
            "id" => 20,
            "timer_id" => 7,
            "sender" => 6,
            "created_at" => "2024-01-30 14:17:24",
        ]);
        DB::table('attendances')->insert([
            "id" => 21,
            "timer_id" => 8,
            "sender" => 3,
            "created_at" => "2024-01-30 14:17:24",
        ]);
        DB::table('attendances')->insert([
            "id" => 22,
            "timer_id" => 8,
            "sender" => 5,
            "created_at" => "2024-01-30 14:17:24",
        ]);
        DB::table('attendances')->insert([
            "id" => 23,
            "timer_id" => 8,
            "sender" => 6,
            "created_at" => "2024-01-30 14:17:24",
        ]);
        DB::table('attendances')->insert([
            "id" => 24,
            "timer_id" => 9,
            "sender" => 3,
            "created_at" => "2024-01-30 14:17:24",
        ]);
        DB::table('attendances')->insert([
            "id" => 25,
            "timer_id" => 9,
            "sender" => 5,
            "created_at" => "2024-01-30 14:17:24",
        ]);
        DB::table('attendances')->insert([
            "id" => 26,
            "timer_id" => 9,
            "sender" => 6,
            "created_at" => "2024-01-30 14:17:24",
        ]);
        DB::table('attendances')->insert([
            "id" => 27,
            "timer_id" => 9,
            "sender" => 7,
            "created_at" => "2024-01-30 14:17:24",
        ]);DB::table('attendances')->insert([
            "id" => 28,
            "timer_id" => 10,
            "sender" => 5,
            "created_at" => "2024-01-30 14:17:24",
        ]);
        DB::table('attendances')->insert([
            "id" => 29,
            "timer_id" => 10,
            "sender" => 6,
            "created_at" => "2024-01-30 14:17:24",
        ]);
        DB::table('attendances')->insert([
            "id" => 30,
            "timer_id" => 10,
            "sender" => 7,
            "created_at" => "2024-01-30 14:17:24",
        ]);
        DB::table('attendances')->insert([
            "id" => 31,
            "timer_id" => 10,
            "sender" => 8,
            "created_at" => "2024-01-30 14:17:24",
        ]);
        DB::table('attendances')->insert([
            "id" => 32,
            "timer_id" => 11,
            "sender" => 3,
            "created_at" => "2024-01-30 14:17:24",
        ]);DB::table('attendances')->insert([
            "id" => 33,
            "timer_id" => 11,
            "sender" => 5,
            "created_at" => "2024-01-30 14:17:24",
        ]);
        DB::table('attendances')->insert([
            "id" => 34,
            "timer_id" => 11,
            "sender" => 6,
            "created_at" => "2024-01-30 14:17:24",
        ]);
        DB::table('attendances')->insert([
            "id" => 35,
            "timer_id" => 12,
            "sender" => 3,
            "created_at" => "2024-01-30 14:17:24",
        ]);
        DB::table('attendances')->insert([
            "id" => 36,
            "timer_id" => 12,
            "sender" => 5,
            "created_at" => "2024-01-30 14:17:24",
        ]);DB::table('attendances')->insert([
            "id" => 37,
            "timer_id" => 12,
            "sender" => 7,
            "created_at" => "2024-01-30 14:17:24",
        ]);
        DB::table('attendances')->insert([
            "id" => 38,
            "timer_id" => 13,
            "sender" => 3,
            "created_at" => "2024-01-30 14:17:24",
        ]);DB::table('attendances')->insert([
            "id" => 39,
            "timer_id" => 13,
            "sender" => 5,
            "created_at" => "2024-01-30 14:17:24",
        ]);
        DB::table('attendances')->insert([
            "id" => 40,
            "timer_id" => 14,
            "sender" => 3,
            "created_at" => "2024-01-30 14:17:24",
        ]);
        DB::table('attendances')->insert([
            "id" => 41,
            "timer_id" => 14,
            "sender" => 6,
            "created_at" => "2024-01-30 14:17:24",
        ]);

        DB::table('attendances')->insert([
            "id" => 42,
            "timer_id" => 15,
            "sender" => 5,
            "created_at" => "2024-01-30 14:17:24",
        ]);
        DB::table('attendances')->insert([
            "id" => 43,
            "timer_id" => 15,
            "sender" => 6,
            "created_at" => "2024-01-30 14:17:24",
        ]);
        DB::table('attendances')->insert([
            "id" => 44,
            "timer_id" => 16,
            "sender" => 3,
            "created_at" => "2024-01-30 14:17:24",
        ]);
    }
}
