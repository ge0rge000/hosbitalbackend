<?php

namespace App\Http\Controllers\Api\Doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\User;
use App\Models\AppointmentAvailable;
use Auth;
class DoctorMeeting extends Controller
{
    public function add_available_meet(Request $req){


        $fileds=$req->validate([
            'date_avail_from'=>'required',
            'date_avail_to'=>'required',
            'time_avail_from'=>'required',
            'time_avail_to'=>'required',
            'time_meeting'=>'required',
            'price_reverse'=>'required',
            'price_try'=>'required',

        ]);
        if(Auth::user()->usertype=="DOC"){

            $AppointmentAvailable =new AppointmentAvailable;
            $AppointmentAvailable->doctor_id=Auth::user()->id;
            $AppointmentAvailable->date_avail_from=$req->date_avail_from;
            $AppointmentAvailable->date_avail_to=$req->date_avail_to;
            $AppointmentAvailable->time_avail_from=$req->time_avail_from;
            $AppointmentAvailable->time_avail_to=$req->time_avail_to;
            $AppointmentAvailable->time_meeting=$req->time_meeting;
            $AppointmentAvailable->price_reverse=$req->price_reverse;
            $AppointmentAvailable->price_try=$req->price_try;
            $AppointmentAvailable->comment=$req->comment;

            $AppointmentAvailable->save();


            return response(
                ['message'=>'add times succfullay ',
                 'status'=> true,
                 'data'=>$AppointmentAvailable,
                 ]
            ,200);
        }else{
            return response(
                ['message'=>' not doctor ',
                 ]
            ,200);
        }
    }
}
