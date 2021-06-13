<?php

namespace App\Http\Controllers;
use App\Models\Paciente;
use App\Models\Endereco;
use App\Models\Ficha;
use Illuminate\Http\Request;
class PacienteController extends Controller
{
    //
    public function listar(Request $request)
    {
        if ($request->has("nome")) {
            $dados["pacientes"] = Paciente::where(
                "nome",
                "like",
                "%" . $request->nome . "%",
            )
                ->paginate(13)
                ->withQueryString();
        } else {
            $dados["pacientes"] = Paciente::paginate(13);
        }

        $dados["busca"] = $request->nome;

        return view("sistema.listar", $dados);
    }

    public function detalhes(int $id)
    {   
        $paciente = Endereco::find($id);
        
        $dados["paciente"] = Paciente::find($id);

        $dados["endereco"] = Endereco::find($paciente->paciente_id);

        return view("sistema.detalhe", $dados);
    }

    public function cadastro()
    {
        $dados["paciente"] = new Paciente();

        return view("sistema.cadastro", $dados);
    }

    public function cadastrar(Request $request)
    {
        $request->validate([
            "nome" => "required",
            "email" => "required|unique:pacientes",
            "telefone" => "required|unique:pacientes",
            "nascimento" => "required",
            "sexo" => "required",
            "cpf" => "required|unique:pacientes",
            "rg" => "required",
            "cep" => "required",
            "logradouro" => "required",
            "bairro" => "required",
            "localidade" => "required",
            "uf" => "required",
        ]);

        $paciente = Paciente::create(
            $request->only([
                "nome",
                "email",
                "telefone",
                "nascimento",
                "sexo",
                "cpf",
                "rg",
            ]),
        );

        $dados_endereco = $request->only([
            "cep",
            "logradouro",
            "bairro",
            "localidade",
            "uf",
            "complemento",
        ]);

        $dados_endereco["paciente_id"] = $paciente->id;

        Endereco::create($dados_endereco);
        
        $dados_ficha = $request->only([
            "ficha",
        ]);

        $dados_ficha["paciente_id"] = $paciente->id;

        Ficha::create($dados_ficha);

        return redirect()
            ->route("sistema.listar")
            ->with("sucesso", "Paciente cadastrado com sucesso");
    }
    public function edicao(int $id)
    {
        $dados["paciente"] = Paciente::find($id);

        $dados["endereco"] = Endereco::find($id);

        return view("sistema.editar", $dados);
    }

    public function editar(Request $request, int $id)
    {
        $request->validate([
            "nome" => "required",
            "email" => "required|unique:pacientes",
            "telefone" => "required|unique:pacientes",
            "nascimento" => "required",
            "sexo" => "required",
            "cpf" => "required|unique:pacientes",
            "rg" => "required",
            "cep" => "required",
            "logradouro" => "required",
            "bairro" => "required",
            "localidade" => "required",
            "uf" => "required",
        ]);

        Paciente::where("id", $id)->update(
            $request->only([
                "nome",
                "email",
                "telefone",
                "nascimento",
                "sexo",
                "cpf",
                "rg",
            ]),
        );
        //$dd['paciente_id'] = $paciente->id;
        Endereco::where("id", $id)->update(
            $request->only([
                "cep",
                "logradouro",
                "bairro",
                "localidade",
                "uf",
                "complemento",
            ]),
        );

        return redirect()
            ->route("sistema.listar")
            ->with("sucesso", "paciente atualizado com sucesso!");
    }

    public function excluir(int $id)
    {
        Paciente::destroy($id);
        return redirect()
            ->route("sistema.listar")
            ->with("sucesso", "paciente excluído com sucesso!");
    }
}
