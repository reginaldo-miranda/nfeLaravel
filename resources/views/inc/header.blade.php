  {{--  <div class="col-md-4 offset-4 col-sm-8 offset-2 col-xs-12 imag-logo"> --}}
  

    <style>

      .topo {
        background-color: azure;
        position: relative;
        padding: 2rem;
        height: 122px;
      }
      
      
      .img {
        position: absolute;
        max-width: 25%;
        top: 5%;
        left: 46%;
      } 
      #botao{
        float: right;
      }
    
    </style> 

    <div class="topo">
      
       <h4>Empresa de distribuicao</h4> 
       <h5>Rua Duque de Caxias,199 - Limeira<h5>
     
       <div class="img" class="col-md-4 col-md-4 offset-5 col-sm-8 offset-2 col-xs-12"> 
         <img src={{ asset('imagem/logo.jpg')}}>
       </div>
       <div id="botao">
          <a href="/administrador">Voltar</a>
          <a href="/">sair</a>
       </div>
    

    </div>
   
  