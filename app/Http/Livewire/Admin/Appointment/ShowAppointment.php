<?php

namespace App\Http\Livewire\Admin\Appointment;

use Livewire\Component;
use App\Models\AppointmentAvailable;
use Auth;
class ShowAppointment extends Component
{
    public function render()
    {
        $appoint=AppointmentAvailable::where("doctor_id",Auth::user()->doctor->id)->first();
        return view('livewire.admin.appointment.show-appointment',['appoint'=>$appoint])->layout('layouts.admin');
    }
}
