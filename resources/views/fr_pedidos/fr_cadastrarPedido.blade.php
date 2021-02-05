@extends('layouts.app')
{{--namespace App\Http\Controllers;
 use App\Http\Controllers\ClientesController;
use App\Http\Controllers\pedidoController;
//use Illuminate\Http\Request;
//use App\Http\Controllers\Controller; --}}

@section('conteudo')

    @section('titulopagina')
    
      <div class="img" class="col-md-4 col-md-4 offset-5 col-sm-8 offset-2 col-xs-12">
          <h3>Cadastro de Pedido</h3>
      </div>
      
    
    @endsection 
   
 
 {{--  @if (count($dados)==0)  

    <p class="alert alert-damger">nao foi encontrado dados no banco</p>
    <form action="{{ route('cliente.create') }}">
        @csrf
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
   @else  --}}
    <div class="juntar" class="form-group">

     

                <label for="text_numeroPedido">numero: </label>
                <input type="text" name="numeroPedido">
                
             {{--    <form action="{{ route('pcliente') }}" class="form form-inline"> --}}
                <form method="post"  action="/pedido" class="form form-inline">    
                    @csrf
                    <label for="text_razaosocial" class="lab">Nome do Cliente</label> 
                    <input type="text" class="form-control" id="text_razaosocial" name="nomeCliente"
                            placeholder=" Nome do cliente:" value="{{ $dados->razaosocial ?? old('razaosocial') }}">  
                
                     {{--    <div class="form-group">
                            <button type="submit" class="btn btn-primary">pesquisar cliente</button> 
                        </div>  --}}
                        <a href="{{ route('pcliente') }}">Pesquisar</a>
                        <button type="submit" class="btn btn-primary">Enviar</button> 
                       
                </form> 
                
                <form action="#" method('post')> {{-- pedido itens --}}

                    <label for="text_itens" class="lab">Produto</label> 
                    <input type="text" class="form-control" id="text_itens" name="nome_reduzido"
                            placeholder="produto" value="{{ $dadoprod->nome_reduzido ?? old('nome_reduzido') }} ">  
                

                    <div class="form-group">
                        <a href="/produto">Pesquisar</a>
                        <button type="submit" class="btn btn-primary">Enviar</button> 
                    </div>
                    {{-- @include('fr_pedidos.fr_tabelaProd'); 
                    @foreach($dadoprod as $produto) --}}
                </form>
                  
                    
                    
                </form>       
                             
    </div>
 {{--  @endif  --}} 

   

   
            
@endsection