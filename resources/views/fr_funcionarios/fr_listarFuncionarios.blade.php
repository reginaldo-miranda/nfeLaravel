
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
               <div class="col-md-4">
                 <h3>{{ $funcionario->nome }}</h3>
               </div>
               <div class="col-md-4">
                 <h3>{{ $funcionario->funcao }}</h3>
               </div>
   

         </div>
           
       @endforeach 
    
     
     @endif



 @endsection 