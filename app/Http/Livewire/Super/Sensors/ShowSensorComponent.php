<?php

namespace App\Http\Livewire\Super\Sensors;

use Livewire\Component;
use App\Models\Sensor;
class ShowSensorComponent extends Component
{
    public function delete_sensor($ide){
        $sensor=Sensor::where('id',$ide)->first();
        $sensor->delete();
        session()->flash("message_delete","the sensor is deleted");
    }
    public function render()
    {
        $sensors=Sensor::all();
        return view('livewire.super.sensors.show-sensors-component',['sensors'=>$sensors])->layout('layouts.super');
    }
}

