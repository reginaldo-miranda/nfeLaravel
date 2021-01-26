<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    -->
    <link href="{{ asset('css/app.css')}}" rel="stylesheet">
    <link href="{{ asset('css/main.css')}}" rel="stylesheet">
    <title>sistema de usuarios</title>
</head>
{{-- https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_sidenav_full  link do site--}}

@section('conteudo')

<style>

    ul {
        margin: 0;
        padding: 0;
        list-style: none;
        width: 150px;
    }

    ul li {
            position: relative;
    }

    li ul {
        position: absolute;
        left: 149px;
        top: 0;
        display: none;
     }
     ul li a {
        display: block;
        text-decoration: none;
        color: #E2144A;
        background: rgb(196, 193, 193);
        padding: 5px;
      //  border: 1px solid #ccc;
     }

     li:hover ul {
          display: block !important;
     }

    ul li a ul li a:houver{

        display: block;
    }
    ul li ul li:hover {background: #666;}

    #menuoperacional{
        
        margin-left: 50px;
        
        
        
    }

</style>

<nav id=menu>
    <div class="row">
        <div class="col-md-12  offset-5 col-sm-8 offset-2 col-xs-12">
             <h3>Menu opercional</h3>
        </div> 
            
       
            <div class="col-md-12 offset-2 col-sm-8 offset-2 col-xs-12"> 

                    <button type="submit">Entrar</button>
                    <a href="#" id="menuoperacional">Pedido</a>
                    <a href="#" id="menuoperacional">Nota Fiscal</a>
                    <a href="#"  id="menuoperacional">Funcionário</a>
                    <a href="#"  id="menuoperacional">teste</a>
                    <a href="#"  id="menuoperacional">Produtos</a>
                 
            </div>
 
        </div>

    

        <div>
            <div>
            <h3>Menu</h3>
            </div>     
                    <ul>
                        <li>
                        <a href="#">cadastro</a>
                        <ul>
                            <li><a href="{{ route('cliente.create') }}">Clientes</a></li>
                            <li><a href="#">Fornecedor</a></li>
                            <li><a href="{{ route('funcionario.create') }}">Funcionário</a></li>
                            <li><a href="{{ route('usuario.create') }}">Usuario</a></li>
                            <li><a href="{{ route('produto.create') }}">Produtos</a></li>
                            </ul>
                        </li>
                    </ul>

                    <ul>
                        <li>
                            <a href="#">Relatorios</a>
                            <ul>
                                <a>relatorios</a>
                                <li><a href="{{ route('cliente.index') }}">Clientes</a></li>
                                <li><a href="#">Fornecedor</a></li>
                                <li><a href="{{ route('funcionario.index') }}">Funcionario</a></li>
                                <li><a href="{{ route('usuario.index') }}">Usuario</a></li>
                                <li><a href="{{ route('produto.index') }}">Produtos</a></li>
                            </ul>
                        </li>
                    </ul>
                    
                    <ul>
                        <li>
                            <a href="#">Cad Opercaionais</a>
                            <ul>
                                <a>Outros Cadastros</a>
                                <li><a href="#">Cond Pagamento</a></li>
                                <li><a href="#">Fornecedor</a></li>
                                <li><a href="#">Funcionario</a></li>
                                <li><a href="#">Usuario</a></li>
                                <li><a href="#">Produtos</a></li>
                            </ul>
                        </li>
                    </ul>
        </div>
    </div> 
</nav>


@endsection