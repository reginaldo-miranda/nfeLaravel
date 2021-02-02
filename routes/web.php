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

//use Illuminate\Routing\Route;

//use Illuminate\Routing\Route;

use App\Http\Controllers\ClientesController;
use App\Http\Controllers\pedidoController;

Route::get('/', function () {
    return view('welcome');
});

//-----------------------------------------------------------------
Route::resource('usuario', 'usuariosController');

Route::post('executaLog', 'usuariosController@execurtarLogin');

//Route::get('cadastrorUsuario' ,'usuariosController@telacadastrar');
//Route::get('Rotchamarlogim','usuariosController@telaLogin');
Route::get('logim','usuariosController@telaLogin');
//-----------------------------------------------------------------


Route::resource('funcionario', 'FuncionarioController');

Route::get('edit_func/{id_funcionarios}', 'FuncionarioController@edit');

/*
Route::get('cadastrofunc', 'FuncionarioController@telacadastrarFunc');

/*Route::get('/listarfuncionario', function () {
    return view('fr_funcionarios.fr_listarFuncionarios');
});*/

//--------------------------------------------------------------------

Route::resource('cliente', 'ClientesController');
Route::any('search', 'ClientesController@search')->name('cliente.search');

//--------------------------------------------------------------------

  Route::resource('fornecedor', 'fornecedorController');
//--------------------------------------------------------------------

Route::resource('produto', 'produtoController');

//--------------------------------------------------------------------

Route::resource('empresa', 'empresaController');

//--------------------------------------------------------------------

Route::resource('pedido', 'pedidoController');
//Route::get('pesquisaCliente', 'pedidoController@pesquisarCliente')->name('pesquisacliente');

Route::get('PesquisaCpedidos', 'pedidoController@PCliente')->name('pcliente');
Route::get('escolherCliente', 'pedidoController@escolherCliente')->name('escolherCliente');

Route::any('searchPed', 'pedidoController@searchClientePed')->name('pedido.searchPed');


/*Route::get('/listarfuncionario', function () {
    return view('fr_funcionarios.fr_listarFuncionarios');
});*/


//--------------------------------------------------------------------
Route::get('/administrador',function(){
    return view('fr_admin');
});


//{{-- λ php artisan make:model empresa -mcr --}}

