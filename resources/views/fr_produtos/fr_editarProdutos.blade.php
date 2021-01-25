@extends('layouts.app')

@section('conteudo')

    @section('titulopagina')
    
      <div class="img" class="col-md-4 col-md-4 offset-5 col-sm-8 offset-2 col-xs-12">
          <h3>Cadastro de Produtos</h3>
      </div>

    
    @endsection 
   
    <form method="post" action="{{ route('produto.update', $produto->codigo ) }}" >
        @method('put')
        @include('fr_produtos.fr_unicoCadasEditarPord')
    
    </form>
            
@endsection


