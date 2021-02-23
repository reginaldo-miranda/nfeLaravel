
@extends('layouts.app') 

@section('titulopagina')
    <div class="img" class="col-md-4 col-md-4 offset-5 col-sm-8 offset-2 col-xs-12">

        <h4>Lista de formas de pagamentos</h4>
     </div>
@endsection    

@section('conteudo') 


     @if (count($dadospgto)==0)

        <p class="alert alert-damger">nao foi encontrado dados no banco</p>
        <form action="{{ route('formapgto.create') }}">
            @csrf
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>  
       
        
    @else
  
        <div class="text-center mt-3 mb-3">
            <a href="{{ route('formapgto.create') }}">
             <button class="btn btn-success btn-sm">Cadastrar</button>
         </div> 
         
    
  
      
       @foreach($dadospgto as $dadospgtos)
       
        
            <div class="row">
                <div class="col-2">
                    
                    {{ $dadospgtos->codigo }} 
                                       
                </div>
               
                <div class="col-4">
                    
                    {{ $dadospgtos->descricao }} 
                                       
                </div>
                <div class="col-2">

                    {{ $dadospgtos->qtde_parcelas }}


                </div>

                    <style>

                        .btn{
                            height: 23px;
                            margin-right: 5px;
                            font-size: 10px;
                            text-align: center;
                        }
                    </style>

                    <form action="{{ route('formapgto.edit', $dadospgtos->codigo ) }}" method="get">
                        @csrf
                        <button type="submit" class="btn btn-warning btn-sm">Editar</button>
                    </form>
                    <form action="{{ route('formapgto.destroy', $dadospgtos->codigo) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                    </form>

                   
                      
                    

                   {{--   class="glyphicon glyphicon-pencil"  --}}
               {{--  </div>  --}}  
            
            </div>
            
           
       @endforeach 
    
     
     @endif



 @endsection 