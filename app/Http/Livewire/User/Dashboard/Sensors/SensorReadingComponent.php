<?php

namespace App\Http\Livewire\User\Dashboard\Sensors;

use Livewire\Component;
use App\Models\SensorReading;
use Auth;
class SensorReadingComponent extends Component
{
    public function render()
    {
        $sensorReadings=SensorReading::where("patient_id",Auth::user()->id)->get();
        return view('livewire.user.dashboard.sensors.sensor-reading-component',
    ['sensorReadings'=>$sensorReadings])->layout('layouts.userdashboard');
    }
}
