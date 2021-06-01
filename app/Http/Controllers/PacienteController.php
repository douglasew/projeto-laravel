<?php

namespace App\Http\Controllers;
use App\Models\Paciente;
use App\Models\Endereco;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    //
    public function listar()
    {
        $dados["pacientes"] = Paciente::paginate(5)->withQueryString();

        return view("sistema.listar", $dados);
    }

    public function detalhes(int $id)
    {
        $dados["paciente"] = Paciente::find($id);

        return view("sistema.detalhe", $dados);
    }

    public function cadastro()
    {
        $dados["paciente"] = new Paciente();

        return view("sistema.cadastro", $dados);
    }

    public function cadastrar(Request $request)
    {
        request()->validate([
            "nome" => "required",
            "email" => "required",
            "telefone" => "required",
            "nascimento" => "required",
            "sexo" => "required",
            "cpf" => "required",
            "rg" => "required",
        ]);

        $Paciente = Paciente::create($request->all());
        //$Endereco = Endereco::create($request->all());

        return redirect()
            ->route("sistema.listar")
            ->with("sucesso", "Paciente cadastrado com sucesso");
    }

    public function editar(int $id)
    {
        $dados["pacientes"] = Paciente::find($id);

        return view("sistema.editar", $dados);
    }
    
}
