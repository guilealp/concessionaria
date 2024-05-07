<?php

use App\Http\Controllers\CarroController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('carro/store',[CarroController::class, 'store']);
Route::get('carro/all',[CarroController::class, 'returnAll']);