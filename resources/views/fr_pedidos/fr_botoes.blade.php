  <div class="row" id="btninca">
                      <form action="{{ route('listaIncluirProd', $dadosped->id_pedido) }}">
                        @csrf
                      <button type="submit" class="btn btn-primary btn-sm">Incluir Itens</button>
                    </form>
              
                    <form action="{{ route('produto.create') }}">
                        @csrf
                        <button type="submit" id="btncadastrar" class="btn btn-primary btn-sm">Cadastrar</button>
                    </form> 

                        @foreach($soma as $ss);
                          <div id="somatotal" class="justify-content-end"> 
                              <label><h2>total :{{ $ss->totalv }}</h2></label>  
                          </div>  
                        @endforeach;
                </div>