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


@if (count($dados)==0)

<p class="alert alert-damger">nao foi encontrado dados no banco</p>
<form action="{{ route('produto.create') }}">
    @csrf
    <button type="submit" class="btn btn-primary">Incluir Itens</button>
</form>
@else
 <div>
     <label>codigo do pedido</label>
     {{ $dadosped->id_pedido }}
 </div>


@foreach($dados as $proditens)


    <div class="row">
       
        <div class="col-4">
            
            {{ $proditens->codigoProduto }} 
            {{ $proditens->precoTotal }}
                   
                               
        </div>
        
        <div class="col-4">
             <label>nome produto</label>
                      
        </div>

            <style>

                .btn{
                    height: 23px;
                    margin-right: 5px;
                    font-size: 10px;
                    text-align: center;
                }
            </style>

          
          
          
            
            <form action="#" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
            </form>

            <form action="{{ route('produto.create') }}">
                @csrf
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </form>   
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
    
   
@endforeach 


@endif

@endsection