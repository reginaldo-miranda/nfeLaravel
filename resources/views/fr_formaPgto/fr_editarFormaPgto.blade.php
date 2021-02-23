@extends('layouts.app')

@section('conteudo')
    
    @section('titulopagina')
    
      <div class="img" class="col-md-2 col-md-2 offset-5 col-sm-8 offset-2 col-xs-12">
          <h3>Editar de forma de pagamentos</h3>
      </div>
      
      @endsection  
     
    <form method="post" action="{{ route('formapgto.update', $dadospgto->codigo ) }}" >
        @csrf
        @method('put')
        @include('fr_formaPgto.fr_unicoFormaPgto')
       
      
{{--  video aula 46 ti --}}
    </form>
   
            
@endsection