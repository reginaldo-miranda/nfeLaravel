@extends('layouts.app')

@section('conteudo')

    @section('titulopagina')
    
      <div class="img" class="col-md-4 col-md-4 offset-5 col-sm-8 offset-2 col-xs-12">
          <h3>Cadastro de Clientes</h3>
      </div>

    
    @endsection 
    <form method="post" action="/cliente">  {{--  video aula 46 ti --}}

        @include('fr_clientes.fr_unicoClienteCadastEdiar')

   
    </form>
   
            
@endsection

