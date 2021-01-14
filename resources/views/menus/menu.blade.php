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

</style>

<nav id=menu>
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
                      <li><a href="#">Produtos</a></li>
                    </ul>
                </li>
            </ul>

            <ul>
                <li>
                    <a href="#">Relatorios</a>
                    <ul>
                        <a>relatorios</a>
                        <li><a href="">Clientes</a></li>
                        <li><a href="#">Fornecedor</a></li>
                        <li><a href="{{ route('funcionario.index') }}">Funcionario</a></li>
                        <li><a href="{{ route('usuario.index') }}">Usuario</a></li>
                        <li><a href="#">Produtos</a></li>
                    </ul>
                </li>
            </ul>

    </div>
  
</nav>

@endsection