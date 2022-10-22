<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Doctor;

class AppointmentAvailable extends Model
{
    use HasFactory;
    protected $fillable = [
        'doctor_id',
        'time_avail_from',
        'time_avail_to',
        'date_avail_from',
        'date_avail_to',
        'price_reverse',
        'price_try',
        'comment',
    ];

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
}
