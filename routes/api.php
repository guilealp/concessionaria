<?php

use App\Http\Controllers\CarroController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('carro/store',[CarroController::class, 'store']);
Route::get('carro/all',[CarroController::class, 'returnAll']);
Route::post('carro/pesquisa/modelo',[CarroController::class,'procurarPorNome']);
Route::put('carro/update',[CarroController::class,'updateCarro']);
Route::delete('carro/deletar/{id}',[CarroController::class,'excluirCarro']);