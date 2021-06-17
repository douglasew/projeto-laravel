<?php

namespace App\Http\Controllers;

use App\Models\Agendamento;
use Illuminate\Http\Request;

class AgendamentoController extends Controller
{
    //Listar agendamentos

    public function listar(Request $request)
    {
        if ($request->has("nome")) {
            $dados["agendamentos"] = Agendamento::where(
                "nome",
                "like",
                "%" . $request->nome . "%",
            )
                ->paginate(13)
                ->withQueryString();
        } else {
            $dados["agendamentos"] = Agendamento::paginate(12);
        }

        $dados["busca"] = $request->nome;

        return view("sistema.lista-agendamentos", $dados);
    }

    // Rota para a tela de agendamento

    public function agendamento(){
        $dados['agendamento'] = new Agendamento;

        return view('sistema.agendamento', $dados);
    }

    // Agendar uma consulta

    public function agendar(Request $request){
        
        $request->validate([
            'nome' => 'required',
            'telefone' => 'required',
            'idade' => 'required',
            'hora' => 'required',
            'data' => 'required',
            'dentista_id' => 'required',
        ]);
        
        $agendamento = Agendamento::create($request->all());

        return redirect()->route('agendamento.listar')->with('sucesso', 'Agendamento concluído com sucesso');
    }

    // Excluir um agendamento

    public function excluir(int $id)
    {
        Agendamento::destroy($id);
        return redirect()
            ->route("agendamento.listar")
            ->with("sucesso", "paciente excluído com sucesso!");
    }
}
