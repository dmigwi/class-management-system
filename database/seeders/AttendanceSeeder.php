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
    }
}
