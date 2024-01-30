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
        DB::table('users')->insert([
            "id"=>"1",
            "name"=>"Introduction to Computer Programming",
            "code"=>"CSE 142",
            "semester"=>"1",
            "year"=>"2023/2024",
            "created_at" => "1706620720",
            "updated_at" => "1706620720", 
        ]);

        DB::table('users')->insert([
            "id"=>"2",
            "name"=>"Introduction to Computer Systems",
            "code"=>"CSE 244",
            "semester"=>"1",
            "year"=>"2022/2023",
            "created_at" => "1706620720",
            "updated_at" => "1706620720", 
        ]);

        DB::table('users')->insert([
            "id"=>"3",
            "name"=>"Data Structures and Algorithms",
            "code"=>"CSE 235",
            "semester"=>"2",
            "year"=>"2023/2024",
            "created_at" => "1706620720",
            "updated_at" => "1706620720", 
        ]);

        DB::table('users')->insert([
            "id"=>"4",
            "name"=>"Discrete Structures",
            "code"=>"CSE 236",
            "semester"=>"2",
            "year"=>"2023/2024",
            "created_at" => "1706620720",
            "updated_at" => "1706620720", 
        ]);

        DB::table('users')->insert([
            "id"=>"5",
            "name"=>"Advanced Programming Concepts",
            "code"=>"CSE 240",
            "semester"=>"1",
            "year"=>"2023/2024",
            "created_at" => "1706620720",
            "updated_at" => "1706620720", 
        ]);

        DB::table('users')->insert([
            "id"=>"6",
            "name"=>"Introduction to Computational Theory",
            "code"=>"CSE 250",
            "semester"=>"2",
            "year"=>"2022/2023",
            "created_at" => "1706620720",
            "updated_at" => "1706620720", 
        ]);

        DB::table('users')->insert([
            "id"=>"7",
            "name"=>"Algorithm Design and Analysis",
            "code"=>"CSE 312",
            "semester"=>"1",
            "year"=>"2023/2024",
            "created_at" => "1706620720",
            "updated_at" => "1706620720", 
        ]);

        DB::table('users')->insert([
            "id"=>"8",
            "name"=>"Systems Programming",
            "code"=>"CSE 324",
            "semester"=>"Summer",
            "year"=>"2022/2023",
            "created_at" => "1706620720",
            "updated_at" => "1706620720", 
        ]);

        DB::table('users')->insert([
            "id"=>"9",
            "name"=>"Software Design",
            "code"=>"CSE 340",
            "semester"=>"1",
            "year"=>"2023/2024",
            "created_at" => "1706620720",
            "updated_at" => "1706620720", 
        ]);

        DB::table('users')->insert([
            "id"=>"10",
            "name"=>"Ethics and Computers in Society",
            "code"=>"CSE 404",
            "semester"=>"Summer",
            "year"=>"2023/2024",
            "created_at" => "1706620720",
            "updated_at" => "1706620720", 
        ]);
    }
}
