
@include('inc.erros')

@yield('conteudo') 
    {{ csrf_field() }}
    
       <div class="row">
        
           <div class="form-group">
                <label for="text_codigo" class="juntar">Codigo</label><br> 
                <input type="text" class="form-control, comp_input" id="text_codigo" name="codigo"
                placeholder="codigo" value="{{ $dadospgto->codigo ?? old('codigo') }}"> 
            </div>


            <div class="form-group">
                <label for="text_qtde_parcelas" class="juntar">Qde Parcelas</label><br> 
                <input type="text" class="form-control, comp_input" id="text_qtde_parcelas" name="qtde_parcelas" 
                placeholder="qtd parcelas:" value="{{ $dadospgto->qtde_parcelas ?? old('qtde_parcelas') }}">   
            </div>

            <div class="form-group">
                <label for="text_dias_inicial" class="juntar">Dia Iniciala</label><br>
                <input type="text" class="form-control , comp_input" id="text_dias_inicial" name="dias_inicial" 
                placeholder="dia inicial:" value="{{ $dadospgto->dias_inicial  ?? old('dias_inicial') }}">   
            </div>
            <div class="form-group">
                <label for="text_dias_intervalo" class="juntar">Intervalo</label><br> 
                <input type="text" class="form-control, comp_input" id="text_dias_intervalo" name="dias_intervalo"
                placeholder="dias_intervalo:" value="{{ $dadospgto->dias_intervalo ?? old('dias_intervalo')}}">
                  
            </div>

            <div class="col-12" id="btnsubmit">
                <button type="submit" class="btn btn-primary" >Enviar</button>
            </div> 

             
       </div>
     

 

    
    
