<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    public function run(): void {
        
        User::create([

            "name" => "Admin",
            "email" => "admin@gmail.com",
            "password" => "1234567890"

        ]);

    }
}
