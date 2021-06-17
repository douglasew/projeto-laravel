<?php

namespace App\Http\Controllers;
use App\Models\Paciente;
use App\Models\Endereco;
use App\Models\Ficha;
use Illuminate\Http\Request;
class PacienteController extends Controller
{
    // Listar pacientes

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
            $dados["pacientes"] = Paciente::paginate(12);
        }

        $dados["busca"] = $request->nome;

        return view("sistema.listar", $dados);
    }

    // Detalhes paciente

    public function detalhes(int $id)
    {   
        $paciente = Endereco::find($id);
        
        $dados["paciente"] = Paciente::find($id);

        $dados["endereco"] = Endereco::find($paciente->paciente_id);

        $dados["ficha"] = Ficha::find($paciente->paciente_id);

        return view("sistema.detalhe", $dados);
    }

    // Rota para o pagina de cadastro

    public function cadastro()
    {
        $dados["paciente"] = new Paciente();

        $dados["endereco"] = new Endereco();

        $dados["ficha"] = new Ficha();

        return view("sistema.cadastro", $dados);
    }

    // Cadastrar paciente

    public function cadastrar(Request $request)
    {
        
        // Validação

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
            "alergia",
            "medicacao",
            "gestante",
            "doenca",
            "cirurgia",
            "sangramento",
            "falta_de_ar",
        ]);

        $dados_ficha["paciente_id"] = $paciente->id;

        Ficha::create($dados_ficha);

        return redirect()
            ->route("paciente.listar")
            ->with("sucesso", "Paciente cadastrado com sucesso");
    }

    // Rota para a pagina de edição

    public function edicao(int $id)
    {
        $paciente = Paciente::find($id);

        $dados["paciente"] = Paciente::find($id);

        $dados["endereco"] = Endereco::find($paciente->id);

        $dados["ficha"] = Ficha::find($paciente->id);

        return view("sistema.editar", $dados);
    }

    // Editar paciente

    public function editar(Request $request, int $id)
    {   /*
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
        */
        
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

        Ficha::where("id", $id)->update(
            $request->only([
                "alergia",
                "medicacao",
                "gestante",
                "doenca",
                "cirurgia",
                "sangramento",
                "falta_de_ar",
            ]),
        );
        
        return redirect()
            ->route("paciente.listar")
            ->with("sucesso", "paciente atualizado com sucesso!");
    }

    // Excluir paciente

    public function excluir(int $id)
    {
        Paciente::destroy($id);
        return redirect()
            ->route("paciente.listar")
            ->with("sucesso", "paciente excluído com sucesso!");
    }
}
