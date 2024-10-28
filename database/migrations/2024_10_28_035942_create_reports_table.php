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
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->foreignId('area_id')->constrained('areas'); // Foreign key ke area
            $table->foreignId('client_id')->constrained('clients'); // Foreign key pengguna yang membuat laporan
            $table->date('report_date'); // Tanggal laporan dibuat
            $table->text('content'); // Isi laporan
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};
