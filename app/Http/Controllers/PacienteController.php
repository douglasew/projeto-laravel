<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PacienteController extends Controller
{
    //
    public function listar () {
        $dados['pacientes'] = [
            [
                'id' => 1,
                'nome' => 'Melissa Tânia Regina Ferreira',
                'telefone' => '(81) 3843-5939'
            ],
            [
                'id' => 2,
                'nome' => 'Renan Diogo Tiago Aragão',
                'telefone' => '(81) 99479-3062'
            ],
            [
                'id' => 3, 
                'nome' => 'Alice Jennifer dos Santos', 
                'telefone' => '(61) 3913-8606'
            ]
        ];

        return view('sistema.listar',$dados);
    }

    public function detalhes (int $id) {
        $dados['pacientes'] = [
            [
                'id' => 1,
                'nome' => 'Melissa Tânia Regina Ferreira',
                'telefone' => '(81) 3843-5939',
                'email' => 'test@gmail.com',
                'sexo' => 'F',
                'cpf' => '478.460.971-72',
                'dataNascimento' => '13-01-1995',
                'cep' => '50870-120',
                'logradouro' => 'Rua Capitão Francisco Coutinho',
                'bairro' => 'Areias',
                'localidade' => 'Recife',
                'uf' => 'PE'
            ],
            [
                'id' => 2,
                'nome' => 'Renan Diogo Tiago Aragão',
                'telefone' => '(81) 99479-3062',
                'email' => 'test@gmail.com',
                'sexo' => 'M',
                'cpf' => '188.699.080-89',
                'dataNascimento' => '13-01-1995',
                'cep' => '82410-326',
                'logradouro' => 'Avenida Fredolin Wolf',
                'bairro' => 'Santa Felicidade',
                'localidade' => 'Curitiba',
                'uf' => 'PR'
            ],
            [
                'id' => 3, 
                'nome' => 'Alice Jennifer dos Santos', 
                'telefone' => '(61) 3913-8606',
                'email' => 'test@gmail.com',
                'sexo' => 'M',
                'cpf' => '694.848.473-58',
                'dataNascimento' => '13-01-1995',
                'cep' => '54230-657',
                'logradouro' => 'Rua da Borboleta',
                'bairro' => 'Zumbi do Pacheco',
                'localidade' => 'Jaboatão dos Guararapes',
                'uf' => 'PE'
            ]
        ];

        return view('sistema.detalhe');
    }

    public function cadastro () {

        return view('sistema.cadastro');
    }

    public function cadastrar (Request $request) {
        $dados = $request -> all();

        print_r($dados);

        $request-> validate([
            'nome' => 'required',
            'email' => 'required',
            'telefone' => 'required',
            'cpf' => 'required',
            'data' => 'required',
            'cep' => 'required'
        ]);

        return redirect()
            ->route("sistema.listar")
            ->with("sucesso", "Paciente cadastrado com sucesso");

    }

    public function editar (int $id) {

        return view('sistema.editar');
    }

}
