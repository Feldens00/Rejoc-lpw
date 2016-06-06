<?php


require_once "../../model/pessoaModel.php";


?>

    <h1>
        Pessoas
    </h1>

    <div class="col-lg-12">
        <meta charset="UTF-8">
        <div class="col-lg-4">
            <a href="adicionar.php" >Adicionar</a>
        </div>
        <div class="col-lg-8">
            <form action="pesquisa.php" method="post">
                <div class="col-lg-10">
                    <input type="text"
                           class="form-control"
                           name="pessoa_pesq" />
                </div>  
            </form>
        </div>
    </div>

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
                                <td> <?php print $linha["nome_pessoa"]; ?></td>
                                <td> <?php print $linha["nome_equipe"]; ?></td>
                                
                                 <td align="center" width="70">
                                    <form action="alterar.php?id=<?php echo $linha['id_pessoa'];?>" method="POST" >
                                        <input type="submit" value="Alterar" />    
                                    </form> 
                                </td>

                                <td align="center" width="70">
                                     <form action="../../controller/pessoaController.php?action=2&id=<?php echo $linha[ 'id_pessoa'];?>" method="POST" >
                                            <input type="submit" value="Excluir" />    
                                     </form> 
                                </td>
                               
                              
             </tr>
                      

      

       <?php } ?>
        </tbody>
    </table>

 