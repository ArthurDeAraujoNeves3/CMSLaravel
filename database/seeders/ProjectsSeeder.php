<?php

namespace Database\Seeders;

use App\Models\Projects;
use App\Models\Sections;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProjectsSeeder extends Seeder
{
    public function run(): void {
        
        $tableName = "Meus Projetos";
        $id = (string) Str::uuid();
        $sectionId = (string) Str::uuid();

        // Primeiro projeto
        Projects::create([

            "id" => $id,
            "imageUrl" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTzGMxU60ShCiSi-sgVPmWfBDfe8GWKUKUqPw&s",
            "name" => "Pizza Shop",
            "description" => "Dashboard para o controle dos pedidos feita com React, Typescript e MongoDB",
            "github" => "",
            "webSite" => "",
            "sectionId" => $sectionId

        ]);
        // Segundo projeto
        Projects::create([

            "id" => $id,
            "imageUrl" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTzGMxU60ShCiSi-sgVPmWfBDfe8GWKUKUqPw&s",
            "name" => "Todo list",
            "description" => "Simples todo list com PHP, Bootstrap e estrutura MVC",
            "github" => "",
            "webSite" => "",
            "sectionId" => $sectionId

        ]);

        // Criando a seção
        Sections::create([

            "id" => $sectionId,
            "name" => $tableName

        ]);

    }
}
