<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = [
        'doctor_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'doctor_id');
    }
}
