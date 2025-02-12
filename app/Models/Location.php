<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $fillable = [
        'area_id',    // ID Area terkait
        'latitude',   // Lintang (latitude)
        'longitude',  // Bujur (longitude)
        'description' // Deskripsi lokasi (opsional)
    ];

    // Relasi dengan area
    public function area()
    {
        return $this->belongsTo(Area::class);
    }
}
