
@extends('layouts.app') 

@section('titulopagina')
    <div class="img" class="col-md-4 col-md-4 offset-5 col-sm-8 offset-2 col-xs-12">

        <h4>Lista Clientes</h4>
     </div>
@endsection    

@section('conteudo') 


     @if (count($dados)==0)

        <p class="alert alert-damger">nao foi encontrado dados no banco</p>
    @else
      
       @foreach($dados as $cliente)
       
        
            <div class="row">
                <div class="col-2">
                    
                    {{ $cliente->codigo }} 
                                       
                </div>
               
                <div class="col-4">
                    
                    {{ $cliente->razaosocial }} 
                                       
                </div>
                <div class="col-2">

                    {{ $cliente->cnpj }}


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

                    <form action="{{ route('cliente.edit', $cliente->codigo ) }}" method="get">
                        @csrf
                        <button type="submit" class="btn btn-warning btn-sm">Editar</button>
                    </form>
                    <form action="{{ route('cliente.destroy', $cliente->codigo) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Excluir</button>

                    </form>
                      
                    

                   {{--   class="glyphicon glyphicon-pencil"  --}}
               {{--  </div>  --}}  
            
            </div>
            
           
       @endforeach 
    
     
     @endif



 @endsection 