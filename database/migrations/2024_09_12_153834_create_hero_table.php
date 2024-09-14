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
        Schema::create('hero', function (Blueprint $table) {

            $table->uuid("id");
            $table->string("imageUrl", 2048);
            $table->string("welcomeMessage", 100);
            $table->string("expertise", 80);
            $table->string("linkedinUrl", 2048);
            $table->string("sectionId", 36);
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hero');
    }
};
