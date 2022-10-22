<?php

namespace App\Http\Livewire\Super\Sensors;

use Livewire\Component;
use App\Models\Sensor;
use Livewire\WithFileUploads;
use File; // For File
use Storage; // For Storage
class EditSensorComponent extends Component
{
    use WithFileUploads;

    public $sensor_name;
    public $sensor_detail;
    public $id_sensor;

    public $sensor_image;
    public $new_sensor_image;


    protected $rules = [
        'sensor_name' => 'required',
        'sensor_detail'=> 'required',
    ];
    public function mount($ide){
        $sensor=Sensor::where('id',$ide)->first();
        $this->sensor_name=$sensor->name_sensor;
        $this->sensor_image=$sensor->image_sensor;
        $this->sensor_detail=$sensor->detail_sensor;
        $this->id_sensor=$ide;
    }
    public function edit_sensor(){
        $sensor =Sensor::where('id',$this->id_sensor)->first();
        $sensor->name_sensor=$this->sensor_name;
        if($this->new_sensor_image!=null){
            $image_name_sensor = time().'.'.$this->new_sensor_image->extension();
            $this->new_sensor_image->storeAs('sensorsimages',$image_name_sensor);
            $sensor->image_sensor=$image_name_sensor;
            $path = public_path().'/sensors/sensorsimages/'.$this->sensor_image;
            unlink($path);
          }
        $sensor->detail_sensor=$this->sensor_detail;
        $sensor->save();
        return redirect()->route('show_sensor');
    }
    public function render()
    {

        return view('livewire.super.sensors.edit-sensor-component')->layout('layouts.super');
    }
}
