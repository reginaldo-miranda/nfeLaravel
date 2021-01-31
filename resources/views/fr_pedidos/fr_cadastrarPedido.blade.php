@extends('layouts.app')

@section('conteudo')

    @section('titulopagina')
    
      <div class="img" class="col-md-4 col-md-4 offset-5 col-sm-8 offset-2 col-xs-12">
          <h3>Cadastro de Pedido</h3>
      </div>

    
    @endsection 
    <form method="post" action="/pedido">  {{--  video aula 46 ti --}}

        @include('fr_pedidos.fr_unicoCEPedido')

   
    </form>
   
            
@endsection