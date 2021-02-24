@extends('layouts.app')

@section('conteudo')

<div class="img" class="col-md-4 col-md-4 offset-5 col-sm-8 offset-2 col-xs-12">
    <h3>incluir Itens</h3>
  
</div>


<form name="inclusao" class='form-control' method="post" action="/PedidoItens">
 {{ csrf_field() }}

 <script type="text/javascript">
    /*
    function calcular(){
        // document.inclusao.precoTotal.value =
        var calc = (Number(document.inclusao.precoUnit.value)* Number(document.inclusao.qde.value));
        var desc = (calc * Number(document.inclusao.desconto.value));
        var desc1 = (desc/100);
        var tot   = (calc - desc1);  
          document.inclusao.precoTotal.value = tot;

    }
*/

 </script>
 
 <div>
     <label class="juntar">Pedido</label>

     {{ $dadoidpedido }}



    <div class="row">
        
          <div>
             <label class="juntar">N: Pedido</label><br> 
           
             <input type="text" class="inputquatro" class="form-control" id=" text_pedido_id" name="pedido_id"
              placeholder="id pedido" value="{{ $dadoidpedido ?? old('pedido_id') }}">

         </div>

          <div>
              <label class="juntar">cod produto</label><br>
              <input type="text" class="form-control, inputquatro" id="text_codigoProduto" name="codigoProduto"
               placeholder="codigo produto" value="{{ $dadosProd->codigo ?? old('codigoProdutto') }}">


          </div>


        <div>
            <label class="juntar">nome</label><br>
            <input type="text" class="form-control, inputvinte" id="text_nome_reduzido" name="nome_reduzido"
            placeholder=" nome reduzido" value="{{ $dadosProd->nome_reduzido ?? old('nome_reduzido') }}">


        </div>
        <div>
            <label class="juntar">Quantidade</label><br>
            <input type="text" class="form-control, inputquatro" id="text_qde" name="qde"
            placeholder="qde" value="{{ $dadoProd->qde ?? old('qde') }}"> {{-- onblur="calcular()"> --}}


        </div>
         <div>
             <label class="juntar">Desconto</label><br>
             <input type="text" class="form-control, inputquatro" id="text_desconto" name="desconto" 
             placeholder=" desconto" value="{{ $dadosProd->desconto ?? old('desconto') }}" {{-- onblur="calcular()  --}}>


         </div>

        <div>
            <label class="juntar">Preco Unit</label><br>
            <input type="text" class="form-control, inputseis" id="text_preco" name="precoUnit"
            placeholder="preco unitario " value="{{ $dadosProd->preco ?? old('precoUnit') }}">

        </div>
        <?php
        
      //  $vtotal=App\pedido::calcular($dadosProd->preco, $dadosProd->qde, $dadosProd->desconto);
        $vtotal=App\pedido::calcular(10, 2, 30);
        ?> 
        <div>
            <label class="juntar">total</label><br>
            <input type="text" class="form-control, inputseis" id="text_precoTotal" name="precoTotal"
            placeholder="preco total" value="<?= $vtotal ?>"> 

        </div>
         <div class="col-12" id="btnsubmit">
             <button type="submit" class="btn btn-primary , botoes">Enviar gravar</button>

         </div>
        
        
    </div>
    <div>



    </div>
   

</form>




</div>


@endsection
