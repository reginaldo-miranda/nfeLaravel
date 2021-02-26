
@extends('layouts.app') 

@section('titulopagina')
    <div class="img" class="col-md-4 col-md-4 offset-5 col-sm-8 offset-2 col-xs-12">
        <h4>Lista Clientes</h4>
     </div>
@endsection    

@section('conteudo') 
       

    @if (count($dados)==0)

        <p class="alert alert-damger">nao foi encontrado dados no banco</p>
        <form action="{{ route('cliente.create') }}">
            @csrf
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>  
    @else
        <div class="row">
        

                <form action="{{ route('cliente.search')}}" method="post" class="form form-inline">
                    @csrf
                    <input type="text" name="filtro" placeholder="filtrar" class="form-control">
                    <button type="submit" class="btn btn-primary btn">Pesquisar</button>
                </form>  
                
                <form action="{{ route('cliente.create') }}">
                    @csrf
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </form>
        </div>
        <div>
            <label class="lab">Codigo</label>
            <label class="labpu">Nome</label>
            <label class="lab">Cnpj/Cpf</label>
           
        </div>
      
        @foreach($dados as $cliente)

            <div class="row">
                <div class="col-2">
                    
                    {{ $cliente->codigo }} 
                                       
                </div>
               
                <div class="col-4">
                    
                    {{ $cliente->razaosocial }} 
                                       
                </div>
                <div class="col-4">

                    {{ $cliente->cnpj }}

                </div>

                    {{--  <div class="col-4">   --}}
                    {{-- <a href="edit_func/{{ $funcionario->id_funcionarios}}">editar</a>
                    <a href="#">Excluir</a>  --}}
                    <style>

                        .btn{
                            height: 23px;
                            margin-left: 5px;
                            font-size: 10px;
                            text-align: center;
                        }

                        .lab{
                            padding-right: 165px;
                        }
                        .labpu{
                            padding-right: 330px;
                        }
                    </style>
   
                    <form action="{{ route('cliente.edit', $cliente->codigo ) }}" method="get">
                        @csrf
                        <button type="submit" class="btn btn-warning btn-sm">Editar</button>
                    </form>
                    <form action="{{ route('cliente.destroy', $cliente->codigo) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                    </form>
            
            </div>
           
        @endforeach 
     
    @endif
 
 @endsection 