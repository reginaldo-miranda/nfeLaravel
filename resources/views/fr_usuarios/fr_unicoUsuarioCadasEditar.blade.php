@include('inc.erros')
{{ csrf_field() }}

                
<div class="form-group">
     <label for="text_nome">Nome</label> 
     <input type="text" class="form-control" id="text_nome" name="nome" placeholder="nome do usuario:" value="{{ $usuarios->usuario ?? old('nome') }}">   
</div>


<div class="form-group">
    <label for="text_email">Email</label> 
    <input type="text" class="form-control" id="text_email" name="email" placeholder="email:" value="{{ $usuarios->email ?? old('email') }}">   
</div>

<div class="form-group">
    <label for="text_senha">senha</label> 
    <input type="password" class="form-control" id="text_senha" name="senha" placeholder="senha:">   
</div>
<div class="form-group">
    <label for="text_senhaRepetida">senha</label> 
    <input type="password" class="form-control" id="text_senhaRepetida" name="senhaRepetida" placeholder="inserir novamente a senha:">   
</div>


<div class="text-center">
    <button type="submit" class="btn btn-primary">Enviar</button>
</div>