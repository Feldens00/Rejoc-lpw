

<h3>Adicionar Equipe</h3>




<form    action="../../controller/equipeController.php?action=0"
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
   

    <button type="submit" name="products_add_form" id="products_add_form" class="btn btn-default">Salvar</button>
</form>

