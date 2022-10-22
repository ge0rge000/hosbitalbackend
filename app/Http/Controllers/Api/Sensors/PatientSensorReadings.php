<?php

namespace App\Http\Controllers\Api\Sensors;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SensorReading;
use Validator;

class PatientSensorReadings extends Controller
{


    public function storereadsensor(Request $request){
        $validator =   $this->validate($request,[
            'sensor_id' => 'required',
            'patient_id' => 'required',
        
        ]);

            $sensorread=new SensorReading;
            $sensorread->sensor_id=$request->sensor_id;
            $sensorread->patient_id=$request->patient_id;
            $sensorread->first_read=$request->first_read;
            $sensorread->secound_read=$request->secound_read==null? '':$request->secound_read;
            $sensorread->third_read=$request->third_read==null? '':$request->third_read;
            $sensorread->save();
            return "the sensor read is stored success fully";



    }


}
