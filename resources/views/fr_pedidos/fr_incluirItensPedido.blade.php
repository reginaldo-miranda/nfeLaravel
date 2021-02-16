@extends('layouts.app')

@section('conteudo')


<div class="img" class="col-md-4 col-md-4 offset-5 col-sm-8 offset-2 col-xs-12">
    <h3>incluir Itens</h3>
  
</div>

<form class='form-control' method="post" action="/PedidoItens">
 {{ csrf_field() }}

 <div>
     <label class="juntar">Pedido</label>

     {{ $dadoidpedido }}
 </div>


    <div class="row">
       
          <div>
             <label class="juntar">N: Pedido</label>
             <input type="text" class="form-control" id="text_pedido_id" name="pedido_id"
              placeholder="id pedido" value="{{ $dadoidpedido ?? old('pedido_id') }}">

         </div>

          <div>
              <label class="juntar">cod produto</label>
              <input type="text" class="form-control" id="text_codigoProduto" name="codigoProduto"
               placeholder="codigo produto" value="{{ $dadosProd->codigo ?? old('codigoProdutto') }}">


          </div>


        <div>
            <label class="juntar">nome</label>
            <input type="text" class="form-control" id="text_nome_reduzido" name="nome_reduzido"
            placeholder=" nome reduzido" value="{{ $dadosProd->nome_reduzido ?? old('nome_reduzido') }}">


        </div>
        <div>
            <label class="juntar">Quantidade</label>
            <input type="text" class="form-control" id="text_qde" name="qde"
            placeholder="qde" value="{{ $dados->qde ?? old('qde') }}">

        </div>
         <div>
             <label class="juntar">Desconto</label>
             <input type="text" class="form-control" id="text_desconto" name="desconto" 
             placeholder=" desconto" value="{{ $dados->desconto ?? old('desconto') }}">

         </div>

        <div>
            <label class="juntar">Preco Unit</label>
            <input type="text" class="form-control" id="text_preco" name="preco"
            placeholder="preco unitario " value="{{ $dados->preco ?? old('preco') }}">

        </div>
    
        <div>
            <label class="juntar">total</label>
            <input type="text" class="form-control" id="text_precoTotal" name="precoTotal"
            placeholder="preco total" value="{{ $dados->precoTotal ?? old('precoTotal')  }}"> 

        </div>
         <div class="col-12" id="btnsubmit">
             <button type="submit" class="btn btn-primary">Enviar gravar</button>
         </div>

        
    </div>
    <div>



    </div>
   

</form>



{{--         id_pedidoitens
        pedido_id       
        codigoCliente   
        codigoProduto   
        qde             
        precoUnit       
        precoTotal --}}

</div>



@endsection
