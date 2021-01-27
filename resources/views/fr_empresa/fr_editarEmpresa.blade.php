 @extends('layouts.app')

@section('conteudo')

    @section('titulopagina')
    
      <div class="img" class="col-md-4 col-md-4 offset-5 col-sm-8 offset-2 col-xs-12">
          <h3>Editar de Empresa</h3>
      </div>

    
    @endsection 
    <form method="post"action="{{ route('empresa.update', $codigoe->codigo ) }}" >
         {{--  video aula 46 ti --}}
        @method('put')
        @include('fr_empresa.fr_unicoCadasEditarEmpresa')

   
    </form>
   
            
@endsection  

{{--
@extends('layouts.app')

@section('conteudo')

    @section('titulopagina')
    
      <div class="img" class="col-md-4 col-md-4 offset-5 col-sm-8 offset-2 col-xs-12">
          <h3>Cadastro de Produtos</h3>
      </div>

    
    @endsection 
   
    <form method="post" action="{{ route('empresa.update', $codigoe->codigo ) }}" >
        @method('put')
        @include('fr_empresa.fr_unicoCadasEditarEmpresa')
    
    </form>
            
@endsection  --}}
