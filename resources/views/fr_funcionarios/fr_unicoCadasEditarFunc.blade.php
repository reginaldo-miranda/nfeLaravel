
@include('inc.erros')
{{ csrf_field() }}
                        
<div class="form-group">
    <label for="text_nome">Nome</label> 
    <input type="text" class="form-control" id="text_nome" name="text_nome" 
    placeholder="nome do funcionario:" value="{{ $funcionario->nome ?? old('nome') }}">   

</div>

<div class="form-group">
    <label for="text_endereco">Endereco</label> 
    <input type="text" class="form-control" id="text_endereco" name="text_endereco"
     placeholder="endereco:" value="{{ $funcionario->endereco ?? old('endereco') }}">   
</div>

<div class="form-group">
    <label for="text_email">Email</label> 
    <input type="text" class="form-control" id="text_email" name="text_email"
     placeholder="email:" value="{{ $funcionario->email ?? old('email') }}">   
</div>

<div class="form-group">
    <label for="text_salario">Salario</label> 
    <input type="text" class="form-control" id="text_salario" name="text_salario" 
    placeholder="salario:"  value="{{ $funcionario->salario ?? old('salario') }}">     
</div>

<div class="form-group">
    <label for="text_funcao">Funcao</label> 
    <input type="text" class="form-control" id="text_funcao" name="text_funcao" 
    placeholder="funcao"  value="{{ $funcionario->funcao ?? old('funcao') }}">      
</div>

<div class="text-center">
    <button type="submit" class="btn btn-primary">Enviar</button>
</div>
        
