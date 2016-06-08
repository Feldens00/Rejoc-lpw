<?php

  
    require_once "../../model/pessoaModel.php";

    $obj = new pessoaModel();
    $pessoa = $obj->listaUm($_GET['id']);

?>

    <h3>Editar Pessoa</h3>
    <form  action="../../controller/pessoaController.php?action=1"
           method="post"
           enctype="multipart/form-data"
           accept-charset="utf-8"
           role="form"
           id="products_edit_form">

        <input type="hidden" name="id" value="<?= $pessoa['id_pessoa']?>" >
         <p> Equipe: <select name="id_equipe">
 
                            <?php

                                include '../../model/equipeModel.php';
                                $obje = new equipeModel();

                                $equipeArray = $obje->listaTodos();
                              
                               
                                print ('<option  value="0" > Selecione uma Equipe </option>');
                                foreach ($equipeArray as $linha) 
                                {
                                    $id_equipe=$linha["id_equipe"];
                                    $nome_equipe=$linha["nome_equipe"];
                                    print ("<option value=$id_equipe >$nome_equipe</option>");
                                }
                            ?>
                    </select> 
        *</p> 
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome" class="form-control" placeholder="Nome da Equipe" value="<?= $pessoa['nome_pessoa']; ?>">
        </div>
       
       <p>Data de Nascimento: 
        <input name="dia" type="text" size="2" maxlength="2" value="<?= $pessoa['dia_nasc']; ?>"/> m&ecirc;s  
        <input name="mes" type="text" size="2" maxlength="2" value="<?= $pessoa['mes_nasc']; ?>" />

        </p>

    <p> Endere&ccedil;o: <input name="endereco" type="text" size="50" maxlength="50" value="<?= $pessoa['endereco']; ?>"/> </p>

    <p> Bairro: <input type="text" name="bairro" maxlength="22" size="30" value="<?= $pessoa['bairro']; ?>" />

     CEP: <input type="text" name="cep5" maxlength="5" size="5" />-<input type="text" name="cep3" maxlength="3" size="3" /> </p>
       
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

         

      <p> Telefone: (<input type="text" name="ddd" maxlength="2" size="2" />) <input type="text" name="fone" maxlength="40" size="40" value="<?= $pessoa['fone']; ?>" /> </p>
      <p> E-mail: <input type="text" name="email" maxlength="45" size="45" value="<?= $pessoa['email']; ?>" /> </p>
      


        <button type="submit" name="products_edit_form" id="products_edit_form" class="btn btn-default">Salvar</button>
    </form>





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
    </script>

