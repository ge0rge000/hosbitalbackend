<?php

namespace App\Http\Livewire\User\Dashboard\Appointment;

use Livewire\Component;
use App\Models\Doctor;
use App\Models\AppointmentAvailable;
class ReveseAppointment extends Component
{
    public $id_doctor;
    public function render()
    {
        $doctors=Doctor::all();
        $availableappointment=AppointmentAvailable::where('doctor_id',$this->id_doctor)->first();
        return view('livewire.user.dashboard.appointment.revese-appointment',
        ['doctors'=>$doctors,
        'availableappointment'=>$availableappointment,
        ])
        ->layout('layouts.userdashboard');
    }
}
