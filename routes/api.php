<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\Sensors\PatientSensorReadings;
use App\Http\Controllers\Api\auth\AuthController;





Route::post('register',[AuthController::class,'register']);
Route::post('login',[AuthController::class,'login']);
Route::post('logout',[AuthController::class,'logout']);


Route::get('/sensors',function(){
        return 'sensors';
});

Route::post('/sensorread',[PatientSensorReadings::class,'storereadsensor']);




Route::middleware(['auth:sanctum','verified'])->group(function () {

});
