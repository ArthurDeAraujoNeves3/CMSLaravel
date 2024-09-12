<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            
            $table->string("id", 36);
            $table->string("imageUrl", 2048);
            $table->string("name", 80);
            $table->string("description", 500);
            $table->string("github", 1000);
            $table->string("webSite", 1000);
            $table->string("sectionId", 36);
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
