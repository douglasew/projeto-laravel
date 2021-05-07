<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function login () {

        
        return view('sistema.login');
    }

    public function logar(Request $request){
        if ($request->email == "user@user.com" && $request->senha == "123") {
            return redirect()->route("sistema.listar");
        }
        return redirect()
            ->back()
            ->with("erro", "Login ou senha incorreta");
    }
    
}
