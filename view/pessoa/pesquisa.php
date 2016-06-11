
<?php include "../../view/layout/header.php";


require_once "../../model/pessoaModel.php";


?>

    <h1>
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
                    <th>Quadrante</th>
                </tr>
                </thead>
                <tbody>
                <?php

                $obj = new pessoaModel();
                $pessoaArray = $obj->pesquisar($_POST['pessoa_pesq']);

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
                                             <form action="../../controller/pessoaController.php?action=2&id=<?php echo $linha[ 'id_pessoa'];?>" method="POST" >
                                                    <button type="submit" class="btn btn-danger">Excluir</button>   
                                             </form> 
                                        </td>

                                     
                                      
                     </tr>
                              

              

               <?php } ?>
                </tbody>
            </table>
        </div>

<?php "../../view/layout/footer.php"; ?>