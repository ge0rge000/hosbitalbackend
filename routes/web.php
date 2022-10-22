<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\User\UserHome;

use App\Http\Livewire\Admin\AdminHome;
use App\Http\Livewire\Super\SuperAdmin;
use App\Http\Livewire\Super\Sensors\AddSensorComponent;
use App\Http\Livewire\Super\Sensors\ShowSensorComponent;
use App\Http\Livewire\Super\Sensors\EditSensorComponent;
use App\Http\Livewire\Admin\Appointment\AddAppointmentComponent;
use App\Http\Livewire\Admin\Appointment\ShowAppointment;
use App\Http\Livewire\User\Dashboard\HomeDashboard;
use App\Http\Livewire\User\Dashboard\Appointment\ReveseAppointment;
use App\Http\Livewire\User\Dashboard\Sensors\SensorReadingComponent;
use App\Http\Livewire\User\Dashboard\Sensors\SelectSpecifiyComponent;

    Route::get('/',UserHome::class);

Route::middleware(['auth:sanctum','verified'])->group(function () {
    Route::get('/userdashboard',HomeDashboard::class)->name('user_dashboard');
    //appoint
    Route::get('/reverseappointment',ReveseAppointment::class)->name('reverse_user');
    ///sensors
    Route::get('/sensorsreeading',SensorReadingComponent::class)->name('sensorread');

    Route::get('/sensorsreading/{sensoride}',SelectSpecifiyComponent::class)->name('sensorreadspecifiy');

});

Route::middleware(['auth:sanctum','verified','doctor_admin'])->group(function () {

Route::get('/doctor',AdminHome::class)->name('doctor_dashboard');
Route::get('/caseavailableappointment',AddAppointmentComponent::class)->name('add_appointment_doc');
Route::get('/show_available_appointment',ShowAppointment::class)->name('show_appointment_doc');

});

Route::middleware(['auth:sanctum','verified','super_admin'])->group(function () {
    Route::get('/superadmin',SuperAdmin::class)->name("home_super");;
    //sensors
    Route::get('/showsensor',ShowSensorComponent::class)->name("show_sensor");
    Route::get('/addsensor',AddSensorComponent::class)->name("add_sensor");
    Route::get('/editsensor/{ide}',EditSensorComponent::class)->name("edit_sensor");

    });
