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
    <div class="row">
        <div class="col">
            <table class="table">
                <tread>
                    <tr>
                        <th>codigo</th>
                        <th>Descricao</th>
                        <th>P Unid</th>
                        <th>Qtde</th>
                        <th>Total</th>
                    </tr>
                </tread>
                <tbody>
                    @foreach($dadosProd as $key)
                        <th scope="row">1</th>
                        <td> {{ $key->codigoProduto }}</td>
                        <td> {{ $key->NOME_REDUZIDO }}</td>
                    @endforeach
                </tbody>
            </table>
            
        </div>

    </div>
@endsection

{{--  video aula udemy botstrap 12 tabelas --}}