<?php

namespace App\Http\Controllers;

use App\Models\Agendamento;
use Illuminate\Http\Request;

class AgendamentoController extends Controller
{
    //
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
            $dados["agendamentos"] = Agendamento::paginate(13);
        }

        $dados["busca"] = $request->nome;

        return view("sistema.lista-agendamentos", $dados);
    }

    public function agendamento(){
        $dados['agendamento'] = new Agendamento;

        return view('sistema.agendamento', $dados);
    }

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

        return redirect()->route('sistema.lista-agendamentos')->with('sucesso', 'Agendamento concluído com sucesso');
    }

    public function excluir(int $id)
    {
        Agendamento::destroy($id);
        return redirect()
            ->route("sistema.lista-agendamentos")
            ->with("sucesso", "paciente excluído com sucesso!");
    }
}
