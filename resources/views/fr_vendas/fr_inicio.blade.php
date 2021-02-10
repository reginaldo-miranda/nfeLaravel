

@extends('layouts.app') 


@section('conteudo')
    
     <h2 class="text-center">Lista Pedidos</h2><hr>

      <div class="col-8 m-auto">
            <table class="table">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">N: Pedido</th>
                  <th scope="col">Cliente</th>
                  <th scope="col">Cliente</th>
                  <th scope="col">Nickname</th>
                </tr>
              </thead>
              <tbody>
                @foreach($pedido as $pedidos)
                  
                  <tr>
                    <th scope="row">{{ $pedidos->id_pedido }}</th>
                    <td>{{ $pedidos->nomeCliente }}</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                  </tr>
                @endforeach
                
               </tbody>
            </table>
       </div>
  



  @endsection  