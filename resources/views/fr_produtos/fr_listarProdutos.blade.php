
@extends('layouts.app') 

@section('titulopagina')
    <div class="img" class="col-md-4 col-md-4 offset-5 col-sm-8 offset-2 col-xs-12">

        <h4>Lista produtos</h4>
     </div>
@endsection    

@section('conteudo') 


     @if (count($dados)==0)

        <p class="alert alert-damger">nao foi encontrado dados no banco</p>
        <form action="{{ route('produto.create') }}">
            @csrf
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    @else
      
       @foreach($dados as $produto)
       
        
            <div class="row">
               
                <div class="col-2">
                    {{ $produto->codigo }} 
                </div>
                
                <div class="col-4">

                    {{ $produto->nome_reduzido }}

                </div>
                <div class="col-2">
                    {{ $produto->preco }}
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

                    <form action="{{ route('produto.edit',$produto->codigo ) }}" method="get">
                        @csrf
                        <button type="submit" class="btn btn-warning btn-sm">Editar</button>
                    </form>
                    <form action="{{ route('produto.destroy', $produto->codigo) }}" method="post">
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
                    </form>  
                      
                    <div>
                        <a href="{{ route('PedidoItens.create') }}">

                            <button type="submit" class="btn btn-warning btn-sm">Escolher novo</button>
                        </a>
                    </div> 

                    <form action="{{ route('PedidoItens.edit',$produto->codigo ) }}" method="get">
                        @csrf
                        <button type="submit" class="btn btn-warning btn-sm">escolher btn</button>
                    </form> --}}



                   {{--   class="glyphicon glyphicon-pencil"  --}}
               {{--  </div>  --}}  
            
            </div>
            
           
       @endforeach 
    
     
     @endif



 @endsection 