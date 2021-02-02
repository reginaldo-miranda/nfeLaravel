<!DOCTYPE html>
<html lang="pt-br">


<style>

#text_nomeCliente{
    width: 300px;
}
</style>


    <div class="juntar" class="form-group">
        <label for="text_numeroPedido">numero: </label>
        <input type="text" name="numeroPedido">

        <form action="{{ route('pcliente') }}" class="form form-inline">
            @csrf
                <label for="text_razaosocial" class="lab">Nome do Cliente</label> 
                <input type="text" class="form-control" id="text_razaosocial" name="razaosocial"
                 placeholder=" Nome do cliente:" value="{{ $cliente->razaosocial ?? old('razaosocial') }}">  
                
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">pesquisar cliente</button> 
                </div> 
        </form>  

                               
    </div>