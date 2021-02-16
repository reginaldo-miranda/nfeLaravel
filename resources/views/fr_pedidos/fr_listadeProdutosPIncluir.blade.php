@extends('layouts.app')

@section('titulopagina')
<div class="img" class="col-md-4 col-md-4 offset-5 col-sm-8 offset-2 col-xs-12">

    <h4>Lista produtos para incluir no pedido</h4>
</div>
@endsection

@section('conteudo')


@if (count($dadosProd)==0)

<p class="alert alert-damger">nao foi encontrado dados no banco</p>
<form action="{{ route('produto.create') }}">
    @csrf
    <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>
@else

<div>
  <label>id pedido</label>
  {{ $dadosidped }}
     

</div>
@foreach($dadosProd as $produto)


<div class="row">

    <div class="col-4">

        {{ $produto->codigo }}
        


    </div>

    <div class="col-4">

        {{ $produto->nome_reduzido }}


    </div>

    <style>
        .btn {
            height: 23px;
            margin-right: 5px;
            font-size: 10px;
            text-align: center;
        }

    </style>


     <form method="get" action="{{ route('lancarItens', ['codigo' => $produto, 'id_pedido' => $dadosidped]) }}">


                         

        @csrf
        <button type="submit" class="btn btn-warning btn-sm">escolher btn</button>
    </form>


  

</div>


@endforeach


@endif



@endsection
