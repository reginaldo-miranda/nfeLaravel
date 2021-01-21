@extends('layouts.app')

{{-- use App\usuario;  --}}

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
            @include('fr_usuarios.fr_unicoUsuarioCadasEditar')
     </form>
                   
</div>  
           
            
@endsection
