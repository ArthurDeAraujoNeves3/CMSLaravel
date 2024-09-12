<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    
    public function run(): void {
        
        // Executa todos os seeders
        $this->call([
            
            GeneralSeeder::class,
            HeroSeeder::class,
            AboutMeSeeder::class,
            ExperiencesSeeder::class,
            ProjectsSeeder::class,
            AdminSeeder::class
            
        ]);

    }

}
