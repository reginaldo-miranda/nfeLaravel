@extends('layouts.app')

@section('conteudo')
    {{--   apresentacao de erros de validacao 
    @section('titulopagina')
    
      <div class="img" class="col-md-4 col-md-4 offset-5 col-sm-8 offset-2 col-xs-12">
          <h3>Editar de forma de pagamentoss</h3>
      </div>
      
      @endsection  --}}
     
    <form method="post" action="{{ route('formapgto.update', $dadospgto->codigo ) }}" >
        @csrf
        @method('put')
        @include('fr_formaPgto.fr_unicoFormaPgto')
       
      
{{--  video aula 46 ti --}}
    </form>
   
            
@endsection