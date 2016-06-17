<?php include "../../view/layout/header.php";


require_once "../../model/pessoaModel.php";


?>

    <h1 >
        Pessoas
    </h1>

  
  
   <div class="col-lg-9 ">

        <div class="col-lg-4 col-lg-push-2">
               <a href="adicionar.php"><button type="button" class="btn btn-primary">+ Pessoa</button></a>
        </div>
        <div class="col-lg-8 col-lg-push-4 col-sm-5">
            <form action="pesquisa.php" method="post">
                <div class="col-lg-10">
                    <input type="text"
                           class="form-control"
                           name="pessoa_pesq" />
                </div>    
            </form>
        </div>
    </div>
  
  <div class="col-lg-8 col-lg-push-2" style="padding-bottom:150px">   
          <table style="margin-top:40px" class="table">
                <thead>
                <tr>
                    <th>id</th>
                    <th>Nome da pessoa</th>
                    <th>Equipe</th>
                    <th>Opções</th>
                   
                </tr>
                </thead>
                <tbody>
                <?php

                $obj = new pessoaModel();
                $pessoaArray = $obj->listaTodos();

                foreach($pessoaArray as $linha){ ?>

                    <tr>
                                
                                        <td> <?php print $linha["id_pessoa"]; ?></td>

                                        <td><a href="../../view/pessoa/listaUm.php?id=<?php print $linha['id_pessoa']; ?>">
                                                    <?php   echo $linha['nome_pessoa'];?></td></a>
                                         <td> <?php print $linha["nome_equipe"]; ?></td>
                                        
                                         <td align="center" width="70">
                                            <form action="alterar.php?id=<?php echo $linha['id_pessoa'];?>" method="POST" >
                                                 <button type="submit" class="btn btn-warning">Alterar</button> 
                                            </form> 


                                        </td>

                                        <td align="center" width="70">
                                             <button type="submit" class="btn btn-danger delete" data-id="<?php echo $linha['id_pessoa']?>" data-nome="<?php echo $linha['nome_pessoa']?>">Excluir</button>     
                                        </td>

                                     
                                      
                     </tr>
                              

              

               <?php } ?>
                </tbody>
            </table>

            
              <div id="deletePeople" class="modal fade">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      <h4 class="modal-title">Modal title</h4>
                    </div>
                    <div class="modal-body">
                       <p><strong>Realmente deseja apagar o cadastro?</strong><label id="nomeTxt"></label></p>
                    </div>
                    <div class="modal-footer">
                     
                        <a id="hreft" href="" ><button type="submit" class="btn btn-primary">Sim</button></a>
                    
                    
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
                  
                    </div>
                  </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
              </div><!-- /.modal -->
    </div>
 
 <?php include "../../view/layout/footer.php"; ?>
 <script>
     $('.delete').click(function(){
    nome = $(this).data('nome');
    $('#nomeTxt').text(nome);

     
    id = $(this).data('id');

    $('#idDel').text(id);
    document.getElementById('hreft').href="../../controller/quadrantecontroller.php?action=1&id="+ id;
    $('#deletePeople').modal('show');

});
 </script>