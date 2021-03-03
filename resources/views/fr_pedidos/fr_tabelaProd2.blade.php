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
        <h2 >lista de produtos do pedido n:  {{  $dadosped->id_pedido }} </h2>
        <a id="voltar" href="{{ route('testevenda') }}">
            <button type="submit" class="btn btn-warning btn-sm">voltar no pedido</button>
        </a>
       
    </div>    
    <div class="row">
        
        <div class="col">  

            <div style="overflow: auto; width: 940px; height: 250px; border:solid 1px"> 
                <table class="tabela" style="width:800px"> 
                  {{--   <table class="table table-fixed"> --}}
                    <tread>
                        <tr>
                            <th>codigo</th>
                            <th>Descricao</th>
                            <th>P Unid</th>
                            <th>Qtde</th>
                            <th>Total</th>
                        </tr>
                    </tread>
                    @foreach($dadosProd as $key)
                    
                            <tbody>
                            
                                <th scope="row">{{ $key->codigoProduto }}</th>
                                <td> {{ $key->NOME_REDUZIDO }} </td>
                                <td> {{ $key->precoUnit }}</td>
                                <td> {{ $key->qde }}</td>
                                <td> {{ $key->precoTotal }}</td>
                                <td>
                                    <form action="#" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" id="btns" class="btn btn-danger ">Excluir</button>
                                    </form>
                                </td> 
                            </tbody>
                    
                    @endforeach
                
                </table>
            </div>
           
            @foreach($soma as $ss);
            <div id="somatotal">
               <label><h2>total :{{ $ss->totalv }}</h2></label>  
            </div>  
           @endforeach;
        </div>  

    </div>
  @endsection  
  <--  <style>

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
    #voltar{
        padding-left:  120px;
    }
    .table-overflow {
        max-height:400px;
        overflow-y:auto;
    }
 


    </style>-->


    <style>
        /*  .tbody{
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
          thead,tbody,tr,td,th{
            display:block;
          }
          tbody{
            td{
              float:left;
            }
          }
     
          thead {
            tr{
              th{
                float:left;
            /*   background-color: #f39c12;*/
               border-color:#e67e22;
              }
            }
          }
        }
        <style> 


{{--  video aula udemy botstrap 12 tabelas --}}

{{-- 
<div class="container">
    <table class="table table-fixed">
      <thead>
        <tr>
          <th class="col-xs-3">First Name</th>
          <th class="col-xs-3">Last Name</th>
          <th class="col-xs-6">E-mail</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="col-xs-3">John</td>
          <td class="col-xs-3">Doe</td>
          <td class="col-xs-6">johndoe@email.com</td>
        </tr>
  
        <tr>
          <td class="col-xs-3">John</td>
          <td class="col-xs-3">Doe</td>
          <td class="col-xs-6">johndoe@email.com</td>
        </tr>
        <tr>
          <td class="col-xs-3">John</td>
          <td class="col-xs-3">Doe</td>
          <td class="col-xs-6">johndoe@email.com</td>
        </tr>
        <tr>
          <td class="col-xs-3">John</td>
          <td class="col-xs-3">Doe</td>
          <td class="col-xs-6">johndoe@email.com</td>
        </tr>
        <tr>
          <td class="col-xs-3">John</td>
          <td class="col-xs-3">Doe</td>
          <td class="col-xs-6">johndoe@email.com</td>
        </tr>
        <tr>
          <td class="col-xs-3">John</td>
          <td class="col-xs-3">Doe</td>
          <td class="col-xs-6">johndoe@email.com</td>
        </tr>
        <tr>
          <td class="col-xs-3">John</td>
          <td class="col-xs-3">Doe</td>
          <td class="col-xs-6">johndoe@email.com</td>
        </tr>
        <tr>
          <td class="col-xs-3">John</td>
          <td class="col-xs-3">Doe</td>
          <td class="col-xs-6">johndoe@email.com</td>
        </tr>
        <tr>
          <td class="col-xs-3">John</td>
          <td class="col-xs-3">Doe</td>
          <td class="col-xs-6">johndoe@email.com</td>
        </tr>
        <tr>
          <td class="col-xs-3">John</td>
          <td class="col-xs-3">Doe</td>
          <td class="col-xs-6">johndoe@email.com</td>
        </tr>
        <tr>
          <td class="col-xs-3">John</td>
          <td class="col-xs-3">Doe</td>
          <td class="col-xs-6">johndoe@email.com</td>
        </tr>
        <tr>
          <td class="col-xs-3">John</td>
          <td class="col-xs-3">Doe</td>
          <td class="col-xs-6">johndoe@email.com</td>
        </tr>
        <tr>
          <td class="col-xs-3">John</td>
          <td class="col-xs-3">Doe</td>
          <td class="col-xs-6">johndoe@email.com</td>
        </tr>
        <tr>
          <td class="col-xs-3">John</td>
          <td class="col-xs-3">Doe</td>
          <td class="col-xs-6">johndoe@email.com</td>
        </tr>
        <tr>
          <td class="col-xs-3">John</td>
          <td class="col-xs-3">Doe</td>
          <td class="col-xs-6">johndoe@email.com</td>
        </tr>
        <tr>
          <td class="col-xs-3">John</td>
          <td class="col-xs-3">Doe</td>
          <td class="col-xs-6">johndoe@email.com</td>
        </tr>
        <tr>
          <td class="col-xs-3">John</td>
          <td class="col-xs-3">Doe</td>
          <td class="col-xs-6">johndoe@email.com</td>
        </tr>
        <tr>
          <td class="col-xs-3">John</td>
          <td class="col-xs-3">Doe</td>
          <td class="col-xs-6">johndoe@email.com</td>
        </tr>
        <tr>
          <td class="col-xs-3">John</td>
          <td class="col-xs-3">Doe</td>
          <td class="col-xs-6">johndoe@email.com</td>
        </tr>
        <tr>
          <td class="col-xs-3">John</td>
          <td class="col-xs-3">Doe</td>
          <td class="col-xs-6">johndoe@email.com</td>
        </tr>
      </tbody>
    </table>
  </div> --}}

  <style>
/*  .tbody{
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
  thead,tbody,tr,td,th{
    display:block;
  }
  tbody{
    td{
      float:left;
    }
  }
  thead {
    tr{
      th{
        float:left;
    /*   background-color: #f39c12;*/
       border-color:#e67e22;
      }
    }
  }
}
<style> --}}

