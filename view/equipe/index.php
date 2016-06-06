<?php


require_once "../../model/equipeModel.php";


?>

    <h1>
        Equipes
    </h1>

    <div class="col-lg-12">
        <meta charset="UTF-8">
        <div class="col-lg-4">
            <a href="adicionar.php" >Adicionar Equipe</a>
        </div>
        <div class="col-lg-8">
            <form action="pesquisa.php" method="post">
                <div class="col-lg-10">
                    <input type="text"
                           class="form-control"
                           name="equipe_pesq" />
                </div>  
            </form>
        </div>
    </div>

    <table style="margin-top:40px" class="table">
        <thead>
        <tr>
            <th>id</th>
            <th>Nome da equipe</th>
            <th>Ordem de listagem no quandrante</th>
            <th>Opções</th>
        </tr>
        </thead>
        <tbody>
        <?php

        $obj = new equipeModel();

        $equipeArray = $obj->listaTodos();

        foreach($equipeArray as $linha){ ?>

            <tr>
                        
                                <td> <?php print $linha["id_equipe"]; ?></td>
                                <td> <?php print $linha["nome_equipe"]; ?></td>
                                <td> <?php print $linha["ordem_equipe"]; ?></td>
                                
                                 <td align="center" width="70">
                                    <form action="alterar.php?id=<?php echo $linha['id_equipe'];?>" method="POST" >
                                        <input type="submit" value="Alterar" />    
                                    </form> 
                                </td>

                                <td align="center" width="70">
                                     <form action="../../controller/equipeController.php?action=2&id=<?php echo $linha[ 'id_equipe'];?>" method="POST" >
                                            <input type="submit" value="Excluir" />    
                                     </form> 
                                </td>
                               
                              
             </tr>
                      

          


       <?php } ?>
        </tbody>
    </table>

