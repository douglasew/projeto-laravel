<?php

use Illuminate\Support\Facades\Route;

// Site

Route::get('/', function () {
    return view('site.index');
});

Route::get('/politica_privacidade', function () {
    return view('site.privacy-policy');
});

Route::get('/termo_consentimento', function () {
    return view('site.terms-conditions');
});

Route::get('/login', 'LoginController@login')->name('sistema.login');
Route::post('/logar', 'LoginController@logar')->name('logar');
Route::get('/logout', 'LoginController@logout')->name('logout');

// Sistema

Route::middleware(['login'])->group(function () {
    
    Route::prefix('/sistema')->group(function () {
        
        //Pacientes
        
        Route::get('/', 'PacienteController@listar')->name('paciente.listar');
        Route::get('/cadastro', 'PacienteController@cadastro')->name('paciente.cadastro');
        Route::get('/detalhes/{id}', 'PacienteController@detalhes')->name('paciente.detalhes');
        Route::get('/editar/{id}', 'PacienteController@edicao')->name('paciente.edicao');

        Route::post('/cadastrar', 'PacienteController@cadastrar')->name('cadastrar');
        Route::post('/editar/{id}', 'PacienteController@editar')->name('editar');
        Route::get('/excluir/{id}', 'PacienteController@excluir')->name('excluir');

        //Agendamentos

        Route::post('/agendar', 'AgendamentoController@agendar')->name('agendar');
        Route::get('/agendamentos', 'AgendamentoController@listar')->name('agendamento.listar');
        Route::get('/agendamento', 'AgendamentoController@agendamento')->name('sistema.agendamento');
        Route::get('/excluir/agendamento/{id}', 'AgendamentoController@excluir')->name('agendamento.excluir');
          
    });

});