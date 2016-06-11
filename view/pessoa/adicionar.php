
<?php include "../../view/layout/header.php";
?>
<h3>Adicionar Pessoa</h3>

  
    
   <div class="col-lg-8 col-lg-push-2 centro" style="padding-bottom:150px">   
            <form  align="center"   action="../../controller/pessoaController.php?action=0"
               method="post"
               enctype="multipart/form-data"
               accept-charset="utf-8"
               role="form"
               id="products_add_form" align="center">
              
              <br />
              <p><label>Equipe:</label> <select name="id_equipe">
       
                                  <?php

                                      include '../../model/equipeModel.php';
                                      $obj = new equipeModel();

                                      $equipeArray = $obj->listaTodos();
                                    
                                     
                                      print ('<option value="0" >Selecione a Equipe...</option>');
                                      foreach ($equipeArray as $linha) 
                                      {
                                          $id_equipe=$linha["id_equipe"];
                                          $nome_equipe=$linha["nome_equipe"];
                                          print ("<option value=$id_equipe >$nome_equipe</option>");
                                      }
                                  ?>
                          </select> 
              *</p> 


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
              <label>CEP</label> <input type="text" style="width:300px;"  name="cep" class="form-control"  onkeypress="mascara(this, '#####-###')" maxlength="9"  />
              </div>
           </p>
             
            <div>
             <label>Estado:</label> 
            <select name="estado" id="estado"  onchange="buscar_cidades()">
              <option value="">Selecione...</option>

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
                <input type="text" style="width:300px;"  name="fone"  class="form-control"  onkeypress="mascara(this, '## ####-####')" maxlength="12"  />
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
    
     
  
   
  
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script>
    function buscar_cidades(){
      var estado = $('#estado').val();
      if(estado){
        var url = '../../js/ajax_buscar_cidades.php?estado='+estado;
        $.get(url, function(dataReturn) {
          $('#load_cidades').html(dataReturn);
        });
      }
    }

      function mascara(t, mask){
         var i = t.value.length;
         var saida = mask.substring(1,0);
         var texto = mask.substring(i)
         if (texto.substring(0,1) != saida){
            t.value += texto.substring(0,1);
         }
     }
    </script>

    
<?php include "../../view/layout/footer.php"; ?>