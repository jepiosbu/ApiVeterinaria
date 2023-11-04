<?php

use App\Http\Controllers\TipoMascotaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('users',[TipoMascotaController::class,'getusuario']);
Route::post('user/post',[TipoMascotaController::class,'postusuario']);
Route::get('tmascotas',[TipoMascotaController::class,'gettmascota']);
Route::get('vacunas',[TipoMascotaController::class,'getvacuna']);
Route::post('mascota/post',[TipoMascotaController::class,'postmascota']);
Route::get('mascotas/{id}',[TipoMascotaController::class,'getmascotas']);
Route::post('control/post',[TipoMascotaController::class,'postcontrol']);
Route::get('registros/{id}',[TipoMascotaController::class,'getregistros']);