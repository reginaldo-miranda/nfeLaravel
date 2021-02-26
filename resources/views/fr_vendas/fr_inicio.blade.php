@extends('layouts.app') 


@section('conteudo')
    <meta name="csrf-token" content="{{ csrf_token() }}" />
     <h3 class="text-center">Lista de Pedidos</h3><hr>

     <div class="text-center mt-3 mb-3">
        <a href="{{ route('pedido.create') }}">
         <button id="btns" class="btn btn-success">Cadastrar</button>
     </div>

     <div class="col-12 m-auto">
          <table class="table text_center">
              <thead class="thead-dark">
                <tr>
                    <th scope="col">N: Pedido</th>
                    <th scope="col">Cliente</th>
                    <th scope="col">acoes</th>
                </tr>
              </thead>
              <tbody>
                @foreach($pedido as $pedidos)
                  
                    <tr>
                          <th scope="row">{{ $pedidos->id_pedido }}</th>
                          <td>{{ $pedidos->nomeCliente }}</td>
                          <td>
                                <div class="row">
                                    @csrf
                                    <div>
                                        <a href="{{ route('listarProdPedido', $pedidos->id_pedido) }}">
                                          <button type="submit" id="btns" class="btn btn-primary btn-sm">ver itens</button>
                                        </a>
                                    </div>
                                    <div>
                                        <a href="{{ route('pedido.edit', $pedidos->id_pedido) }}">
                                          <button id="btns" class="btn btn-primary btn-sm">editar 1</button>
                                        </a>
                                      </div> 
                                      <form action="{{ route('pedido.destroy', $pedidos->id_pedido) }}" method="post">
                                          @csrf
                                          @method('DELETE')
                                          <button type="submit" id="btns" class="btn btn-danger btn-sm">Excluir</button>
                                      </form>
                                </div>                                 
                          </td>
                    </tr>
                @endforeach
                
               </tbody>
            </table>
              
               {!!$pedido->links()!!}  

       </div>
       <style>

        #btns{

           height: 18px;
           justify-content: center;
           padding: 0;
           padding-right: 10px;
           margin-right: 10px;
           margin-left: 10px;
           font-size: 12px;
        }
      }
   
    </style>
  
  @endsection
   
