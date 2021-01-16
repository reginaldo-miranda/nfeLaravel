@extends('layouts.app')

use App\usuario;

@section('conteudo')

<div class="col-md-4"> 
            {{-- apresentacao de erros de validacao --}}
    @section('titulopagina')
    <div class="img" class="col-md-4 col-md-4 offset-5 col-sm-8 offset-2 col-xs-12">

        <h4>Editar Usuarios</h4>
     </div>
    @endsection  

            @include('inc.erros')
            
                <form method="post" action="{{ route('usuario.update', $usuarios->id_usuarios ) }}" >
                    @method('put')

                        {{ csrf_field() }}
                        
                        <div class="form-group">
                            <label for="text_nome">Nome</label> 
                            <input type="text" class="form-control" id="text_nome" name="text_nome" value="{{ $usuarios->usuario }}">   
                        </div>

                        <div class="form-group">
                            <label for="text_email">Email</label> 
                            <input type="text" class="form-control" id="text_email" name="text_email" value = " {{ $usuarios->email }}">   
                        </div>

                        
                        <div class="form-group">
                            <label for="text_senha">Senha</label> 
                            <input type="text" class="form-control" id="text_senha" name="text_senha" value = "{{ $usuarios->senha}}">   
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                                
                </form>
                   
            </div>  
           
            
@endsection
