<?php include "../../view/layout/header.php";
?>

<h3 id="h3_addEquipe">Adicionar Equipe</h3>



<div class="div-add">
    <form  align="center"  action="../../controller/equipeController.php?action=0"
         method="post"
         enctype="multipart/form-data"
         accept-charset="utf-8"
         role="form"
         id="products_add_form">


    <div class="form-group">
        <label for="nome">Nome</label>
        <input name="nome" type="text" class="form-control" placeholder="Nome">
    </div>
    <div class="form-group">
        <label for="ordem">Ordem</label>
          <input name="ordem" type="text" class="form-control" placeholder="Ordem">
    </div>
   

    <button type="submit" name="products_add_form" class="btn btn-default">Cadastrar</button>
</form> 
</div>


<?php include "../../view/layout/footer.php"; ?>