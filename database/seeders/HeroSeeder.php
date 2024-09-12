<?php

namespace Database\Seeders;

use App\Models\Hero;
use App\Models\Sections;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class HeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   
        $tableName = "Hero";
        $id = (string) Str::uuid(); // Id para o conteúdo
        $sectionId = (string) Str::uuid(); // Id para seção

        //Conteúdo da seção
        Hero::create([

            "id" => $id,
            "imageUrl" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTzGMxU60ShCiSi-sgVPmWfBDfe8GWKUKUqPw&s",
            "welcomeMessage" => "Mensagem de boas vindas",
            "expertise" => "Especialidade",
            "linkedinUrl" => "",
            "sectionId" => $sectionId

        ]);

        // Criando a seção
        Sections::create([

            "id" => $sectionId,
            "name" => $tableName

        ]);
    }
}
