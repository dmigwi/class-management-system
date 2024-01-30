<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserUnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void {
        DB::table('units')->insert([
            "id" => 1,
            "unit_id" => 5,
            "user_id" => 3,
            "created_at" => "1706620720",
            "updated_at" => "1706620720",
        ]);
    }
}
