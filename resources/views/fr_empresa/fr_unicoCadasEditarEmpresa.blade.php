
  'codigo' 
  // 'bairro' 
//	'cep' ,
//'cnpj'
//	'codempresa' 
//	'codigo_pais_nfe' 
//	'complemento' 
//	'contato' 
//	'endereco' 
//	'fantasia' 
//	'telefone' 
//	'inscest' 
//	'numero'
//	'razao' 
	'tipo_nf' 
//	'codcidade' 
	'crt' 
	'margem_lucro'

)

@include('inc.erros')

    {{ csrf_field() }}

    <style>
        input{
            height: 18px;
            
        }
       /* #grupo{
            height: 25px;
        } */
        #text_codcidade, #text_uf, #text_pessoa{
            width: 17px;
            padding: 0;
            text-align: left;
        }

       #text_consufinal, #text_diferido, #text_ehtransp{

            width: 45px;
            padding: 10;
            text-align: left;
            margin-left: 10px;
        }
        #text_cnpj, #text_inscricao,#text_cep{
            width: 150px;
        }
        .lab{
            margin-left: 10px;
            margin-bottom: 0;
         /*   padding-right: 20px;*/
            padding-bottom: 0;
            
        }
        .juntar{
            padding-bottom: 0;
        }

        #btnsubmit{
            padding-top: 10px;
            text-align: center;
        }
        #text_ramalcontato{
            width:  40px;
        }
    </style>   

        
    <div class="row"> {{--<!-- Linha formulário todo --> --}}
        
          {{--    <!-- Primeira coluna do formulário -->  --}}
        <div class="col-12 col-lg-6" style="background-color: aqua">
                
                    
            <div class="row"> {{-- <!-- Primeira linha de campos -->  --}}
            
                <div class="col-12">
                    <h5>Ficha Cadastral</h5>
                </div>

                <div class="col-12 col-md-8">
                  
                    <div class="juntar" class="form-group">
                            <label for="text_razao" class="lab">razao</label> 
                            <input type="text" class="form-control" id="text_razao" name="razao"
                             placeholder=" razao social:" value="{{ $codigo->razao ?? old('razao') }}">         
                                                        
                    </div>
                
                    <div class="juntar" class="form-group">
                            <label for="text_fantasia"  class="lab">Fantasia</label> 
                        <input type="text" class="form-control" id="text_fantasia" name="fantasia" 
                        placeholder="nome fantasia:" value="{{ $codigo->fantasia ?? old('fantasia') }}">   
                    </div>

                </div>

                <div class="col-12 col-md-4">
                    <div class="form-group" >
                        <label for="text_pessoa"  class="lab">Pessoa</label> 
                        <input type="text" class="form-control" id="text_pessoa" name="pessoa"
                         placeholder="pessoa:" value="{{ $codigo->pessoa ?? old('pessoa') }}">   
                    </div>
                </div>
            
            </div> {{--<!-- /Primeira linha de campos -->  --}}

                
            <div class="row"> {{--  <!-- Segunda linha de campos -->  --}}

                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label for="text_cnpj"  class="lab">Cnpj</label> 
                        <input type="text" class="form-control" id="text_cnpj" name="cnpj"
                         placeholder="cnpj:" value="{{ $codigo->cnpj ?? old('cnpj') }}">   

                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div  class="form-group">
                        <label for="text_inscricao"  class="lab">inscricao</label> 
                        <input type="text" class="form-control" id="text_inscricao" name="inscest"
                         placeholder="inscricao:" value="{{ $codigo->inscest ?? old('inscest') }}">   
                    </div>
                </div>
            
            </div> {{-- <!-- /Segunda linha de campos -->  --}}

        </div> {{--<!-- /Primeira coluna do formulário -->  --}}

            {{--  <!-- Segunda Coluna do formulário -->  --}}
        <div class="col-12 col-lg-6" style="background-color: aquamarine">
            
            <div class="row">  {{--   <!-- Terceira linha de campos -->  --}}

                <div class="col-12">
                    <h5>Contato</h5>
                </div>
                <div class="col-12 col-md-4">
                    <div class="juntar" class="form-group">
                        <label for="telefone" class="lab">Fone</label>
                        <input type="text" class="form-control" id="text_telefone" name="telefone"
                        placeholder="Seu Telefone"value="{{ $codigo->telefone ?? old('telefone') }}">
                    </div>
                </div>

                <div class="col-12 col-md-4">
                    <div class="form-group">
                        <label for="text_ramalcontato" class="lab">R contato</label> 
                        <input type="text" class="form-control" id="text_ramalcontato" name="ramalcontato"
                         placeholder="ramal do contato" value="{{ $codigo->ramalcontato ?? old('ramalcontato') }}">   
                    </div>
                </div>   
                
            
                <div class="col-12 col-md-5"> 
                    <div class="form-group">
                        <label for="text_email"  class="lab">email</label> 
                        <input type="text" class="form-control" id="text_email" name="email" 
                        placeholder="email" value="{{ $codigo->email ?? old('email') }}" >   
                    </div>
                </div>  
                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label for="text_contato"  class="lab">contato</label> 
                        <input type="text" class="form-control" id="text_contato" name="contato"
                         placeholder="contato" value="{{ $codigo->contato ?? old('contato') }}">   
                    </div> 
                </div>  

            </div> {{--  <!-- /Terceira linha de campos -->  --}}
        </div> {{-- <!-- /Segunda Coluna do formulário -->  --}}

    </div> {{-- !-- /Linha formulário todo -->  --}}
            {{-- bloco inferior esquerdo --}}
        <div class="row">
                
            <div class="col-12 col-lg-6" style="background-color: aquamarine">

                <div class="row">
                    <div class="col-12">
                        <h5>Logradouro</h5>
                    </div>

                    <div  class="col-12 col-md-10">
                        <div class="juntar" class="form-group">
                            <label for="endereco"  class="lab">Endereço</label>
                            <input type="text" class="form-control" id="endereco" name="endereco" 
                            placeholder="Seu Endereço" value="{{ $codigo->endereco ?? old('endereco') }}">
                        </div>
                    </div>

                    <div class="col-12 col-md-2">
                        <div class="form-group">
                            <label for="text_complemento"  class="lab">Nº</label>
                            <input type="text" class="form-control" id="text_complemento" name="complemento" 
                            placeholder="complemento:" value="{{ $codigo->complemento ?? old('complemento') }}">
                        </div>
                    </div>complemento

                    <div class="col-12 col-md-2">
                        <div class="form-group">
                            <label for="numero"  class="lab">Nº</label>
                            <input type="text" class="form-control" id="text_numero" name="numero" 
                            placeholder="n:" value="{{ $codigo->numero ?? old('numero') }}">
                        </div>
                    </div>



                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="text_bairro"  class="lab">Bairro</label> 
                            <input type="text" class="form-control" id="text_bairro" name="bairro" 
                            placeholder="bairro:" value="{{ $codigo->bairro ?? old('bairro') }}">   
                        </div>
                    </div>   
                
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="text_cep"  class="lab">Cep</label> 
                            <input type="text" class="form-control" id="text_cep" name="cep"
                             placeholder="cep:" value="{{ $codigo->cep ?? old('cep') }}">   
                        </div>     
                    </div>


                    <div class="col-12 col-md-6">
                        <div class="form-group">
                        <label for="text_codcidade"  class="lab">Cod Cidade</label> 
                        <input type="text" class="form-control" id="text_codcidade"  name="codcidade" 
                        placeholder="cc:" value="{{ $codigo->codcidade ?? old('codcidade') }}">   
                        </div>
                    </div>  
                    <div class="col-12 col-md-6">   
                        <div class="form-group">
                            <label for="text_uf"  class="lab">uf</label> 
                            <input type="text" class="form-control" id="text_uf" name="uf" 
                            placeholder="uf" value="{{ $codigo->uf ?? old('uf') }}">   
                        </div>
                    </div>   
            
                 </div>   

            </div>

                 {{-- <div class="col-12 col-md-6">  --}}
        
                <div class="col-12 col-md-6" style="background-color: aqua">
            
                   <div class="col-12">
                       <h5>Outros</h5>
                   </div>
                    <div class="row">
                        {{--  <div class="col-12 col-md-12">   --}}
                        <div class="form-group">
                          <label for="text_codempresa" class="lab" >consufinal</label>
                          <input type="text" class="form-control" id="text_codempresa" name="codempresa" 
                          placeholder="codempresa" value="{{ $codigo->codempresa ?? old('codempresa') }}">
                        </div>  
                        {{--  </div>   --}} 

                         {{-- <div class="col-12 col=md-6"> --}}
                        <div class="form-group"> 
                          <label for="text_codigo_pais_nfe" class="lab">codigo_pais_nfe</label>
                          <input type="text" class="form-control" id="text_codigo_pais_nfe" name="codigo_pais_nfe"
                           placeholder="codigo_pais_nfe" value="{{ $codigo->diferido ?? old('codigo_pais_nfe') }}">
                        </div>
                         {{--   </div> --}}

                        
                        <div class="form-group">
                          <label for="text_ehtransp" class="lab">ehtransp</label>
                          <input type="text" class="form-control" id="text_ehtransp" name="ehtransp" 
                          placeholder="ehtransp" value="{{ $codigo->ehtransp ?? old('ehtransp') }}">
                        </div>
                       </div> 
                   </div>
                   <div class="col-12" id="btnsubmit">
                      <button type="submit" class="btn btn-primary" >Enviar</button>
                    </div>   
                </div>   
                           