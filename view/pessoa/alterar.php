<?php include "../../view/layout/header.php";

  
    require_once "../../model/pessoaModel.php";

    $obj = new pessoaModel();
    $pessoa = $obj->listaUm($_GET['id']);

?>

    <h3 >Editar Pessoa</h3> 
    <div class="col-lg-8 col-lg-push-2 centro" style="padding-bottom:150px"> 

                       <form  align="center" action="../../controller/pessoaController.php?action=1"
                       method="post"
                       enctype="multipart/form-data"
                       accept-charset="utf-8"
                       role="form"
                       id="formPes">

                    <input type="hidden" name="id" value="<?= $pessoa['id_pessoa']?>" >
                     <p> Equipe: <select name="id_equipe">
             
                                        <?php

                                            include '../../model/equipeModel.php';
                                            $obje = new equipeModel();

                                            $equipeArray = $obje->listaTodos();
                                          
                                           
                                            print ('<option  value="" > Selecione...</option>');
                                            foreach ($equipeArray as $linha) 
                                            {
                                                $id_equipe=$linha["id_equipe"];
                                                $nome_equipe=$linha["nome_equipe"];
                                                print ("<option value=$id_equipe >$nome_equipe</option>");
                                            }
                                        ?>
                                </select> 
                    *</p> 
                    <div align="center">
                        <label for="nome">Nome</label>
                        <input  style="width:500px;" type="text" name="nome" class="form-control" placeholder="Nome da Equipe" value="<?= $pessoa['nome_pessoa']; ?>">
                    </div>
                   
                   <p><div align="center">
                         <label>Data de Nascimento:</label> 
                        <input name="dia" type="number" style="width:100px;" size="2" maxlength="2" class="form-control" value="<?= $pessoa['dia_nasc']; ?>"/> m&ecirc;s  
                        <input name="mes" type="number" size="2" style="width:100px;" maxlength="2" class="form-control" value="<?= $pessoa['mes_nasc']; ?>" />
                   </div>
                    </p>

                <p>
                <div align="center">
                  <label>Endereço</label>
                    <input name="endereco" style="width:500px;" type="text" size="50" class="form-control" maxlength="50" value="<?= $pessoa['endereco']; ?>"/> </p>
                </div>

                <p> <div align="center">
                   <label>Bairro:</label>
                 <input type="text" style="width:500px;" name="bairro" maxlength="22" size="30" class="form-control" value="<?= $pessoa['bairro']; ?>" />
                  <label>CEP:</label> <input type="text" style="width:300px;" name="cep"  id="cep" class="form-control" maxlength="9" value="<?= $pessoa['cep']; ?>"  /></p>
                </div>
                

               
                 
                   
                  <div>
                  <label>Estado:</label>
                  <select name="estado" id="estado" onchange="buscar_cidades()">
                    <option value="">Selecione...</option>

                    <?php
                                           
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
                    <div align="center">
                      <label>Telefone:</label> 
                    <input type="text" style="width:300px;" name="fone" id="fone" class="form-control"  maxlength="12" value="<?= $pessoa['fone']; ?>"  /> </p>
                    </div>
                 
                  <p>
                  <div align="center">
                      <label>E-mail:</label>
                      <input style="width:500px;" type="text" name="email" maxlength="45" class="form-control" size="45" value="<?= $pessoa['email']; ?>" /> </p>
                  </div>



                    <button type="submit" name="products_edit_form" id="products_edit_form" class="btn btn-default">Cadastrar</button>
                </form>
     </div>

 <script>
    jQuery(function($){
      $("#fone").mask("(99) 9999-9999");
       $("#cep").mask("99999-999");
    });
  </script>

<?php include "../../view/layout/footer.php"; ?>