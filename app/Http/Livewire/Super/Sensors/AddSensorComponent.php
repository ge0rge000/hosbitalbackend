<?php

namespace App\Http\Livewire\Super\Sensors;

use Livewire\Component;
use App\Models\Sensor;
use Route;
use Livewire\WithFileUploads;
class AddSensorComponent extends Component
{
    use WithFileUploads;
    public $sensor_name;
    public $sensor_image;
    public $sensor_detail;
    protected $rules = [
        'sensor_name' => 'required',
        'sensor_detail'=> 'required',
    ];
    public function add_sensor(){
        $sensor =new Sensor;
        $sensor->name_sensor=$this->sensor_name;
        $sensor->detail_sensor=$this->sensor_detail;
        $image_name_sensor = time().'.'.$this->sensor_image->extension();
        $this->sensor_image->storeAs('sensorsimages',$image_name_sensor);
        $sensor->image_sensor=$image_name_sensor;
        $sensor->save();
        return redirect()->route('show_sensor');
    }
    public function render()
    {
        return view('livewire.super.sensors.add-sensor-component')->layout('layouts.super');
    }
}

