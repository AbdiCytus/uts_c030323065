<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFireIncidentsTable extends Migration
{
    public function up()
    {
        Schema::create('fire_incidents', function (Blueprint $table) {
            $table->id();
            $table->string('location'); // Contoh kolom lokasi
            $table->dateTime('incident_time'); // Contoh kolom waktu kejadian
            $table->text('description')->nullable(); // Deskripsi
            $table->timestamp('incident_time')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('fire_incidents');
    }
}
