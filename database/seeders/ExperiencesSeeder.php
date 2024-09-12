<?php

namespace Database\Seeders;

use App\Models\Experiences;
use App\Models\Sections;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ExperiencesSeeder extends Seeder
{
    public function run(): void {
        
        $tableName = "Minhas Experiências";
        $id = (string) Str::uuid();
        $sectionId = (string) Str::uuid();

        // Primeira experiência
        Experiences::create([

            "id" => $id,
            "title" => "Desenvolvedor Fullstack",
            "enterpriseName" => "Juá",
            "description" => "Descrição simples",
            "date" => "Agos 2024 - Atual",
            "sectionId" => $sectionId

        ]);

        // Criando a seção
        Sections::create([

            "id" => $sectionId,
            "name" => $tableName

        ]);

    }
}
