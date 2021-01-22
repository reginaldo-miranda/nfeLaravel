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
        .juntar{
            margin-bottom: 0;
        }

      
    </style>

{{-- </head>   --}}
@include('inc.erros')

{{ csrf_field() }}


   
<div class="row"> {{--<!-- Linha formulário todo --> --}}
    <div class="col-12 col-md-4" style="background-color: aqua">
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
            <label class="juntar">unidade</label>
            <input type="text" class="form-control" id="text_unidade" name="text_unidade"
            placeholder="unidade" value="{{ $codigo->unidade ?? old('unidade') }}">         
        </div>

        <div>
            <label class="juntar">Codigo Barra</label>
            <input type="text" class="form-control" id="text_ean" name="text_ean"
            placeholder="codigo de barras" value="{{ $codigo->ean ?? old('ean') }}">         
        </div>
        <div>
            <label class="juntar">Origem</label>
            <input type="text" class="form-control" id="text_origem" name="text_origem"
            placeholder="codigo de barras" value="{{ $codigo->origem ?? old('origem') }}">         
        </div>  
    </div> {{-- fim class col --}}  
    <div class="row"> {{--  2 linha esquerda inferior --}}

        <div class="col-12 col-md-4" style="background-color: rgb(89, 0, 255)">
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
                <label class="juntar">unidade</label>
                <input type="text" class="form-control" id="text_unidade" name="text_unidade"
                placeholder="unidade" value="{{ $codigo->unidade ?? old('unidade') }}">         
            </div>
    
            <div>
                <label class="juntar">Codigo Barra</label>
                <input type="text" class="form-control" id="text_ean" name="text_ean"
                placeholder="codigo de barras" value="{{ $codigo->ean ?? old('ean') }}">         
            </div>
            <div>
                <label class="juntar">Origem</label>
                <input type="text" class="form-control" id="text_origem" name="text_origem"
                placeholder="codigo de barras" value="{{ $codigo->origem ?? old('origem') }}">         
            </div>  
        </div>

    </div> {{--  fim da 2 linha esquerda inferior --}}

</div>   {{-- fim da row principla --}}       
{{-- 

    `nome_reduzido` VARCHAR(60) NULL DEFAULT NULL,
    `seg_name` VARCHAR(255) NULL DEFAULT NULL,    
    `unidade` CHAR(2) NULL DEFAULT NULL,
    `ean` CHAR(14) NULL DEFAULT NULL,
    `origem` CHAR(1) NULL DEFAULT NULL,

    
	`preco_compra` DOUBLE NULL DEFAULT NULL,
	`preco` DOUBLE NULL DEFAULT NULL,
    `peso` DECIMAL(10,3) NULL DEFAULT NULL,
	`estoque` INT(11) NULL DEFAULT NULL,
    `garantia` DOUBLE NULL DEFAULT NULL,
    

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
    `descricao` CHAR(255) NULL DEFAULT NULL,
    
    `cnpj_fornecedor` CHAR(14) NULL DEFAULT NULL
    `codigo_fornec` CHAR(12) NULL DEFAULT NULL,
    
	`fornecedor` CHAR(15) NULL DEFAULT NULL,
	`marca` VARCHAR(25) NULL DEFAULT NULL,
	`link` VARCHAR(255) NULL DEFAULT NULL,
	`images` VARCHAR(255) NULL DEFAULT NULL,
    `source_fat` CHAR(2) NULL DEFAULT NULL,
     --}}