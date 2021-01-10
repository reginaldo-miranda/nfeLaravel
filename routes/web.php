<?php

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
    return view('welcome');
});

//-----------------------------------------------------------------
Route::resource('usuario', 'usuariosController');

Route::post('executaLog', 'usuariosController@execurtarLogin');

//Route::get('cadastrorUsuario' ,'usuariosController@telacadastrar');
Route::get('Rotchamarlogim','usuariosController@telaLogin');
//-----------------------------------------------------------------


Route::resource('funcionario', 'FuncionarioController');

/*
Route::get('cadastrofunc', 'FuncionarioController@telacadastrarFunc');

/*Route::get('/listarfuncionario', function () {
    return view('fr_funcionarios.fr_listarFuncionarios');
});*/

//--------------------------------------------------------------------

    
Route::get('/administrador',function(){
    return view('fr_admin');
});




