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
Route::any('cliente.search', 'ClientesController@search')->name('cliente.search');

//--------------------------------------------------------------------

  Route::resource('fornecedor', 'fornecedorController');
//--------------------------------------------------------------------

Route::resource('produto', 'produtoController');
Route::get('listaIncluirProd/{id_pedido}', 'produtoController@itens_p_cadastrar_pedido')->name('listaIncluirProd');
Route::any('search','produtoController@search')->name('produto.search');
//--------------------------------------------------------------------

Route::resource('empresa', 'empresaController');

//--------------------------------------------------------------------

Route::resource('pedido', 'pedidoController');
//Route::get('pesquisaCliente', 'pedidoController@pesquisarCliente')->name('pesquisacliente');

Route::get('PesquisaCpedidos', 'pedidoController@PCliente')->name('pcliente');
Route::get('escolherCliente/{codigo}', 'pedidoController@escolherCliente')->name('escolherCliente');
Route::get('escolherProduto/{codigo}', 'pedidoController@escolherproduto')->name('escolherProduto');
Route::get('listarProdPedido/{id_pedido}','pedidoitensController@prencherTabela')->name('listarProdPedido');

Route::any('searchPed', 'ClientesController@searchClientePed')->name('pedido.searchPed');

//--------------------------------------------------------------------


Route::resource('PedidoItens', 'pedidoitensController');
Route::get('lancarItens/{codigo}/{nome_reduzido}' , 'pedidoitensController@lancarItens')->name('lancarItens');



//--------------------------------------------------------------------

Route::get('listarProdPedido/{id_pedidoitens}','pedidoitensController@prencherTabela')->name('listarProdPedido');


//--------------------------------------------------------------------
/*Route::get('/listarfuncionario', function () {
    return view('fr_funcionarios.fr_listarFuncionarios');
});*/


//--------------------------------------------------------------------
Route::get('/administrador',function(){
    return view('fr_admin');
});


//{{-- λ php artisan make:model empresa -mcr --}}

//------------------------------------------------------------------------

Route::get('vendas', 'pedidoController@index')->name('testevenda');

//------------------------------------------------------------------------
  
Route::resource('formapgto','formaPgtoController');
//------------------------------------------------------------------------

// php artisan make:model post -mcr