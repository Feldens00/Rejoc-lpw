
<?php include "../../view/layout/header.php";
?>
 
 

    
<h3>Adicionar Pessoa</h3>

  
    
   <div class="col-lg-8 col-lg-push-2 centro" style="padding-bottom:150px">   
            <form  align="center"   action="../../controller/pessoaController.php?action=0"
               method="post"
               enctype="multipart/form-data"
               accept-charset="utf-8"
               role="form"
               id="formPes" align="center">
              
              <br />
              <p><label>Equipe:</label> <select name="id_equipe" >
       
                                  <?php

                                      include '../../model/equipeModel.php';
                                      $obj = new equipeModel();

                                      $equipeArray = $obj->listaTodos();
                                    
                                     
                                      print ('<option value="">Selecione...</option>');
                                      foreach ($equipeArray as $linha) 
                                      {
                                          $id_equipe=$linha["id_equipe"];
                                          $nome_equipe=$linha["nome_equipe"];
                                          print ("<option value=$id_equipe >$nome_equipe</option>");
                                      }
                                  ?>
                          </select > 
              </p> 


              <p>
                
                <div align="center">
                *<label>Nome:</label>
                <input style="width:500px;"  name="nome" class="form-control" type="text" size="40" maxlength="40"  />
                </div>       
              </p>

              <p>
                <label>Data de Nascimento:</label> 
                <div align="center">
                  <input name="dia" style="width:100px;"  type="number" class="form-control" size="2" maxlength="2"  /><label>Mês</label>  
                <input name="mes" style="width:100px;"  type="number" class="form-control" size="2" maxlength="2"  />
                </div>
              </p>

          <p>
            <label>Endereço: </label> 
            <div align="center">
              <input name="endereco" style="width:500px;" class="form-control" type="text" size="50" maxlength="50" />
            </div>
           </p>

          <p> 
              <label>Bairro:</label> 
              <div align="center"><input type="text" style="width:500px;"  name="bairro" class="form-control" maxlength="22" size="30"  />
              <label>CEP</label> <input type="text" style="width:300px;" id="cep"  name="cep" class="form-control"  maxlength="10"  />
              </div>
           </p>
             
            <div>
             <label>Estado:</label> 
            <select name="estado" id="estado"  onchange="buscar_cidades()">
              <option  value="">Selecione...</option>

              <?php
                                      include '../../model/pessoaModel.php';
                                      $obj = new pessoaModel();

                                      $arrayEstados = $obj->cidade_estados();

                                     
                                
                                    
                                       foreach ($arrayEstados as $estados => $nome) {
                                        echo "<option value='{$estados}'>{$nome}</option>";
              }?>
            </select>
            </div>
            <div id="load_cidades">
              <label>Cidades:</label>
              <select name="id_cidade" id="cidade">
                <option value="">Selecione o estado</option>
              </select>
            </div>

               

            <p>
                <label>Telefone:</label>
                <div align="center">
                <input type="text" style="width:300px;"  name="fone"  id="fone" class="form-control"  maxlength="15"  />
                </div>   
            </p>

            <p> <label>E-mail:</label>
            <div align="center">
            <input type="email"  style="width:500px;"  name="email" class="form-control" maxlength="45" size="45"   />
            </div> 
             </p>
            

             
              <p> <button type="submit" class="btn btn-default">Cadastrar</button> <button type="reset" class="btn btn-default">Limpar</button>  </p>
              
           
          </form>
    </div>
    
     
  <script>
    jQuery(function($){
      $("#fone").mask("(99) 9999-9999");
       $("#cep").mask("99999-999");
    });
  </script>
   
  
  

    
<?php include "../../view/layout/footer.php"; ?>