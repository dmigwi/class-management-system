<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void {
        DB::table('users')->insert([
                "id" => 1,
                "title" => "Mr.",
                "firstname" => "John",
                "middlename" => "Doe",
                "lastname" => "Smith",
                "password" => "changeme",
                "role" => "admin",
                "email" => "john.doe@gmail.com",
                "faculty" => "Administration",
                "country" => "U.K",
                "phone" => "+48 456 789 234",
                "is_confirm_password" => true,
                "remember_token" => "",
                "created_at" => "2024-01-30 14:17:24",
                "updated_at" => "2024-01-30 14:17:24",      
            ]);
            
        DB::table('users')->insert([
                "id" => 2,
                "title" => "Dr.",
                "firstname" => "John",
                "middlename" => "Brown",
                "lastname" => "",
                "password" => "changeme",
                "role" => "instructor",
                "email" => "john.brown@gmail.com",
                "faculty" => "Polish And Foreign Languages",
                "country" => "U.S.A",
                "phone" => "+48 456 789 234",
                "is_confirm_password" => true,
                "remember_token" => "",
                "created_at" => "2024-01-30 14:17:24",
                "updated_at" => "2024-01-30 14:17:24",      
            ]);
                
        DB::table('users')->insert([
                "id" => 3,
                "title" => "Mr.",
                "firstname" => "John",
                "middlename" => "Black",
                "lastname" => "Smith",
                "password" => "changeme",
                "role" => "student",
                "email" => "john.black@gmail.com",
                "faculty" => "Philology And Journalism",
                "country" => "Poland",
                "phone" => "+48 456 789 234",
                "is_confirm_password" => true,
                "remember_token" => "",
                "created_at" => "2024-01-30 14:17:24",
                "updated_at" => "2024-01-30 14:17:24",      
            ]);
                
        DB::table('users')->insert([
                "id" => 4,
                "title" => "Prof.",
                "firstname" => "Jamie",
                "middlename" => "Smith",
                "lastname" => "Green",
                "password" => "changeme",
                "role" => "instructor",
                "email" => "jamie.green@gmail.com",
                "faculty" => "Computer Engineering, Graphics Design And Architecture",
                "country" => "Germany",
                "phone" => "+48 456 789 234",
                "is_confirm_password" => true,
                "remember_token" => "",
                "created_at" => "2024-01-30 14:17:24",
                "updated_at" => "2024-01-30 14:17:24",      
            ]);
                
        DB::table('users')->insert([
                "id" => 5,
                "title" => "Sir.",
                "firstname" => "Edward",
                "middlename" => "Woodward",
                "lastname" => "King",
                "password" => "changeme",
                "role" => "student",
                "email" => "edward.king@gmail.com",
                "faculty" => "Philology And Journalism",
                "country" => "Ireland",
                "phone" => "+48 456 789 234",
                "is_confirm_password" => true,
                "remember_token" => "",
                "created_at" => "2024-01-30 14:17:24",
                "updated_at" => "2024-01-30 14:17:24",      
            ]);
                
        DB::table('users')->insert([
                "id" => 6,
                "title" => "Ms.",
                "firstname" => "Fantasia",
                "middlename" => "Jim",
                "lastname" => "Red",
                "password" => "changeme",
                "role" => "student",
                "email" => "fantasia.red@gmail.com",
                "faculty" => "Polish And Foreign Languages",
                "country" => "Belarus",
                "phone" => "+48 456 789 234",
                "is_confirm_password" => true,
                "remember_token" => "",
                "created_at" => "2024-01-30 14:17:24",
                "updated_at" => "2024-01-30 14:17:24",      
            ]);
                
        DB::table('users')->insert([
                "id" => 7,
                "title" => "Dr.",
                "firstname" => "Jan",
                "middlename" => "Kowalski",
                "lastname" => "",
                "password" => "changeme",
                "role" => "student",
                "email" => "jan.kowalski@gmail.com",
                "faculty" => "Business And International Relations",
                "country" => "Poland",
                "phone" => "+48 456 789 234",
                "is_confirm_password" => true,
                "remember_token" => "",
                "created_at" => "2024-01-30 14:17:24",
                "updated_at" => "2024-01-30 14:17:24",      
            ]);
        
        DB::table('users')->insert([
                "id" => "8",
                "title" => "Dr.",
                "firstname" => "Adam",
                "middlename" => "Selcut",
                "lastname" => "Cankurt",
                "password" => "changeme",
                "role" => "student",
                "email" => "adam.cancurt@gmail.com",
                "faculty" => "Business And International Relations",
                "country" => "Sweden",
                "phone" => "+48 456 789 234",
                "is_confirm_password" => true,
                "remember_token" => "",
                "created_at" => "2024-01-30 14:17:24",
                "updated_at" => "2024-01-30 14:17:24",      
            ]);
        
        DB::table('users')->insert([
                "id" => "9",
                "title" => "Ms.",
                "firstname" => "Mary",
                "middlename" => "Jane",
                "lastname" => "Austins",
                "password" => "changeme",
                "role" => "student",
                "email" => "mary.jane@gmail.com",
                "faculty" => "Computer Engineering, Graphics Design And Architecture",
                "country" => "Poland",
                "phone" => "+48 456 789 234",
                "is_confirm_password" => true,
                "remember_token" => "",
                "created_at" => "2024-01-30 14:17:24",
                "updated_at" => "2024-01-30 14:17:24",      
            ]);
                
        DB::table('users')->insert([
                "id" => "10",
                "title" => "Mr.",
                "firstname" => "David",
                "middlename" => "Waweru",
                "lastname" => "Smith",
                "password" => "changeme",
                "role" => "student",
                "email" => "david.waweru@gmail.com",
                "faculty" => "Computer Engineering, Graphics Design And Architecture",
                "country" => "Poland",
                "phone" => "+48 456 789 234",
                "is_confirm_password" => true,
                "remember_token" => "",
                "created_at" => "2024-01-30 14:17:24",
                "updated_at" => "2024-01-30 14:17:24",    
            ]);
        }
}
