
@extends('layouts.app') 

@section('titulopagina')
    <div class="img" class="col-md-4 col-md-4 offset-5 col-sm-8 offset-2 col-xs-12">

        <h4>Lista Funcionarios</h4>
     </div>
@endsection    

@section('conteudo') 


     @if (count($dados)==0)

        <p class="alert alert-damger">nao foi encontrado dados no banco</p>
        <form action="{{ route('usuario.create') }}">
            @csrf
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>  
    @else
      
       @foreach($dados as $usuarios)
       
        
            <div class="row">
               
                <div class="col-4">
                    
                    {{ $usuarios->usuario }} 
                                       
                </div>
                <div class="col-4">

                    {{ $usuarios->email }}


                </div>

                    {{--  <div class="col-4">   --}}
                    {{-- <a href="edit_func/{{ $usuarios->id_funcionarios}}">editar</a>
                    <a href="#">Excluir</a>  --}}
                    <style>

                        .btn{
                            height: 23px;
                            margin-right: 5px;
                            font-size: 10px;
                            text-align: center;
                        }
                    </style>

                    <form action="{{ route('usuario.edit',$usuarios->id_usuarios ) }}" method="get">
                        @csrf
                        <button type="submit" class="btn btn-warning btn-sm">Editar</button>
                    </form>
                    <form action="{{ route('usuario.destroy', $usuarios->id_usuarios) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                    </form>
                    <form action="{{ route('usuario.create') }}">
                        @csrf
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </form>  
                      
                    

                   {{--   class="glyphicon glyphicon-pencil"  --}}
               {{--  </div>  --}}  
            
            </div>
            
           
       @endforeach 
    
     
     @endif



 @endsection 
