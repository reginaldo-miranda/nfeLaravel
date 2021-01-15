@extends('layouts.app')
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
   @section('conteudo')   
  	<div class="container">
  		<br>
	  	<br>
	  	<h1>Formulário de Exemplo</h1>
	  	<hr>
	    <form>
	    	<!-- Linha formulário todo -->
	    	<div class="row">
	    		<!-- Primeira coluna do formulário -->
	    		<div class="col-12 col-lg-6" style="background-color: aqua">
					  
					  <!-- Primeira linha de campos -->
					  <div class="row">
					  	
					  	<div class="col-12">
					  		<h3>Ficha Cadastral</h3>
					  	</div>

						  <div class="col-12 col-md-8">
							  <div class="form-group">
							    <label for="nome">Nome</label>
							    <input type="text" class="form-control" id="nome" placeholder="Seu Nome">
							  </div>
						  </div>

						  <div class="col-12 col-md-4">
							  <div class="form-group">
							    <label for="email">Email</label>
							    <input type="email" class="form-control" id="email" placeholder="seu@email.com">
							  </div>
							</div>
				  	
				  	</div>
				  	<!-- /Primeira linha de campos -->

				  	<!-- Segunda linha de campos -->
				  	<div class="row">

						  <div class="col-12 col-md-10">
							  <div class="form-group">
							    <label for="endereco">Endereço</label>
							    <input type="text" class="form-control" id="endereco" placeholder="Seu Endereço">
							  </div>
						  </div>

						  <div class="col-12 col-md-2">
							  <div class="form-group">
							    <label for="num">Nº</label>
							    <input type="text" class="form-control" id="num" placeholder="999">
							  </div>
							</div>
				  	
				  	</div>
				  	<!-- /Segunda linha de campos -->

			  	</div>
			  	<!-- /Primeira coluna do formulário -->

			  	<!-- Segunda Coluna do formulário -->
			  	<div class="col-12 col-lg-6" style="background-color: aquamarine">
			  		
			  		<!-- Terceira linha de campos -->
			  		<div class="row">

			  			<div class="col-12">
					  		<h3>Contato</h3>
					  	</div>


						  <div class="col-12">
							  <div class="form-group">
							    <label for="fone">Fone</label>
							    <input type="text" class="form-control" id="fone" placeholder="Seu Telefone">
							  </div>
						  </div>

						  <div class="col-12">
							  <div class="form-group">
							    <label for="cel">Celular</label>
							    <input type="text" class="form-control" id="cel" placeholder="Seu Celular">
							  </div>
						  </div>
				  	
				  	</div>
				  	<!-- /Terceira linha de campos -->

			  	</div>
			  	<!-- /Segunda Coluna do formulário -->
		 		</div>
		 		<!-- /Linha formulário todo -->

			</form>
		</div>
    @endsection
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>