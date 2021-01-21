@extends('layouts.app')

@section('conteudo')

    <div class="col-md-4">  

        @section('titulopagina')
        <div class="img" class="col-md-4 col-md-4 offset-5 col-sm-8 offset-2 col-xs-12">

            <h4>Cadastrar Uusarios</h4>
        </div>
        @endsection  
            
        {{-- apresentacao de erros de validacao --}}

        {{--    @include('inc.erros') --}}
        
        <form method="post" action="/usuario">
            @include('fr_usuarios.fr_unicoUsuarioCadasEditar')
        </form>

    </div>

@endsection












































