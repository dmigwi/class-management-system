<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void {
        DB::table('chats')->insert([
            "id" => 1,
            "unit_id" => 4,
            "user_id" => 3,
            "message" => "Can one be verified on any platform using docker?",
            "read_at" => "2024-01-30 16:17:00",
            "created_at" => "2024-01-30 14:17:24",
        ]);
          
        DB::table('chats')->insert([
            "id" => 2,
            "unit_id" => 4,
            "user_id" => 2,
            "message" => "Your error message says permission denied, npm global installs must be given root privileges.",
            "read_at" => "2024-01-30 16:17:00",
            "created_at" => "2024-01-30 14:17:24",
        ]);
          
        DB::table('chats')->insert([
            "id" => 3,
            "unit_id" => 4,
            "user_id" => 3,
            "message" => "Command was run with root privileges. I'm sure about that.",
            "read_at" => "2024-01-30 16:17:00",
            "created_at" => "2024-01-30 14:17:24",
        ]);
          
        DB::table('chats')->insert([
            "id" => 4,
            "unit_id" => 4,
            "user_id" => 3,
            "message" => "I've update the description so it's more obviously now",
            "read_at" => "2024-01-30 16:17:00",
            "created_at" => "2024-01-30 14:17:24",
        ]);
          
        DB::table('chats')->insert([
            "id" => 5,
            "unit_id" => 4,
            "user_id" => 2,
            "message" => "FYI https://askubuntu.com/a/700266/510172",
            "read_at" => "2024-01-30 16:17:00",
            "created_at" => "2024-01-30 14:17:24",
        ]);
          
        DB::table('chats')->insert([
            "id" => 6,
            "unit_id" => 4,
            "user_id" => 3,
            "message" => "Check the line above (it ends with a # so, I'm running it as root ) `# npm install -g @vue/devtools`",
            "read_at" => "2024-01-30 16:17:00",
            "created_at" => "2024-01-30 14:17:24",
        ]);
          
        DB::table('chats')->insert([
            "id" => 7,
            "unit_id" => 4,
            "user_id" => 2,
            "message" => "Any updates on this issue? I'm getting the same error when trying to install devtools. Thanks",
            "read_at" => "2024-01-30 16:17:00",
            "created_at" => "2024-01-30 14:17:24",
        ]);
          
        DB::table('chats')->insert([
            "id" => 8,
            "unit_id" => 4,
            "user_id" => 3,
            "message" => "Thanks for your message David. I thought I'm alone with this issue. Please, ? the issue to support it :)",
            "read_at" => "2024-01-30 16:17:00",
            "created_at" => "2024-01-30 14:17:24",
        ]);
          
        DB::table('chats')->insert([
            "id" => 9,
            "unit_id" => 4,
            "user_id" => 2,
            "message" => "Are you using sudo?",
            "read_at" => "2024-01-30 16:17:00",
            "created_at" => "2024-01-30 14:17:24",
        ]);
          
        DB::table('chats')->insert([
            "id" => 10,
            "unit_id" => 4,
            "user_id" => 2,
            "message" => "Run this command sudo chown -R `whoami` /Users/[your_user_profile]/.npm-global/ then install the package globally without using sudo",
            "read_at" => "2024-01-30 16:17:00",
            "created_at" => "2024-01-30 14:17:24",
        ]);

        DB::table('chats')->insert([
            "id" => 11,
            "unit_id" => 4,
            "user_id" => 3,
            "message" => "It seems like you are from Mac OS world. There is no /Users/ folder on linux?",
            "read_at" => NULL,
            "created_at" => "2024-01-30 14:17:24",
        ]);
          
        DB::table('chats')->insert([
            "id" => 12,
            "unit_id" => 4,
            "user_id" => 3,
            "message" => "I have no issue with any other packages installed with root permission globally.",
            "read_at" => NULL,
            "created_at" => "2024-01-30 14:17:24",
        ]);
          
        DB::table('chats')->insert([
            "id" => 13,
            "unit_id" => 4,
            "user_id" => 2,
            "message" => "yes, I have a mac. I never had issues with root permission as well, but this helped me to solve the problem",
            "read_at" => NULL,
            "created_at" => "2024-01-30 14:17:24",
        ]);
    }
}
