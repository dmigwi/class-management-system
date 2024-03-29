<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            UnitSeeder::class,
            ChatSeeder::class,
            TimerSeeder::class,
            UnitUserSeeder::class,
            AttendanceSeeder::class,
        ]);
    }
}
