
<?php include "../../view/layout/header.php";


  
    require_once "../../model/equipeModel.php";

    $obj = new equipeModel();
    $equipe = $obj->listaUm($_GET['id']);

?>

    <h3>Editar Equipe</h3>

     <div class="col-lg-8 col-lg-push-2 centro" style="padding-bottom:150px"> 
              <form  align="center" action="../../controller/equipeController.php?action=1"
                   method="post"
                   enctype="multipart/form-data"
                   accept-charset="utf-8"
                   role="form"
                   id="formEqui">

                  <input type="hidden" name="id" value="<?= $equipe['id_equipe']?>" >

                  <div class="form-group">
                      <label for="nome">Nome</label>
                      <input type="text" name="nome" class="form-control" placeholder="Nome da Equipe" size="40" maxlength="40" value="<?= $equipe['nome_equipe']; ?>">
                  </div>
                  <div class="form-group">
                      <label for="ordem">Ordem</label>
                     <input type="text" name="ordem" class="form-control" placeholder="Ordem de listagem da equipe" value="<?= $equipe['ordem_equipe']; ?>">
                  </div>
              

                <button type="submit" name="products_edit_form" id="products_edit_form" class="btn btn-default">Salvar</button>
            </form>
      </div>
   


<?php include "../../view/layout/footer.php"; ?>