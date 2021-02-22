<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    {{--  Bootstrap CSS   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   
  --}}    
    <link href="{{ asset('css/app.css')}}" rel="stylesheet">
    <link href="{{ asset('css/fr_incluiritensPedido.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fr_unicoFormaPgto.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('css/main.css')}}"rel="stylesheet">  --}} 
    <link href="{{ asset('js/app.js') }}"rel="stylesheet">
    <title>sistema de usuarios</title>
    <style>
           
        #containerApp{
            background: greenyellow;
            height: 630px;
        }

        #footer{
          background: rgb(161, 173, 231);
            margin-left: 2%;
            padding-top: 5px;
            width: 98%;
            height:30px;
            text-align: center;  
            position: absolute;
            bottom: 0;
            left: 0;
         }
            
       
        input{
            height: 20px;
            border: 0;
            padding: 0;
        }
        
          
    </style>   

</head>
<body>
    <div class="container" id="containerApp">
        {{-- header --}}
      
        @include('inc.header')   
      
        {{-- conteudo --}}

        @yield('conteudo') 

        
    </div>

    <div id="footer">
        @include('inc.footer')
    </div> 
{{-- 
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->  --}}
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
{{--  verificar video 77 joao ribeiro validar sessao --}}
</html>
