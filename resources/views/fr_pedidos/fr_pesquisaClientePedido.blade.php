@extends('layouts.app')

@section('titulopagina')
<div class="img" class="col-md-4 col-md-4 offset-5 col-sm-8 offset-2 col-xs-12">

    <h4>Lista Clientes para o pedido</h4>
</div>
@endsection

@section('conteudo')

                                 
{{-- 
        <form action="{{ route('pedido.searchPed')}}" method="post" class="form form-inline">
            @csrf
            <input type="text" name="filtro" placeholder="filtrar" class="form-control" >
            <button type="submit" class="btn btn-primary">Pesquisar cli</button> 
        </form>  --}}

        @if (count($dados)==0)

        <p class="alert alert-damger">nao foi encontrado dados no banco</p>
        <form action="{{ route('cliente.create') }}">
            @csrf
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
        @else
        <form action="{{ route('pedido.searchPed')}}" method="post" class="form form-inline">
            @csrf
            <input type="text" name="filtro" placeholder="filtrar" class="form-control" >
            <button type="submit" class="btn btn-primary">Pesquisar cli</button> 
        </form>  

                @foreach($dados as $cliente)

                        <div class="row">
                            <div class="col-2">

                            {{  $cliente->codigo }}

                            </div>

                            <div class="col-4">
                                {{ $cliente->razaosocial }}
                            </div>

                            <div class="col-2">
                            {{ $cliente->cnpj }}

                            </div>
                           <form action="{{ route('escolherCliente', $cliente->codigo) }}" method="post">
                                @csrf
                               
                                <button type="submit" class="btn btn-warning btn-sm">Escolher</button>
                            </form> 
                            <form action="{{ route('cliente.edit', $cliente->codigo ) }}" method="get">
                                @csrf
                                <button type="submit" class="btn btn-warning btn-sm">Editar</button>
                            </form>
                                                       


                            {{-- <div class="col-4">   --}}
                            {{-- <a href="edit_func/{{ $funcionario->id_funcionarios}}">editar</a>
                            <a href="#">Excluir</a> --}}
                           
                    
                        </div>
                        <style>
                            .btn {
                                height: 23px;
                                margin-right: 5px;
                                font-size: 10px;
                                text-align: center;
                            }
                        
                        </style>
                @endforeach

        @endif

@endsection

 {{--     <form action="{{ route('cliente.edit', $cliente->codigo ) }}" method="get">
                @csrf
                <button type="submit" class="btn btn-warning btn-sm">Editar</button>
            </form>
            <form action="{{ route('cliente.destroy', $cliente->codigo) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
            </form> 
            <form action="{{ route('cliente.create') }}">
                @csrf
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </form> --}}





            {{-- class="glyphicon glyphicon-pencil"  
                    {{--  </div>  --}}
