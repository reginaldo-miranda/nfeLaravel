{{-- 
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

    #menuoperacional{
        
        margin-left: 50px;
        
        
        
    }

</style>

</div>
            
       

{{-- 
<nav id=menu>
    <div class="row">
        <div class="col-md-12  offset-5 col-sm-8 offset-2 col-xs-12">
             <h3>Menu opercional</h3>
        </div> 
        <div class="pos-f-t">
            <div class="collapse" id="navbarToggleExternalContent">
              <div class="bg-dark p-4">
                <h4 class="text-white">Collapsed content</h4>

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
                <span class="text-muted">Toggleable via the navbar brand.</span>
              </div>
            </div>
           {{--   <nav class="navbar navbar-dark bg-dark"> 
            <nav class="navbar navbar-dark bg-dark">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            </nav>
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

--}}


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  {{--   <meta name="viewport" content="width=device-width, initial-scale=1"> --}}

    <!-- Bootstrap CSS 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    -->
    <link href="{{ asset('css/app.css')}}" rel="stylesheet">
    <link href="{{ asset('css/main.css')}}" rel="stylesheet">
    <title>sistema de usuarios</title>
</head>


<style>


body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 73%;
  width: 0;
  position: relative;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: rgb(85, 92, 97);
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 13px;
//  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
 // color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}



@media screen and (max-height: 250px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

ul {
    margin: 0;
    padding: 0;
    list-style: none;
    width: 220px;
}

ul li {
        position: relative;
}

li ul {
    position: absolute;
    left: 221px;
    top: 0;
    display: none;
    padding: 0;
 }
 ul li a {
    display: block;
    text-decoration: none;
    color: #5214e2;
    background: rgb(196, 193, 193);
    //padding: 0;
  //  border: 1px solid #ccc;
 }

 li:hover ul {
      display: block !important;
 }

ul li a ul li a:houver{

    display: block;
}
ul li ul li:hover {background: rgb(200, 211, 214);}

#menuoperacional{
    
    margin-left: 80px;
     
}
#spanbtn{
  margin-left: 0;
  
}

#espacomenu{
 
 padding:0 0 0 30px;
 
}

</style>
</head>
<body>
@section('conteudo')    
    <div class="row">
      <div  id="spanbtn" class="col-md-12 offset-2 col-sm-8 offset-2 col-xs-12"> 
      
          <span id="spanbtn" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
      
          <a href="{{ route('pedido.index') }}" id="menuoperacional">Pedido</a>
          <a href="#" id="menuoperacional">Nota Fiscal</a>
          <a href="#" id="menuoperacional">Funcionário</a>
          <a href="#" id="menuoperacional">teste</a>
          <a href="#" id="menuoperacional">Produtos</a>
      </div> 
    </div>  
      

    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                  
        <ul>
          <li>
              <a href="#">cadastro</a>
              <ul>
                  <a>Cadastro</a>
                  <li><a id="espacomenu" href="{{ route('cliente.index') }}">Clientes</a></li>
                  <li><a id="espacomenu" href="{{ route('fornecedor.index') }}">Fornecedor</a></li>
                  <li><a id="espacomenu" href="{{ route('funcionario.index') }}">Funcionário</a></li>
                  <li><a id="espacomenu" href="{{ route('usuario.index') }}">Usuario</a></li>
                  <li><a id="espacomenu" href="{{ route('produto.index') }}">Produtos</a></li>
                </ul>
          </li>
        </ul>

        <ul>
            <li>
                <a href="#">Relatorios</a>
                <ul>
                    <a>relatorios</a>
                    <li><a id="espacomenu" href="{{ route('cliente.index') }}">Clientes</a></li>
                    <li><a id="espacomenu" href="#">Fornecedor</a></li>
                    <li><a id="espacomenu" href="{{ route('funcionario.index') }}">Funcionario</a></li>
                    <li><a id="espacomenu" href="{{ route('usuario.index') }}">Usuario</a></li>
                    <li><a id="espacomenu" href="{{ route('produto.index') }}">Produtos</a></li>
                </ul>
            </li>
        </ul>

        <ul>
            <li>
                <a href="#">Cad Opercaionais</a>
                <ul>
                    <a>Outros Cadastros</a>
                    <li><a id="espacomenu" href="{{ route('empresa.index') }}">Empresa</a></li> 
                    <li><a id="espacomenu" href="#">Fornecedor</a></li>
                    <li><a id="espacomenu" href="#">Funcionario</a></li>
                    <li><a id="espacomenu" href="#">Usuario</a></li>
                    <li><a id="espacomenu" href="#">Produtos</a>
                 </ul>
            </li>
        </ul>
    
    </div>


    {{-- <h2>Animated Sidenav Example</h2> 
    <p>Click on the element below to open the side navigation menu.</p> --}}
    {{-- <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>  --}}

    <script>
    function openNav() {
      document.getElementById("mySidenav").style.width = "470px";
    }

    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
    }
    </script>
@endsection  
</body>
</html> 

 

{{-- @endsection  --}}