<?php

namespace Database\Seeders;

use App\Models\Carro;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarroSeeder extends Seeder
{
    
    public function run(): void
    {
        for($i = 1; $i < 10; $i++){
            Carro::create([
                
                'modelo' => "teste ".$i,
                'ano' => rand(2000, 2024),
                'marca' => "teste".$i,
                'cor' => "teste".$i,
                "peso"=>rand(1900,2023),
                "potencia"=>rand(600,1000),
                "descricao"=>"teste".$i,
                "preco"=>rand(10000,99999),
    
            ]);
    }
}
}
