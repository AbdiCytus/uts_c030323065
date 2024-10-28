<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FireRisk extends Model
{
    use HasFactory;

    protected $fillable = [
        'location',         // Contoh kolom lokasi
        'risk_level',       // Contoh kolom tingkat risiko
        'description',      // Deskripsi risiko
    ];
}
