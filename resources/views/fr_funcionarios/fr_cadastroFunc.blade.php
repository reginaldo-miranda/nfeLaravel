@extends('layouts.app')

@section('conteudo')

    <div class="col-md-4"> 
                {{-- apresentacao de erros de validacao --}}
        @section('titulopagina')
        <div class="img" class="col-md-4 col-md-4 offset-5 col-sm-8 offset-2 col-xs-12">

            <h4>Cadastrar Funcionarios</h4>
        </div>
        @endsection  

                
                    <form method="post" action="/funcionario">
                    @include('fr_funcionarios.fr_unicoCAdasEditarFunc')
                                                
                    </form>
                    
    </div>  
           
            
@endsection
