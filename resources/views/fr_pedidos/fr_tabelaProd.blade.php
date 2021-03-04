@extends('layouts.app')

@section('conteudo')

   <div class="row justify-content-center"> 
      <h2> lista de produtos do <a id="voltar" href="{{ route('testevenda') }}">pedido
      {{  $dadosped->id_pedido }}</h2></a>
 
    </div> 

    @if (count($dadosProd)==0)

    <div class="alert alert-danger" role="alert">
      nao encontrado dados no banco
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    @include('fr_pedidos.fr_botoes')    
    @else
   {{--  @endif  --}}

   
        <div class="row">
        
              <div style="overflow: auto; width: 1000px; height: 150px"  "border:solid 0,5px">
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
    
            </div><hr> 
            @include('fr_pedidos.fr_botoes')
            {{-- 
                <div class="row" id="btninca">
                      <form action="{{ route('listaIncluirProd', $dadosped->id_pedido) }}">
                        @csrf
                      <button type="submit" class="btn btn-primary btn-sm">Incluir Itens</button>
                    </form>
              
                    <form action="{{ route('produto.create') }}">
                        @csrf
                        <button type="submit" id="btncadastrar" class="btn btn-primary btn-sm">Cadastrar</button>
                    </form> 

                        @foreach($soma as $ss);
                          <div id="somatotal" class="justify-content-end"> 
                              <label><h2>total :{{ $ss->totalv }}</h2></label>  
                          </div>  
                        @endforeach;
                </div>  --}}
            </div>
     </div>
   @endif 

  @endsection  

  <style>
    .table-fixed{
      width: 100%;
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
   #btncadastrar{
     margin-left: 10px;
   }

    #btninca{
      margin-left: 30px;

    }
    #linha{
     padding-right: 220px;

    }

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
      width: 70%;
      display: flex;

    
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