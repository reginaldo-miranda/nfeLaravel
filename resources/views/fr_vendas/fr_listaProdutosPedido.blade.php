@extends('layouts.app') 


@section('conteudo')
<h2>lista de produtos do pedido n:  {{  $dadosped->id_pedido }} </h2>

<div class="row">
    <a href="{{ route('testevenda') }}">
       <button id="btns" class="btn btn-warning btn-sm">Pedidos</button>
    </a>
  
    <form action="{{ route('listaIncluirProd', $dadosped->id_pedido) }}">
        @csrf
        <button type="submit"id="btns" class="btn btn-primary btn-sm">Incluir Itens</button>
    </form>
    <form action="{{ route('produto.create') }}">
        @csrf
        <button type="submit" id="btns" class="btn btn-primary btn-sm">Cadastrar</button>
    </form> 

</div>


@if (count($dadosProd)==0)

<p class="alert alert-damger">nao foi encontrado dados no banco</p>
<form action="{{ route('produto.create') }}">
    @csrf
    <button type="submit" class="btn btn-primary btn-sm">Incluir Itens</button>
</form>
@else

        <div>
            <label class="lab">Codigo</label>
            <label class="labpu">descricao</label>
            <label class="lab">P Unit</label>
            <label class="lab">Qtde</label>
            <label class="lab">Total</label>
        </div>

        @foreach($dadosProd as $key)
        <div class="row ml-1">

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
                <button type="submit" id="btns" class="btn btn-danger ">Excluir</button>
            </form>
            
            
              
                      
        </div>
        @endforeach 
        @foreach($soma as $ss);
          <div id="somatotal">
             <label><h2>total :{{ $ss->totalv }}</h2></label>  
          </div>  
         @endforeach;
       
        
        <style>

            #text_peq{
                width: 60px;
            }
            .lab{
                padding-right: 30px;
            }
            .labpu{
                padding-right: 100px;
            }
            #btns{

               height: 18px;
               justify-content: center;
               padding: 0;
               padding-right: 10px;
               margin-right: 10px;
               margin-left: 10px;
               font-size: 12px;
            }
        #somatotal{
            margin-left: 120px;
        }


        </style>
        
      
    
    </div>
    

@endif
    


@endsection