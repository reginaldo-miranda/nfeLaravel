@extends('layouts.app')

@section('conteudo')
    {{--   apresentacao de erros de validacao  --}}
    @section('titulopagina')
    
      <div class="img" class="col-md-4 col-md-4 offset-5 col-sm-8 offset-2 col-xs-12">
          <h3>Editar de Clientes</h3>
      </div>

      @endsection 

    
    <form method="post" action="{{ route('cliente.update', $codigo->codigo ) }}" >
          {{--  video aula 46 ti --}}

        @method('put')
        @include('fr_clientes.fr_unicoClienteCadastEdiar')

    </form>
   
            
@endsection

