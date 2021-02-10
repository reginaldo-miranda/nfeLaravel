
@extends('layouts.app') 

@section('titulopagina')
    <div class="img" class="col-md-4 col-md-4 offset-5 col-sm-8 offset-2 col-xs-12">

        <h4>Lista Pedidos</h4>
     </div>
@endsection    

@section('conteudo') 


     @if (count($dados)==0)

        <p class="alert alert-damger">nao foi encontrado dados no banco</p>
        <form action="{{ route('pedido.create') }}">
            @csrf
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    @else
      
       @foreach($dados as $pedido)
       
        
            <div class="row">
               
                <div class="col-4">
                    
                    {{ $pedido->id_pedido }} 
                                       
                </div>
                
                <div class="col-4">

                    {{ $pedido->nomeCliente }}


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

                    <form action="{{ route('produto.edit',$pedido->id_pedido ) }}" method="get">
                        @csrf
                        <button type="submit" class="btn btn-warning btn-sm">Editar</button>
                    </form>
                    <form action="{{ route('produto.destroy', $pedido->id_pedido) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                    </form>

                    <form action="{{ route('pedido.create') }}">
                        @csrf
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </form>   
                    {{-- 
                    <form action="{{ route('escolherProduto', $pedido->codigo) }}" method="get">
                        @csrf
                        <button type="submit" class="btn btn-primary">escolher</button>
                    </form>   --}}
                      
                    <div>
                        <a href ="{{ url("escolherProduto/$pedido->id_pedido") }}">
                            <button type="submit" class="btn btn-warning btn-sm">Escolher novo </button>
                        </a>
                    </div> 

                   {{--   class="glyphicon glyphicon-pencil"  --}}
               {{--  </div>  --}}  
            
            </div>
            
<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">codigo</th>
        <th scope="col">nome</th>
        <th scope="col">Nickname</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
      </tr>
      
    </tbody>
  </table>
            
           
       @endforeach 
    
     
     @endif



 @endsection 