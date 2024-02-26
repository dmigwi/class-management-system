<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void {
        DB::table('units')->insert([
            "id" => 1,
            "name" => "Administrator",
            "code" => "0000",
            "created_at" => "2024-01-30 14:17:24",
            "updated_at" => "2024-01-30 14:17:24", 
        ]);

        DB::table('units')->insert([
            "id" => 2,
            "name" => "Discrete Structures",
            "code" => "CSE-244",
            "semester" => "1",
            "year" => "2022/2023",
            "created_at" => "2024-01-30 14:17:24",
            "updated_at" => "2024-01-30 14:17:24", 
        ]);

        DB::table('units')->insert([
            "id" => 3,
            "name" => "Data Structures and Algorithms",
            "instructor" => 2,
            "code" => "CSE-235",
            "semester" => "2",
            "year" => "2023/2024",
            "duration" => 12,
            "start_date" => "2024-02-23 00:00:00",
            "end_date" => "2024-03-09 00:00:00",
            "midterm_exam" => "2024-02-27 00:00:00",
            "final_exam" => "2024-02-29 00:00:00",
            "created_at" => "2024-01-30 14:17:24",
            "updated_at" => "2024-01-30 14:17:24", 
        ]);

        DB::table('units')->insert([
            "id" => 4,
            "name" => "Introduction to Computer Systems",
            "instructor" => 2,
            "code" => "CSE-236",
            "semester" => "2",
            "year" => "2023/2024",
            "duration" => 12,
            "start_date" => "2024-02-23 00:00:00",
            "end_date" => "2024-03-09 00:00:00",
            "midterm_exam" => "2024-02-27 00:00:00",
            "final_exam" => "2024-02-29 00:00:00",
            "created_at" => "2024-01-30 14:17:24",
            "updated_at" => "2024-01-30 14:17:24", 
        ]);

        DB::table('units')->insert([
            "id" => 5,
            "name" => "Advanced Programming Concepts",
            "instructor" => 2,
            "code" => "CSE-240",
            "semester" => "2",
            "year" => "2023/2024",
            "duration" => 12,
            "start_date" => "2024-02-23 00:00:00",
            "end_date" => "2024-03-09 00:00:00",
            "midterm_exam" => "2024-02-27 00:00:00",
            "final_exam" => "2024-02-29 00:00:00",
            "created_at" => "2024-01-30 14:17:24",
            "updated_at" => "2024-01-30 14:17:24", 
        ]);

        DB::table('units')->insert([
            "id" => 6,
            "name" => "Introduction to Computational Theory",
            "code" => "CSE-250",
            "semester" => "2",
            "year" => "2022/2023",
            "created_at" => "2024-01-30 14:17:24",
            "updated_at" => "2024-01-30 14:17:24", 
        ]);

        DB::table('units')->insert([
            "id" => 7,
            "name" => "Algorithm Design and Analysis",
            "code" => "CSE-312",
            "semester" => "1",
            "year" => "2023/2024",
            "created_at" => "2024-01-30 14:17:24",
            "updated_at" => "2024-01-30 14:17:24", 
        ]);

        DB::table('units')->insert([
            "id" => 8,
            "name" => "Systems Programming",
            "code" => "CSE-324",
            "semester" => "Summer",
            "year" => "2022/2023",
            "created_at" => "2024-01-30 14:17:24",
            "updated_at" => "2024-01-30 14:17:24", 
        ]);

        DB::table('units')->insert([
            "id" => 9,
            "name" => "Software Design",
            "code" => "CSE-340",
            "semester" => "1",
            "year" => "2023/2024",
            "created_at" => "2024-01-30 14:17:24",
            "updated_at" => "2024-01-30 14:17:24", 
        ]);

        DB::table('units')->insert([
            "id" => 10,
            "name" => "Ethics and Computers in Society",
            "code" => "CSE-404",
            "semester" => "Summer",
            "year" => "2023/2024",
            "created_at" => "2024-01-30 14:17:24",
            "updated_at" => "2024-01-30 14:17:24", 
        ]);
    }
}
