<?php

namespace App\Http\Controllers;
use App\Models\Paciente;
use App\Models\Ficha;
use Illuminate\Http\Request;

class FichaController extends Controller
{
    //
    public function ficha(int $id){

        $paciente = Paciente::find($id);
        
        $dados["ficha"] = Ficha::find($paciente->paciente_id);

        return view ('sistema.ficha', $dados);
    }
}
