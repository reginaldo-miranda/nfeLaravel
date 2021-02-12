@extends('layouts.app') 


@section('conteudo')
<div>
    <a href="{{ route('testevenda') }}">
       <button  class="btn btn-warning btn-sm">Pedidos</button>
    </a>
</div>


@if (count($dados)==0)

<p class="alert alert-damger">nao foi encontrado dados no banco</p>
<form action="{{ route('produto.create') }}">
    @csrf
    <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>
@else

@foreach($dados as $produto)


    <div class="row">
       
        <div class="col-4">
            
            {{ $produto->codigoProduto }} 
            {{ $produto->precoUnit }}
                               
        </div>
        
        <div class="col-4">

           


        </div>

            {{--  <div class="col-4">   --}}
            {{-- <a href="edit_func/{{ $funcionario->id_funcionarios}}">editar</a>
            <a href="#">Excluir</a>  --}}
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