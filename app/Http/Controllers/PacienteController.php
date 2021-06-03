<?php

namespace App\Http\Controllers;
use App\Models\Paciente;
use App\Models\Endereco;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    //
    public function listar(Request $request)
    {
        if($request->has('nome')){
            $dados["pacientes"] = Paciente::where('nome', 'like', '%'.$request->nome.'%')->paginate(13)->withQueryString(); 
        }
        else{
            $dados["pacientes"] = Paciente::paginate(13);
        }
        
        $dados['busca'] = $request->nome;

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
           
        $paciente = Paciente::create($request->only(['nome', 'email','telefone','nascimento','sexo','cpf','rg']));
       
        $dados = $request->only(['cep','logradouro','bairro','localidade','uf','complemento']);
        $dados['paciente_id'] = $paciente->id;
        Endereco::create($dados);

        return redirect()
            ->route("sistema.listar")
            ->with("sucesso", "Paciente cadastrado com sucesso");
    }

    public function editar(Request $request, int $id)
    {
        $dados["pacientes"] = Paciente::find($id);

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
        
        Paciente::where('id',$id)->update($request->except('_token'));
        return redirect()->route('sistema.listar')->with('sucesso','paciente atualizado com sucesso!');
    }

    public function excluir(int $id)
    {
        Paciente::destroy($id);
        return redirect()->route('sistemas.listar')->with('sucesso', 'paciente excluído com sucesso!');
    }
    
}
