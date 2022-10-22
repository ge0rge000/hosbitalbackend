<?php

namespace App\Http\Livewire\Admin\Appointment;

use Livewire\Component;
use App\Models\AppointmentAvailable;
use Auth;
class AddAppointmentComponent extends Component
{
    public $date_avail_from;
    public $date_avail_to;
    public $time_avail_from;
    public $time_avail_to;
    public $price_reverse;
    public $price_try;
    public $comment;

public function mount(){
    $availableappointment=AppointmentAvailable::where('doctor_id',Auth::user()->doctor->id)->first();
    if($availableappointment==null){

    }else{
        $this->date_avail_from= $availableappointment->date_avail_from;
        $this->date_avail_to= $availableappointment->date_avail_to;
        $this->time_avail_from= $availableappointment->time_avail_from;
        $this->time_avail_to= $availableappointment->time_avail_to;
        $this->price_reverse= $availableappointment->price_reverse;
        $this->price_try= $availableappointment->price_try;


        $this->comment= $availableappointment->comment;
    }
}

    protected $rules = [
        'date_avail_from' => 'required',
        'date_avail_to'=> 'required',
        'time_avail_from'=> 'required',
        'time_avail_to'=> 'required',
        'comment'=> 'required',
    ];

    public function case_available_apppoint(){

        if(AppointmentAvailable::where('doctor_id',Auth::user()->doctor->id)->exists()){
            $availableappointment=AppointmentAvailable::where('doctor_id',Auth::user()->doctor->id)->first();
        }else{
            $availableappointment=new AppointmentAvailable;
        }
        $availableappointment->doctor_id=Auth::user()->doctor->id;
        $availableappointment->date_avail_from=$this->date_avail_from;
        $availableappointment->date_avail_to=$this->date_avail_to;
        $availableappointment->time_avail_from=$this->time_avail_from;
        $availableappointment->time_avail_to=$this->time_avail_to;

        $availableappointment->price_reverse=$this->price_reverse;
        $availableappointment->price_try=$this->price_try;

        $availableappointment->comment=$this->comment;
        $availableappointment->save();
        return redirect()->route('show_appointment_doc');

    }
    public function render()
    {
        return view('livewire.admin.appointment.add-appointment-component')->layout('layouts.admin');
    }
}
