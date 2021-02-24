@extends('layouts.app')

@section('conteudo')

    @section('titulopagina')
    
      <div class="img" class="col-md-4 col-md-4 offset-5 col-sm-8 offset-2 col-xs-12">
          <h3>Cadastro de Pedido</h3>
      </div>
      
    
    @endsection 
 

    <div class="form-group">
             <label for="text_razaosocial" class="lab">Nome do Cliente</label>
            <form method="post" action="/pedido" class="form form-inline">  
              <div class="row">  
                  @csrf
                  <input type="text" class="form-control" id="text_razaosocial" name="nomeCliente"
                    placeholder=" Nome do cliente:" value="{{ $dados->razaosocial ?? old('razaosocial') }}">
                    <a href="{{ route('pcliente') }}">
                      <button class="btn btn-primary btn-sm">pesquisa</button>
                     </a>
               </div> 
                  
            </form> 
            
            <button type="submit" class="btn btn-primary btn-sm">Enviar</button>  

                          
    </div>
          
@endsection