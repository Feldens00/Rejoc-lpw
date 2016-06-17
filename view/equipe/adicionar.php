<?php include "../../view/layout/header.php";
?>

<h3>Adicionar Equipe</h3>



<div class="col-lg-8 col-lg-push-2 centro" style="padding-bottom:150px"> 
    <form  align="center"  action="../../controller/equipeController.php?action=0"
         method="post"
         enctype="multipart/form-data"
         accept-charset="utf-8"
         role="form"
         id="formEqui">


    <div  align="center" class="form-group">
        <label for="nome">Nome</label>
        <input name="nome" type="text" style="width:500px;" class="form-control" size="40" maxlength="40" placeholder="Nome">
    </div>
    <div align="center" class="form-group">
        <label for="ordem">Ordem</label>
          <input name="ordem" type="number" style="width:100px;" class="form-control" placeholder="Ordem">
    </div>
   

    <button type="submit" name="products_add_form" class="btn btn-default">Cadastrar</button>
</form> 
</div>


<?php include "../../view/layout/footer.php"; ?>