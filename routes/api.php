<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\anfitrionController;
use App\Http\Controllers\huespedController;
use App\Http\Controllers\imagenController;
use App\Http\Controllers\inmuebleController;
use App\Http\Controllers\pagoController;
use App\Http\Controllers\reservaController;
use App\Http\Controllers\servicioController;


//RUTAS PARA INGRESAR, MODIFICAR, ELIMINAR ANFITRION DESDE FORMULARIO
Route::get('/getanfitrion', [anfitrionController::class,'index']);
Route::post('/postanfitrion', [anfitrionController::class,'store']);
Route::delete('/delanfitrion/{idanfitrion}', [anfitrionController::class,'destroy']);
Route::put('/putanfitrion/{idanfitrion}', [anfitrionController::class,'update']);

//RUTAS PARA INGRESAR, MODIFICAR, ELIMINAR HUESPED DESDE FORMULARIO
Route::get('/gethuesped',[huespedController::class,'index']);
Route::post('/posthuesped', [huespedController::class,'store']);
Route::delete('/delhuesped/{idhuesped}', [huespedController::class,'destroy']);
Route::put('/puthuesped/{idhuesped}', [huespedController::class,'update']);



//RUTAS PARA INGRESAR, MODIFICAR, ELIMINAR INMUEBLE DESDE FORMULAR

Route::get('/getinmuebles',[inmuebleController::class,'index']);
Route::post('/postinmuebles',[inmuebleController::class,'store']);
Route::delete('/delinmuebles/{id}',[inmuebleController::class,'destroy']);
Route::put('/putinmuebles/{id}',  [inmuebleController::class,'update']);


//RUTAS PARA INGRESAR, MODIFICAR, ELIMINAR  IMAGEN DESDE FORMULAR
Route::get('/getimagen',[imagenController::class,'index']);
Route::post('/postimagen', [imagenController::class,'store']);
Route::delete('/delimagen/{id}', [imagenController::class,'destroy']);
Route::put('/putimagen/{id}', [imagenController::class,'update']);

//RUTAS PARA AGREGAR RESERVA

Route::get('/getreserva',[reservaController::class,'index']);
Route::post('/postreserva', [reservaController::class,'store']);
Route::delete('/delreserva/{id}',[reservaController::class,'destroy']);
Route::put('/putreserva/{id}', [reservaController::class,'update']);


//RUTAS PARA AGREGAR SERVICIO   
Route::get('/getservicio',[servicioController::class,'index']);
Route::post('/postservicio', [servicioController::class, 'store']);
Route::delete('/delservicio/{id}',[servicioController::class,'destroy']);
Route::put('/putservicio/{id}', [servicioController::class,'update']);

//RUTAS PARA AGREGAR PAGO   
Route::get('/getpago',[pagoController::class,'index']);
Route::post('/postpago', [pagoController::class, 'store']);
Route::delete('/delpago/{id}',[pagoController::class,'destroy']);
Route::put('/putpago/{id}', [pagoController::class,'update']);

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
  //  return $request->user();
//});
