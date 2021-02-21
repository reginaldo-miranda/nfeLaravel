@extends('layouts.app') 


@section('conteudo')
<h2>lista de produtos do pedido</h2>
<div class="row">
    <a href="{{ route('testevenda') }}">
       <button  class="btn btn-warning btn-sm">Pedidos</button>
    </a>
  
    <form action="{{ route('listaIncluirProd', $dadosped->id_pedido) }}">


        @csrf
        <button type="submit" class="btn btn-primary">Incluir Itens</button>
    </form>

</div>


@if (count($dadosProd)==0)

<p class="alert alert-damger">nao foi encontrado dados no banco</p>
<form action="{{ route('produto.create') }}">
    @csrf
    <button type="submit" class="btn btn-primary">Incluir Itens</button>
</form>
@else
    <style>

        #text_peq{
            width: 60px;
        }
        .btn{
            height: 23px;
            margin-right: 5px;
            font-size: 10px;
            text-align: center;
        }
    </style>
 <div>
     <label>codigo do pedido</label>
     {{ $dadosped->id_pedido }}
 </div>



        @foreach($dadosProd as $key)
        <div class="row">

            <div class="espaco">
                <input type="text" class="form-control" id="text_peq" name="codigoProduto"
                placeholder="codigo Produto" value="{{  $key->codigoProduto ?? old('codigoProduto') }}">
            </div>
                    
            <div class="espaco">
                <input type="text" class="form-control" id="text_estoque" name="nome_reduzido"
                placeholder="nome_reduzido" value="{{  $key->NOME_REDUZIDO ?? old('nome_reduzido') }}">
            </div>
             
            <div class="espaco">
                <input type="text" class="form-control" id="text_peq" name="precoTotal"
                placeholder="nome_reduzido" value="{{  $key->precoTotal ?? old('precoTotal') }}">
            </div>
             
            <form action="#" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
            </form>

            <form action="{{ route('produto.create') }}">
                @csrf
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </form> 
              
                      
        </div>
        @endforeach 
         

          
          
          
            
              
            {{-- 
            <form action="{{ route('escolherProduto', $produto->codigo) }}" method="get">
                @csrf
                <button type="submit" class="btn btn-primary">escolher</button>
            </form>   -
              
            <div>
                <a href ="{{ url("escolherProduto/$produto->codigo") }}">
                    <button type="submit" class="btn btn-warning btn-sm">Escolher novo</button>
                </a>
            </div> 
            
           {{--   class="glyphicon glyphicon-pencil"  --}}
       {{--  </div>  --}}  
    
    </div>
    

@endif

@endsection