<!DOCTYPE html>
{{-- <html lang="pt-br">
<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="{{ asset('css/app.css')}}" rel="stylesheet">
    {{-- <link href="{{ asset('css/main.css')}}"rel="stylesheet"> 
    <link href="{{ asset('js/app.js') }}"rel="stylesheet">
    <title>sistema de usuarios</title> --}} 
     
    <style>
        .form-control{
            width: 250px;
            height: 17px;;
        }
        .espaco{
            margin-left:20px; 
        }
        #text_descricao, #text_seg_name, #text_nome_reduzido{
            width:90%;
        }


        .juntar{
            margin-bottom: 0;
        }
        #text_preco_compra, #text_preco, #text_garatia{

            width: 80px;
        }
        #text_unidade{
            width:30px;
        }
        #text_ean{
            width:120px;
        }
        #text_origem{
            width:15px;
        }
        #text_peso, #text_estoque{
            width:40px;
        }
        #btnsubmit{
        padding-top: 10px;
        text-align: center;
        }

        #text_ncm, #text_cest, #text_icms_cst, #text_icms_perc, #text_icms_pred, #text_icms_perc, #text_ipi_perc{
            width:50px;
        }
        #text_ipi_perc, #text_pis_perc, #text_pis_cst, #text_cofins_cst, #text_cofins_perc, #text_trib_st_perc{
            width:40px;
        }
        #text_descnovo, #Text_cnpj_fornecedor, #text_codigo_fornec, #text_fornecedor, #text_marca, #text_source_fat{
            width: 90px;
        }



    </style>

{{-- </head>   --}}
@include('inc.erros')

{{ csrf_field() }}

<div class="row"> {{--<!-- Linha formulário todo --> --}}
    <div class="col-12 col-md-6" style="background-color: aqua">
        <div>
            <label class="juntar">nome</label>
            <input type="text" class="form-control" id="text_nome_reduzido" name="text_nome_reduzido"
            placeholder=" nome reduzido" value="{{ $codigo->nome_reduzido ?? old('nome_reduzido') }}">         
        </div>
        <div>
            <label class="juntar">Complemento do nome</label>
            <input type="text" class="form-control" id="text_seg_name" name="text_seg_name"
            placeholder=" complemento " value="{{ $codigo->seg_name ?? old('seg_name') }}">         
        </div>
         <div>
             <label class="juntar">Descricao</label>
             <input type="text" class="form-control" id="text_descricao" name="text_descricao"

             placeholder="descricao" value="{{ $codigo->descricao ?? old('descricao') }}">
         </div>

            <div>
                <label class="juntar">Codigo Barra</label>
                <input type="text" class="form-control" id="text_ean" name="text_ean" placeholder="codigo de barras" value="{{ $codigo->ean ?? old('ean') }}">
            </div>
            <div>
                <label class="juntar">Origem</label>
                <input type="text" class="form-control" id="text_origem" name="text_origem"
                placeholder="codigo de barras" value="{{ $codigo->origem ?? old('origem') }}">         
            </div>
         
    </div> {{-- fim class col --}}{{-- cnpj_fornecedor  --}}


    <div class="col-12 col-md-6" style="background-color: rgb(75, 0, 255)">

     <div>
         <label class="juntar">descnovo</label>
         <input type="text" class="form-control" id="text_descnovo" name="text_descnovo" placeholder="desconto novo" value="{{ $codigo->descnovo ?? old('descnovo') }}">
     </div>
     
      <div>
          <label class="juntar">cnpj_fornecedor</label>
          <input type="text" class="form-control" id="Text_cnpj_fornecedor" name="Text_cnpj_fornecedor" placeholder="cnpj_fornecedor" value="{{ $codigo->cnpj_fornecedor ?? old('cnpj_fornecedor') }}">
      </div>
      <div>
          <label class="juntar">codigo_fornec</label>
          <input type="text" class="form-control" id="text_codigo_fornec" name="text_codigo_fornec" placeholder="codigo_fornec" value="{{ $codigo->codigo_fornec ?? old('codigo_fornec') }}">
      </div>
      <div>
          <label class="juntar">fornecedor</label>
          <input type="text" class="form-control" id="text_fornecedor" name="text_fornecedor" placeholder="fornecedor" value="{{ $codigo->fornecedor ?? old('fornecedor') }}">
      </div>
      <div>
          <label class="juntar">marca</label>
          <input type="text" class="form-control" id="text_marca" name="text_marca" placeholder="marca " value="{{ $codigo->marca ?? old('marca') }}">
      </div>
      <div>
          <label class="juntar">source_fat</label>
          <input type="text" class="form-control" id="text_source_fat" name="text_source_fat" placeholder="source_fat " value="{{ $codigo->source_fat ?? old('source_fat') }}">
          {{-- `link` VARCHAR(255) NULL DEFAULT NULL,
 `images` VARCHAR(255) NULL DEFAULT NULL, --}}

      </div>

   </div>

</div> {{-- fim da row principla --}}

    <div class="row"> {{--  2 linha esquerda inferior --}}

        <div class="col-12 col-md-6" style="background-color: rgb(75, 0, 255)">

            <div class="row">
                <div>
                    <label class="juntar">Preco de custo</label>
                    <input type="text" class="form-control" id="text_preco_compra" name="text_preco_compra"
                    placeholder=" preco de compra" value="{{ $codigo->preco_compra ?? old('preco_compra') }}">

                </div>
                <div class="espaco">

                    <label class="juntar">Preco de venda</label>
                    <input type="text" class="form-control" id="text_preco" name="text_preco"
                    placeholder=" preco " value="{{ $codigo->preco ?? old('preco') }}">         
                </div>
                 <div class="espaco">

                     <label class="juntar">peso</label>
                     <input type="text" class="form-control" id="text_peso" name="text_peso" placeholder="peso" value="{{ $codigo->peso ?? old('peso') }}">
                 </div>
                 <div class="espaco">
                     <label class="juntar">unidade</label>
                     <input type="text" class="form-control" id="text_unidade" name="text_unidade" placeholder="unidade" value="{{ $codigo->unidade ?? old('unidade') }}">
                 </div>
                <div class="espaco">

                    <label class="juntar">Estoque</label>
                    <input type="text" class="form-control" id="text_estoque" name="text_estoque"
                    placeholder="estoque" value="{{ $codigo->estoque ?? old('estoque') }}">
                </div>
                <div class="espaco">

                    <label class="juntar">Garatia</label>
                    <input type="text" class="form-control" id="text_garatia" name="text_garantia"
                    placeholder="Garantia" value="{{ $codigo->garantia ?? old('garantia') }}">         
                </div>  
            </div>

        </div> {{-- parte fiscal --}}
           <div class="col-12 col-md-6" style="background-color: rgb(25, 155, 155)">
                <div class="row">
                    <div class="espaco">

                        <label class="juntar">Ncm</label>
                        <input type="text" class="form-control" id="text_ncm" name="text_ncm" placeholder=" Ncm " value="{{ $codigo->ncm  ?? old('ncm') }}">
                    </div>
                    <div class="espaco">

                        <label class="juntar">Cest</label>
                        <input type="text" class="form-control" id="text_cest" name="text_cest" placeholder="cest" value="{{ $codigo->cest ?? old('cest') }}">
                    </div>
                    <div class="espaco">
                        <label class="juntar">icms cst</label>
                        <input type="text" class="form-control" id="text_icms_cst" name="text_icms_cst" placeholder="icms_cst" value="{{ $codigo->icms_cst ?? old('icms_cst') }}">
                    </div>
                

                    <div class="espaco">

                        <label class="juntar">icms perc</label>
                        <input type="text" class="form-control" id="text_icms_perc" name="text_icms_perc" placeholder="icms perc" value="{{ $codigo->icms_perc ?? old('icms_perc') }}">
                    </div>
                    <div class="espaco">

                        <label class="juntar">icms_pred</label>
                        <input type="text" class="form-control" id="text_icms_pred" name="text_icms_pred" placeholder="icms_pred" value="{{ $codigo->icms_pred ?? old('icms_pred') }}">
                    </div>
                

                    <div class="espaco">

                        <label class="juntar">ipi_cst</label>
                        <input type="text" class="form-control" id="text_icms_perc" name="text_ipi_cst" placeholder="ipi_cst" value="{{ $codigo->ipi_cst ?? old('ipi_cst') }}">
                    </div>
                    <div class="espaco">

                        <label class="juntar">ipi_perc</label>
                        <input type="text" class="form-control" id="text_ipi_perc" name="text_ipi_perc" placeholder="ipi_perc" value="{{ $codigo->ipi_perc ?? old('ipi_perc') }}">

                    </div>
                </div>
                <div class="row">
                    <div class="espaco">

                        <label class="juntar">pis_perc</label>
                        <input type="text" class="form-control" id="text_pis_perc" name="text_pis_perc" placeholder="pis_perc" value="{{ $codigo->ipi_perc ?? old('pis_perc') }}">

                    </div>
                    <div class="espaco">

                        <label class="juntar">pis_cst</label>
                        <input type="text" class="form-control" id="text_pis_cst" name="text_pis_cst" placeholder="pis_cst" value="{{ $codigo->pis_cst ?? old('pis_cst') }}">

                    </div>
                    <div class="espaco"> 

                        <label class="juntar">cofins_cst</label>
                        <input type="text" class="form-control" id="text_cofins_cst" name="text_cofins_cst" placeholder="cofins_cst" value="{{ $codigo->cofins_cst ?? old('cofins_cst') }}">

                    </div>
                    <div class="espaco"> 

                        <label class="juntar">cofins_perc</label>
                        <input type="text" class="form-control" id="text_cofins_perc" name="text_cofins_perc" placeholder="cofins_perc" value="{{ $codigo->cofins_perc ?? old('cofins_perc') }}">

                    </div>
                    <div class="espaco">

                        <label class="juntar">trib_st_perc</label>
                        <input type="text" class="form-control" id="text_trib_st_perc" name="text_trib_st_perc" placeholder="trib_st_perc" value="{{ $codigo->trib_st_perc ?? old('trib_st_perc') }}">

                    </div>
                </div>
           </div>
           </div>
            <div class="col-12" id="btnsubmit">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>



    </div> {{--  fim da 2 linha esquerda inferior --}}

    
{{-- 

    `nome_reduzido` VARCHAR(60) NULL DEFAULT NULL,
    `seg_name` VARCHAR(255) NULL DEFAULT NULL, 
    `descricao` CHAR(255) NULL DEFAULT NULL,

    `unidade` CHAR(2) NULL DEFAULT NULL,
    `ean` CHAR(14) NULL DEFAULT NULL,
    `origem` CHAR(1) NULL DEFAULT NULL,

    
	`preco_compra` DOUBLE NULL DEFAULT NULL,
	`preco` DOUBLE NULL DEFAULT NULL,
    `peso` DECIMAL(10,3) NULL DEFAULT NULL,
	`estoque` INT(11) NULL DEFAULT NULL,
    `garantia` DOUBLE NULL DEFAULT NULL,
    //-------------------------------------

    `ncm` CHAR(8) NULL DEFAULT NULL,
    `cest` CHAR(7) NULL DEFAULT NULL,
	`icms_cst` VARCHAR(3) NULL DEFAULT NULL,
	`icms_perc` DOUBLE NULL DEFAULT NULL,
	`icms_pred` DOUBLE NULL DEFAULT NULL,
	`ipi_cst` VARCHAR(2) NULL DEFAULT NULL,
	`ipi_perc` DOUBLE NULL DEFAULT NULL,

	`pis_cst` VARCHAR(2) NULL DEFAULT NULL,
	`pis_perc` DOUBLE NULL DEFAULT NULL,
	`cofins_cst` VARCHAR(2) NULL DEFAULT NULL,
	`cofins_perc` DOUBLE NULL DEFAULT NULL,
    `trib_st_perc` DOUBLE NULL DEFAULT NULL,
    
	`descnovo` CHAR(255) NULL DEFAULT NULL,
    
    
    `cnpj_fornecedor` CHAR(14) NULL DEFAULT NULL
    `codigo_fornec` CHAR(12) NULL DEFAULT NULL,
    
	`fornecedor` CHAR(15) NULL DEFAULT NULL,
	`marca` VARCHAR(25) NULL DEFAULT NULL,
	`link` VARCHAR(255) NULL DEFAULT NULL,
	`images` VARCHAR(255) NULL DEFAULT NULL,
    `source_fat` CHAR(2) NULL DEFAULT NULL,
     --}}