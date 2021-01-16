@extends('layouts.app')

use App\funcionario;

@section('conteudo')

<div class="col-md-4"> 
            {{-- apresentacao de erros de validacao --}}
    @section('titulopagina')
    <div class="img" class="col-md-4 col-md-4 offset-5 col-sm-8 offset-2 col-xs-12">

        <h4>Editar Funcionarios</h4>
     </div>
    @endsection  

            @include('inc.erros')
            
                <form method="post" action="{{ route('funcionario.update', $funcionario->id_funcionarios ) }}" >
                    @method('put')

                        {{ csrf_field() }}
                        
                        <div class="form-group">
                            <label for="text_nome">Nome</label> 
                            <input type="text" class="form-control" id="text_nome" name="text_nome" value="{{ $funcionario->nome }}">   
                        </div>

                        <div class="form-group">
                            <label for="text_endereco">Endereco</label> 
                            <input type="text" class="form-control" id="text_endereco" name="text_endereco" value="{{ $funcionario->endereco }}">   
                        </div>

                        <div class="form-group">
                            <label for="text_email">Email</label> 
                            <input type="text" class="form-control" id="text_email" name="text_email" value = " {{ $funcionario->email }}">   
                        </div>

                        <div class="form-group">
                            <label for="text_salario">Salario</label> 
                            <input type="text" class="form-control" id="text_salario" name="text_salario" value = "{{ $funcionario->salario }} ">   
                        </div>

                        <div class="form-group">
                            <label for="text_funcao">Funcao</label> 
                            <input type="text" class="form-control" id="text_funcao" name="text_funcao" value = "{{ $funcionario->funcao}}">   
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                                
                </form>
                   
            </div>  
           
            
@endsection
