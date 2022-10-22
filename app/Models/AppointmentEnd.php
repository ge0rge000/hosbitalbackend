<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class AppointmentEnd extends Model
{
    use HasFactory;
    protected $fillable = [
        'typeappo',
        'doctor_id',
        'patient_id',
        'reverse_time',
        'try_time',
        'name_patient',
        'mobilephone_patient',
        'mobilephone_patient_another',
        'address',
        'reverse_time',
    ];
    public function patient()
    {
        return $this->belongsTo(User::class);
    }
    public function doctor()
    {
        return $this->belongsTo(User::class);
    }
}
