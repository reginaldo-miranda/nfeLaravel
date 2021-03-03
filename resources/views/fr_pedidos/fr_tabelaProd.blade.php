@extends('layouts.app')
{{--  @if (count($dadoprod)==0)

<p class="alert alert-damger">nao foi encontrado dados no banco</p>
<form action="{{ route('produto.create') }}">
    @csrf
    <button type="submit" class="btn btn-primary">Cadastrar</button>
@else -

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

@endforeach --}}


{{--   @endif --}}

@section('conteudo')

<div class="row justify-content-center">
  <h2>lista de produtos do <a id="voltar" href="{{ route('testevenda') }}">pedido
    {{  $dadosped->id_pedido }}</h2></a>
   
{{-- 
    <div class="row justify-content-center">
         <h2 >lista de produtos do pedido n:  {{  $dadosped->id_pedido }}</h2>
          <a id="voltar" href="{{ route('testevenda') }}">pedido</a>
        {{--   <button type="submit" class="btn btn-warning btn-sm">voltar no pedido</button>  --}}
       
       
    </div>  
   
    <div class="row">
     
           <div style="overflow: auto; width: 1000px; height: 100px"  "border:solid 0,5px">
                <table class="tabela"  style="width:900px"> 
                    
                    <tread>
                        <tr>
                            <th class="labcodi">codigo</th>
                            <th class="labdescr">Descricao</th>
                            <th class="labpuni">P Unid</th>
                            <th class="labqde">Qtde</th>
                            <th class="labdesc">% Desc</th>
                            <th class="labptotal">Total</th>
                        </tr>
                    </tread>  
                       
                    @foreach($dadosProd as $key)
                    
                            <tbody>
                           
                                <td> {{ $key->codigoProduto }}</th>
                                <td class="td_nome"> {{ $key->NOME_REDUZIDO }}</td>
                                <td> {{ $key->precoUnit }}</td>
                                <td> {{ $key->qde }}</td>
                                <td class="tr_desc"> {{ $key->desconto }}</td>
                                <td class="final"> {{ $key->precoTotal }}</td>
                                <td>
                                    <form class="form-group" action="#" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <div id="btnex">
                                          <button type="submit" id="btns" class="btn btn-danger">Excluir</button>
                                        </div>
                                        
                                    </form>
                                </td> 
                            
                            </tbody>
                    
                    @endforeach
                
                </table>
            </div>
           
       
        </div> <hr> 
        @foreach($soma as $ss);
        <div id="somatotal">
           <label><h2>total :{{ $ss->totalv }}</h2></label>  
        </div>  
       @endforeach;
    </div>
  @endsection  


 <style>
/* .tbody{
  background-color: #bdc3c7;
}*/
.table-fixed{
  width: 100%;
 /* background-color: #f3f3f3;*/
  tbody{
    height:200px;
    overflow-y:auto;
    width: 100%;
    }
 /* thead,tbody,tr,td,th{
    display:block;
  }*/
 /* tbody{
    td{
      float:left;
    }
  }*/
 /* thead {
    tr{
      th{
        float:left;
       background-color: #f39c12;*/
      /* border-color:#e67e22;
      }
    }
  }
  */
}

/*---------------------*/
#text_peq{
  width: 60px;
}
#linha{
  text-align: center;
}

.labcodi{

  padding-left: 40px;
 
}
.labdescr{
  padding-left: 50px;
}

.labdesc{
  width: 170px;
  padding: 2px;
 }

.labpuni{
 width: 100px;
 padding-left: 10px;
}
.labqde{
    width: 50px;
    
}
.labptotal{
  width: 60px;
  padding-left: 70px;
}


#btns{

 height: 16px;
 justify-content: center;
 padding: 0;
 padding-right: 10px;
 margin-right: 10px;
 margin-left: 10px;
 font-size: 12px;
}
#btnex{
  width: 70px;
  padding-left: 60px;
}

#somatotal{
margin-left: 40px;
}
/*
#voltar{
padding-left:  120px;
}*/

.final{
  text-align: right;
}
td{
  text-align: left;
  padding-left: 50px;
}
th {
  position: sticky;
  top: 0;
  background: rgb(0, 255, 34);
    
}
 </style>



{{--  video aula udemy botstrap 12 tabelas --}}



  

