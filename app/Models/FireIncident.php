<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FireIncident extends Model
{
    use HasFactory;

    protected $fillable = [
        'area_id',         // ID Area terkait
        'occurred_at',     // Waktu terjadinya insiden
        'damage_estimate', // Perkiraan kerugian
        'cause',           // Penyebab kebakaran (jika diketahui)
        'response_time',   // Waktu respons petugas
        'location',
        'description',
        'incident_time',
    ];

    // Relasi dengan area
    public function area()
    {
        return $this->belongsTo(Area::class);
    }
}
