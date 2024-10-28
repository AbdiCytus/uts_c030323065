<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FireReport extends Model
{
    use HasFactory;

    protected $fillable = [
        'area_id',       // ID Area terkait
        'reporter_name', // Nama pelapor
        'description',   // Deskripsi kebakaran
        'status',        // Status laporan (pending, selesai, dll.)
        'reported_at',   // Tanggal dan waktu laporan
    ];

    // Relasi dengan area
    public function area()
    {
        return $this->belongsTo(Area::class);
    }
}
