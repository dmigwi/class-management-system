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
        DB::table('start_stop')->insert([
            "id" => 1,
            "instructor" => 4,
            "unit_id" => 5,
            "started_at" => "2024-01-30 14:17:24",
            "stopped_at" => "2024-01-30 15:57:20",
        ]);
    }
}