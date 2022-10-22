<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Patient;
use App\Models\Sensor;

class SensorReading extends Model
{
    use HasFactory;
    protected $fillable = [
        'sensor_id',
        'patient_id',
        'first_read',
        'secound_read',
        'third_read',
    ];
    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
    public function Sensor()
    {
        return $this->belongsTo(Sensor::class);
    }
}
