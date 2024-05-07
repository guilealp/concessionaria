<?php

namespace App\Http\Controllers;

use App\Http\Requests\CarroFormRequest;
use App\Models\Carro;
use Illuminate\Http\Request;

class CarroController extends Controller
{
    public function store(CarroFormRequest $request){
        $carros = Carro::create([
            'modelo'=>$request->modelo,
            'ano'=>$request->ano,
            'marca'=>$request->marca,
            'cor'=>$request->cor,
            'peso'=>$request->peso,
            'potencia'=>$request->potencia,
            'descricao'=>$request->descricao,
            'preco'=>$request->preco
        ]);
        return response()->json([
            "success" => true,
            "message"=>'carro cadastrado com sucesso',
            "data" => $carros
        ], 200);
    }
    public function returnAll(){
        $carros = Carro::all();
        if(count($carros)> 0){
            return response()->json([
                'status' => true,
                'data' => $carros
            ]);
        }

        return response()->json([
            'status' => false,
            'message' => 'Não funciona'
        ]);
    }
}
