@extends('layouts.app')
@include('inc.erros')


@section('conteudo')
    {{ csrf_field() }}


    @if (count($dadospgto)==0)
        <p class="alert alert-damger">nao foi encontrado dados no banco</p>
        <form action="{{ route('produto.create') }}">
            @csrf
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    @else   
    
        <form method="post" action="{{ route('formapgto') }}" >
            @csrf
            <div class="form-group">
                <label for="text_codigo">Codigo</label><br> 
                <input type="text" class="form-control, comp_input" id="text_codigo" name="codigo"
                placeholder="codigo" value="{{ $dadospgtos->codigo ?? old('codigo') }}"> 
            </div>


            <div class="form-group">
                <label for="text_qtde_parcelas">Qde Parcelas</label><br> 
                <input type="text" class="form-control, comp_input" id="text_qtde_parcelas" name="qtde_parcelas" 
                placeholder="qtd parcelas:" value="{{ $dadospgtos->qtde_parcelas ?? old('qtde_parcelas') }}">   
            </div>

            <div class="form-group">
                <label for="text_dias_inicial">Dia Iniciala</label><br>
                <input type="text" class="form-control , comp_input" id="text_dias_inicial" name="dias_inicial" 
                placeholder="dia inicial:" value="{{ $dadospgtos->dias_inicial  ?? old('dias_inicial') }}">   
            </div>
            <div class="form-group">
                <label for="text_dias_intervalo">Intervalo</label><br> 
                <input type="text" class="form-control, comp_input" id="text_dias_intervalo" name="dias_intervalo"
                placeholder="dias_intervalo:" value="{{ $dadospgtos->dias_intervalo ?? old('dias_intervalo')}}">   
            </div>
            <div class="col-12" id="btnsubmit">
                <button type="submit" class="btn btn-primary" >Enviar</button>
            </div> 
        </form>  
    @endif    

@endsection    

    
    
