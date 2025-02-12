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
        Schema::create('fire_risks', function (Blueprint $table) {
            $table->id();
            $table->string('risk_level'); // Level risiko (misal: rendah, sedang, tinggi)
            $table->text('description')->nullable(); // Deskripsi risiko
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fire_risks');
    }
};
