<?php include "../../view/layout/header.php";


require_once "../../model/pessoaModel.php";


?>

    <h1 id="h1_indexPessoa">
        Pessoas
    </h1>

    <div id="btn_indexPessoa">
        <meta charset="UTF-8">
        <div class="col-lg-4">
           
            <a href="adicionar.php"><button type="button" class="btn btn-primary">+ Pessoa</button></a>
        </div>

        <div class="search_indexPessoa">
            <form action="pesquisa.php" method="post">
                <div class="col-lg-10">
                    <input type="text"
                           class="form-control"
                           name="pessoa_pesq" />
                </div>  
            </form>
        </div>
    </div>

  
 <div class="div-centro">  
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
                                             <form action="../../controller/pessoaController.php?action=2&id=<?php echo $linha[ 'id_pessoa'];?>" method="POST" >
                                                     <button type="submit" class="btn btn-danger">Excluir</button>     
                                             </form> 
                                        </td>

                                     
                                      
                     </tr>
                              

              

               <?php } ?>
                </tbody>
            </table>
    </div>
 
 <?php include "../../view/layout/footer.php"; ?>
 