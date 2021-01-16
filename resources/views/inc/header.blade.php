  {{--  <div class="col-md-4 offset-4 col-sm-8 offset-2 col-xs-12 imag-logo"> --}}
    <style>

      .topo {
        width:99%;
        background-color: azure;
        position: relative;
        padding: 5px;
        height: 75px;
      }
      
      
    .img {
        position: absolute;
        max-width: 25%;
        top: 1%;
        left: 46%;
      } 
      #botao{
        float: right;
        padding-left: 15px; 
        margin-top: -15px;
        
      }
       #titulo{
          text-align: center;
       }
    
    </style> 
     
  <div class="row">
 
      <div class="topo">
         <h4>Empresa de distribuicao</h4>
         <h5>Rua Duque de Caxias,199 - Limeira<h5>
         @yield('titulopagina')

         <a id="botao" href="/">sair</a>
         <a id="botao" href="/administrador">Voltar</a>
      </div>

  </div> 

     <br>
   
  