@extends('layouts.app')

@section('conteudo')

    @section('titulopagina')
    
      <div class="img" class="col-md-4 col-md-4 offset-5 col-sm-8 offset-2 col-xs-12">
          <h3>Cadastro de Pedido</h3>
      </div>
      
    
    @endsection 
   <style>
   
   
   </style>
 
 {{--  @if (count($dados)==0)  

    <p class="alert alert-damger">nao foi encontrado dados no banco</p>
    <form action="{{ route('cliente.create') }}">
        @csrf
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
   @else  --}}
    <div class="juntar" class="form-group">

                <label for="text_numeroPedido">numero: </label>
                <input type="text" name="numeroPedido">
                
             {{--    <form action="{{ route('pcliente') }}" class="form form-inline"> --}}
             <div class="row">
                  <form method="post"  action="/pedido" class="form form-inline">    
                      @csrf
                      <label for="text_razaosocial" class="lab">Nome do Cliente</label> 
                        <input type="text" class="form-control" id="text_razaosocial" name="nomeCliente"
                          placeholder=" Nome do cliente:" value="{{ $dados->razaosocial ?? old('razaosocial') }}">

                           <button type="submit" class="btn btn-primary btn-sm">Enviar</button>  

                  </form> 
                  <div>
                      <a href="{{ route('pcliente') }}">
                          <button class="btn btn-primary btn-sm">pesquisar href com btn </button>
                      </a>

                  </div>

              </div>


                    {{-- inicio do teste com botao--}}
                  
                  {{--  fim do teste com botao --}}  
                    
                    
                       
             
                
    </div>
 {{--  @endif  --}} 

   

   
            
@endsection