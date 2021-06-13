<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

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

Route::middleware(['login'])->group(function () {
    
    Route::prefix('/sistema')->group(function () {
        
        //Pacientes
        
        Route::get('/', 'PacienteController@listar')->name('sistema.listar');
        Route::get('/cadastro', 'PacienteController@cadastro')->name('sistema.cadastro');
        Route::get('/detalhes/{id}', 'PacienteController@detalhes')->name('sistema.detalhes');
        Route::get('/editar/{id}', 'PacienteController@edicao')->name('sistema.edicao');

        Route::post('/cadastrar', 'PacienteController@cadastrar')->name('cadastrar');
        Route::post('/editar/{id}', 'PacienteController@editar')->name('editar');
        Route::get('/excluir/{id}', 'PacienteController@excluir')->name('excluir');

        //Agendamnetos

        Route::post('/agendar', 'AgendamentoController@agendar')->name('agendar');
        Route::get('/agendamentos', 'AgendamentoController@listar')->name('sistema.agendamentos');
        Route::get('/agendamento', 'AgendamentoController@agendamento')->name('sistema.agendamento');
        Route::get('/excluir/agendamento{id}', 'AgendamentoController@excluir')->name('agendamento.excluir');
        
        Route::get('/ficha/{id}', 'FichaController@ficha')->name('sistema.ficha');
        //Route::get('/fichaa/{id}', 'FichaController@show')->name('sistema.ficha.detalhes');
        
    });

});