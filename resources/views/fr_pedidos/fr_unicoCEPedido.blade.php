<!DOCTYPE html>
<html lang="pt-br">

<style>

#text_nomeCliente{
    width: 300px;
}
</style>


    <div class="juntar" class="form-group">
        <label for="text_nomeCliente" class="lab">Nome do Cliente</label> 
        <input type="text" class="form-control" id="text_nomeCliente" name="nomeCliente"
        placeholder=" Nome do cliente:" value="{{ $codigoe->razao ?? old('nomeCliente') }}">   
        
        <form action="{{ route('cliente.index') }}">
            @csrf
            <button type="submit" class="btn btn-primary">pesquisar</button>
            <a id="espacomenu" href="{{ route('cliente.index') }}">Clientes</a>
        </form>  
                                        
    </div>