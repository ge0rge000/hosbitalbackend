<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SensorReading;
class Sensor extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_sensor',
        'detail_sensor',
    ];
    public function sensorreading()
    {
        return $this->hasMany(SensorReading::class);
    }
}

