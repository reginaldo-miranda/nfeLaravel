@extends('layouts.app') 


@section('conteudo')
<h2>lista de produtos do pedido {{  $dadosped->id_pedido }} </h2>

<div class="row">
    <a href="{{ route('testevenda') }}">
       <button  class="btn btn-warning btn-sm">Pedidos</button>
    </a>
  
    <form action="{{ route('listaIncluirProd', $dadosped->id_pedido) }}">
        @csrf
        <button type="submit" class="btn btn-primary btn-sm">Incluir Itens</button>
    </form>
    <form action="{{ route('produto.create') }}">
        @csrf
        <button type="submit" class="btn btn-primary btn-sm">Cadastrar</button>
    </form> 

</div>


@if (count($dadosProd)==0)

<p class="alert alert-damger">nao foi encontrado dados no banco</p>
<form action="{{ route('produto.create') }}">
    @csrf
    <button type="submit" class="btn btn-primary btn-sm">Incluir Itens</button>
</form>
@else



        @foreach($dadosProd as $key)
        <div class="row">

            <div class="espaco">
                <input type="text" class="form-control" id="text_peq" name="codigoProduto"
                placeholder="codigo Produto" value="{{  $key->codigoProduto ?? old('codigoProduto') }}">
            </div>
                    
            <div class="espaco">
                <input type="text" class="form-control" id="text_estoque" name="nome_reduzido"
                placeholder="nome_reduzido" value="{{  $key->NOME_REDUZIDO ?? old('nome_reduzido') }}">
            </div>

            <div class="espaco">
                <input type="text" class="form-control" id="text_peq" name="precoUnit"
                placeholder="preco" value="{{  $key->precoUnit ?? old('precoUnit') }}">
            </div>

            <div class="espaco">
                <input type="text" class="form-control" id="text_peq" name="qde"
                placeholder="qde" value="{{  $key->qde ?? old('qde') }}">
            </div>


             
            <div class="espaco">
                <input type="text" class="form-control" id="text_peq" name="precoTotal"
                placeholder="nome_reduzido" value="{{  $key->precoTotal ?? old('precoTotal') }}">
            </div>
            
         
            <form action="#" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
            </form>
            
            
              
                      
        </div>
        @endforeach 
        @foreach($soma as $ss);

          <label><h2>total :{{ $ss->totalv }}</h2></label>  

         @endforeach;
       
        
        <style>

            #text_peq{
                width: 60px;
            }
        
        </style>
        
      
    
    </div>
    

@endif
    


@endsection