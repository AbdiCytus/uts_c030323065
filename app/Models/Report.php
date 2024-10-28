<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $fillable = [
        'fire_incident_id', // ID kejadian kebakaran
        'fire_risk_id',     // ID risiko kebakaran
        'description',       // Deskripsi laporan
        'report_date',       // Tanggal laporan
    ];

    public function fireIncident()
    {
        return $this->belongsTo(FireIncident::class);
    }

    public function fireRisk()
    {
        return $this->belongsTo(FireRisk::class);
    }
}
