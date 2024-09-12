<?php

namespace Database\Seeders;

use App\Models\AboutMe;
use App\Models\Sections;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AboutMeSeeder extends Seeder
{
    
    public function run(): void {
        
        $tableName = "Sobre Mim";
        $id = (string) Str::uuid(); // Id para o conteúdo
        $sectionId = (string) Str::uuid(); // Id para a seção

        //Conteúdo da seção
        AboutMe::create([

            "id" => $id,
            "location" => "Sua localização",
            "description" => "Descrição aqui...",
            "pdf" => "",
            "sectionId" => $sectionId

        ]);
        
        // Criando a seção
        Sections::create([

            "id" => $sectionId,
            "name" => $tableName

        ]);

    }

}
