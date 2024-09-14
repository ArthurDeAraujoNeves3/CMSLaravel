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
        Schema::create('about_me', function (Blueprint $table) {
            
            $table->uuid("id");
            $table->string("location", 80);
            $table->string("description", 500);
            $table->string("pdf");
            $table->string("sectionId", 36);
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_me');
    }
};
