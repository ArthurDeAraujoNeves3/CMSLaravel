<?php

namespace Database\Seeders;

use App\Models\General;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class GeneralSeeder extends Seeder
{
    
    public function run(): void {
        
       General::create([

            "id" => (string) Str::uuid(),
            "name" => "Seu nome aqui",
            "bgColor" => "#0e0e0e",
            "colorTheme" => "#0B2F9F"

       ]);

    }
}
