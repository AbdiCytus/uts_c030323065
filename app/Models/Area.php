<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',         // Nama area
        'location',     // Lokasi area (koordinat atau alamat)
        'risk_level',   // Tingkat risiko kebakaran (rendah, sedang, tinggi)
    ];

    // Relasi dengan laporan kebakaran
    public function fireReports()
    {
        return $this->hasMany(FireReport::class);
    }

    // Relasi dengan lokasi
    public function locations()
    {
        return $this->hasMany(Location::class);
    }
}
