
<?php

  
    require_once "../../model/equipeModel.php";

    $obj = new equipeModel();
    $equipe = $obj->listaUm($_GET['id']);

?>

    <h3>Editar Equipe</h3>
    <form  action="../../controller/equipeController.php?action=1"
           method="post"
           enctype="multipart/form-data"
           accept-charset="utf-8"
           role="form"
           id="products_edit_form">

        <input type="hidden" name="id" value="<?= $equipe['id_equipe']?>" >

        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome" class="form-control" placeholder="Nome da Equipe" value="<?= $equipe['nome_equipe']; ?>">
        </div>
        <div class="form-group">
            <label for="ordem">Ordem</label>
           <input type="text" name="ordem" class="form-control" placeholder="Ordem de listagem da equipe" value="<?= $equipe['ordem_equipe']; ?>">
        </div>
      

        <button type="submit" name="products_edit_form" id="products_edit_form" class="btn btn-default">Salvar</button>
    </form>

