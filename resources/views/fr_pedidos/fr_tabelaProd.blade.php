{{--  @if (count($dadoprod)==0)

<p class="alert alert-damger">nao foi encontrado dados no banco</p>
<form action="{{ route('produto.create') }}">
    @csrf
    <button type="submit" class="btn btn-primary">Cadastrar</button>
@else --}}

@foreach($dadoprod as $produto)

  @isset($produto)
      
 
    <div class="row">
    
        <div class="col-4">
         
            {{ $produto->codigo }} 
         
           
                            
        </div>
        
        <div class="col-4">
         
            {{ $produto->nome_reduzido }} 
         
           


        </div>
        @endisset       

@endforeach 


{{-- @endif --}}