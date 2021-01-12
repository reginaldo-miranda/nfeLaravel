
@extends('layouts.app') 

@section('titulopagina')
    <div>
        <h4>Lista Funcionarios</h4>
     </div>
@endsection    

@section('conteudo') 


     @if (count($dados)==0)

        <p class="alert alert-damger">nao foi encontrado dados no banco</p>
    @else
      
       @foreach($dados as $funcionario)
       
        
            <div class="row">
               
                <div class="col-4">
                    
                    {{ $funcionario->nome }} 
                                       
                </div>
                <div class="col-4">

                    {{ $funcionario->funcao }}


                </div>
                <div class="col-4">
                    <a href="edit_func/{{ $funcionario->id_funcionarios}}">editar</a> 
                   {{--   class="glyphicon glyphicon-pencil"  --}}
                </div>   
            
            </div>
            
           
       @endforeach 
    
     
     @endif



 @endsection 