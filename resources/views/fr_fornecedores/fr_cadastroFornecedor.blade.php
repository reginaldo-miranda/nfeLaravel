@extends('layouts.app')

@section('conteudo')

    @section('titulopagina')
    
      <div class="img" class="col-md-4 col-md-4 offset-5 col-sm-8 offset-2 col-xs-12">
          <h3>Cadastro de Fornecedores</h3>
      </div>

    
    @endsection 
    <form method="post" action="/fornecedor">  {{--  video aula 46 ti --}}

        @include('fr_fornecedores.fr_unicoCEFornecedores')

   
    </form>
   
            
@endsection