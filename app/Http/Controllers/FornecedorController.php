<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index() {
        $fornecedores = [
            0 => [
                'nome' => 'Fornecedor 1',
                'sexo' => 'M',
                'status' => 'N',
                'cnpj' => '00.000.000/000-00',
                'ddd' => '88',
                'telefone' => '0000-0000'
            ],
            1 => [
                'nome' => 'Fornecedor 2',
                'sexo' => 'F',
                'status' => 'S',
                'cnpj' => null,
                'ddd' => '11',
                'telefone' => '0000-0000'
            ],
            2 => [
                'nome' => 'Fornecedor 3',
                'sexo' => 'M',
                'status' => 'N',
                'cnpj' => '00.000.000/000-01',
                'ddd' => '85',
                'telefone' => '0000-0000'
            ],
            3 => [
                'nome' => 'Fornecedor 4',
                'sexo' => 'F',
                'status' => 'S',
                'cnpj' => null,
                'ddd' => '32',
                'telefone' => '0000-0004'
            ]
        ];

        /* $msg = isset($fornecedores[1]['cnpj']) ? 'CNPJ informado' : 'CNPJ não informado';
        echo $msg; */

        return view('app.fornecedores.index', compact('fornecedores'));
    }
}
