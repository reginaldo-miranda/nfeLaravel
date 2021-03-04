@extends('layouts.app')

@section('titulopagina')
    <div class="img" class="col-md-4 col-md-4 offset-5 col-sm-8 offset-2 col-xs-12">
        <div class="row">
            <h4>Lista produtos para incluir no pedido</h4>
        </div>
    
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
        <form action="{{ route('produto.search')}}" method="post" class="form form-inline">
            @csrf
            <input type="text" name="filtro" placeholder="filtrar" class="form-control">
            <button type="submit" class="btn btn-primary">Pesquisar</button>
        </form>

        @foreach($dadosProd as $produto)
                <div class="row">

                        <div class="col-4">

                            {{ $produto->codigo }}
                    
                        </div>

                        <div class="col-4">

                            {{ $produto->nome_reduzido }}

                        </div>
                        <div>
                            {{ $produto->preco }}
                        </div>
                        <style>
                            .btn {
                                height: 23px;
                                margin-right: 5px;
                                font-size: 10px;
                                text-align: center;
                            }
                            #btns{
                                margin-left: 50px;
                            }

                        </style>
                        <div id="btns" class="row">
                           <form method="get" action="{{ route('lancarItens', ['codigo' => $produto, 'id_pedido' => $dadosidped]) }}">
                               @csrf
                               <button type="submit" class="btn btn-warning btn-sm">escolher btn</button> 

                            {{--   <button type="submit" onclick="window.location.replace('fr_incluirItensPedido.blade.php')">escolher iten</button>  --}}
                            </form>
                            <form action="{{ route('produto.edit',$produto->codigo ) }}" method="get">
                                @csrf
                                <button type="submit" class="btn btn-warning btn-sm">Editar</button>
                            </form>
                        </div>
                </div>
        @endforeach

    @endif

@endsection
