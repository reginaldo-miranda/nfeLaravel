@extends('layouts.app') 


@section('conteudo')
    <meta name="csrf-token" content="{{ csrf_token() }}" />

     <h2 class="text-center">Lista Pedidos</h2><hr>
     <div class="text-center mt-3 mb-3">
      <a href="{{ route('pedido.create') }}">
        <button class="btn btn-success">Cadastrar</button>
      </href=>
     </div>

      <div class="col-8 m-auto">
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
                 {{--  @php
                    $obj = $pedidos->find($pedidos->id_pedido)->relpedidoitens;
                             
                  @endphp  --}}
                  
                  <tr>
                    <th scope="row">{{ $pedidos->id_pedido }}</th>
                      <td>{{ $pedidos->nomeCliente }}</td>
                      {{-- <td>{{ $obj->codigoCliente  }}</td>   --}}
                      <td>
                      
                      <div class="row">
                           @csrf
                      
                              <div>
                                  <a href="{{ route('listarProdPedido', $pedidos->id_pedido) }}">
                                     <button type="submit" class="btn btn-primary">visualizar a</button>
                                  </a>
                              </div>
                              <div>
                                <a href="{{ route('pedido.edit', $pedidos->id_pedido) }}">
                                  <button class="btn btn-primary">editar 1</button>
                                </a>
                              </div> 
                              <form action="{{ route('pedido.destroy', $pedidos->id_pedido) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                            </form>
                       </div>                                 
                      </td>
                  </tr>
                @endforeach
                
               </tbody>
            </table>
       </div>
  



  @endsection  