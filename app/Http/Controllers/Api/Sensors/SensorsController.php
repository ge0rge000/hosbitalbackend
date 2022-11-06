<?php

namespace App\Http\Controllers\Api\Sensors;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sensor;

class SensorsController extends Controller
{
        public function sesnsor(){

            $sensors=Sensor::all();
            return $sensors;
        }
        public function getspecificsesnsor($idsensor){

            $sensors=Sensor::where('id',$idsensor)->first();
            return $sensors;
        }
}
