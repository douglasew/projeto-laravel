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
        Route::get('/', 'PacienteController@listar')->name('sistema.listar');
        Route::get('/cadastro', 'PacienteController@cadastro')->name('sistema.cadastro');
        Route::post('/cadastrar', 'PacienteController@cadastrar')->name('cadastrar');
        Route::get('/detalhes/{id}', 'PacienteController@detalhes')->name('sistema.detalhes');
        Route::get('/editar/{id}', 'PacienteController@editar')->name('sistema.editar');
        
    });

});