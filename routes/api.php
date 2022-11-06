<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\Sensors\PatientSensorReadings;
use App\Http\Controllers\Api\auth\AuthController;
use App\Http\Controllers\Api\Sensors\SensorsController;

use App\Http\Controllers\Api\Doctor\DoctorMeeting;




Route::post('register',[AuthController::class,'register']);
Route::post('login',[AuthController::class,'login']);
Route::post('logout',[AuthController::class,'logout']);




Route::get('/sensors',[SensorsController::class,'sesnsor']);
Route::get('/sensors/{idsensor}',[SensorsController::class,'getspecificsesnsor']);




Route::middleware(['auth:sanctum','verified','doctor_admin'])->group(function () {

    Route::post('/addmeet',[DoctorMeeting::class,'add_available_meet']);
    });
