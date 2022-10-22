<?php

namespace App\Http\Livewire\User\Dashboard\Sensors;

use Livewire\Component;
use App\Models\SensorReading;
use Auth;
use App\Models\Sensor;

class SelectSpecifiyComponent extends Component
{
    public $sensoride;
    public function mount(){


    }
    public function render()
    {
        $name_sensor=Sensor::where("id",$this->sensoride)->first();
        $sensorReadings=SensorReading::where("patient_id",Auth::user()->id)->
        where("sensor_id",$this->sensoride)->get();
        return view('livewire.user.dashboard.sensors.select-specifiy-component',
        ['sensorReadings'=>$sensorReadings,'name_sensor'=>$name_sensor->name_sensor])->layout('layouts.userdashboard');
    }
}
