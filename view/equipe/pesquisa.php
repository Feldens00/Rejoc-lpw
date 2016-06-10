
<?php


require_once "../../model/equipeModel.php";


?>

    <h1>
        Equipes
    </h1>

   

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
        $equipeArray = $obj->pesquisar($_POST['equipe_pesq']);
        

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
                      

           <!-- echo '<tr>';
            echo '<td>' . $equipe['id_equipe'] . '</td>';
            echo '<td>' . $equipe['nome_equipe'] . '</td>';
            echo '<td>' . $equipe['ordem_equipe'] . '</td>';
            echo '<td>';
            echo '<a  type="submit" href="alterar.php&id='. $equipe['id_equipe'] .'"> </a>';
           
            echo '</td>';
            echo '</tr>';-->


       <?php } ?>
        </tbody>
    </table>

 <!--echo ' <a class="btn btn-danger" type="submit" href="./.../Controller/equipeController.php?action=2&id='. $equipe['id_equipe'] .'" onclick="excluir_registro( event );" ><span class="glyphicon glyphicon-trash"></span></a>';-->
