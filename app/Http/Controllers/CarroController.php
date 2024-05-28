<?php

namespace App\Http\Controllers;

use App\Http\Requests\CarroFormRequest;
use App\Http\Requests\CarroUpdateFormRequest;
use App\Models\Carro;
use Illuminate\Http\Request;

class CarroController extends Controller
{
    public function store(CarroFormRequest $request)
    {
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
    public function returnAll()
    {
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
    public function procurarPorNome($busca)
    {

        $carros = Carro::where('modelo', 'like', '%' . $busca . '%')->get();
        if (count($carros) > 0) {
            return response()->json([
                'status' => true,
                'data' => $carros
            ]);
        }


        return response()->json([
            'status' => false,
            'message' => "Não há resultados para pesquisar"
        ]);
    }
    public function updateCarro(CarroUpdateFormRequest $request)
    {
        $carros = Carro::find($request->id);

        if (!isset($carros)) {
            return response()->json([
                'status' => false,
                'massage' => "carro não encontrado"
            ]);
        }
        if (isset($request->modelo)) {
            $carros->modelo = $request->modelo;
        }
        if (isset($request->ano)) {
            $carros->ano = $request->ano;
        }
        if (isset($request->marca)) {
            $carros->marca = $request->marca;
        }
        if (isset($request->cor)) {
            $carros->cor = $request->cor;
        }
        if (isset($request->peso)) {
            $carros->peso = $request->peso;
        }
        if (isset($request->potencia)) {
            $carros->potencia = $request->potencia;
        }
        if (isset($request->descricao)) {
            $carros->descricao = $request->descricao;
        }
        if (isset($request->preco)) {
            $carros->preco = $request->preco;
        }

        $carros->update();
        return response()->json([
            'status' => true,
            'message' => "carro atualizado"
        ]);
    }
    public function excluirCarro($id)
    {
        $carros = Carro::find($id);

        if (!isset($carros)) {
            return response()->json([
                'status' => false,
                'massage' => "carro não encontrado"
            ]);
        }
        $carros->delete();

        return response()->json([
            'status' => true,
            'message' => "carro excluido com sucesso"
        ]);
    }
    public function procurarPorMarca($busca)
    {

        $carros = Carro::where('marca', 'like', '%' . $busca . '%')->get();
        if (count($carros) > 0) {
            return response()->json([
                'status' => true,
                'data' => $carros
            ]);
        }


        return response()->json([
            'status' => false,
            'message' => "Não há resultados para pesquisar"
        ]);
    }
}
