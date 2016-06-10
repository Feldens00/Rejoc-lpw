
<?php include "../../view/layout/header.php";
?>
<h3 id="h3_addPessoa">Adicionar Pessoa</h3>

  
    
    <div class="div-add"> 
            <form    action="../../controller/pessoaController.php?action=0"
               method="post"
               enctype="multipart/form-data"
               accept-charset="utf-8"
               role="form"
               id="products_add_form" align="center">
              
              <br />
              <p> Equipe: <select name="id_equipe">
       
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


              <p> Nome: <input width="100px" name="nome"  type="text" size="40" maxlength="40" />*      </p>

              <p>Data de Nascimento: 
              <input name="dia" type="text" size="2" maxlength="2" /> m&ecirc;s  
              <input name="mes" type="text" size="2" maxlength="2" />

              </p>

          <p> Endere&ccedil;o: <input name="endereco" type="text" size="50" maxlength="50"/> </p>

          <p> Bairro: <input type="text" name="bairro" maxlength="22" size="30" />

           CEP: <input type="text" name="cep"  onkeypress="mascara(this, '#####-###')" maxlength="9"  /></p>
             
            <div>
             Estado: 
            <select name="estado" id="estado" onchange="buscar_cidades()">
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
              Cidades:
              <select name="id_cidade" id="cidade">
                <option value="">Selecione o estado</option>
              </select>
            </div>

               

            <p> Telefone: <input type="text" name="fone"  onkeypress="mascara(this, '## ####-####')" maxlength="12"  /> </p>
            <p> E-mail: <input type="text" name="email" maxlength="45" size="45" /> </p>
            

             
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