<?php include "../../view/layout/header.php";


require_once "../../model/grupoModel.php";


?>

    <h1 id="h1_indexGrupo">
        Pessoas
    </h1>

    <div id="btn_indexGrupo">
        <meta charset="UTF-8">
        <div class="col-lg-4">
            <a href="adicionar.php"><button type="button" class="btn btn-primary">+ Grupo</button></a>
        </div>
       
    </div>

    <div class="div-centro"> 
             <table style="margin-top:40px" class="table">
                <thead>
                <tr>
                    
                    <th>Nome do Grupo</th>
                    <th>Endereco</th>
                    <th>Dia</th>
                    <th>Horario</th>
                    <th>Opções</th>
                    
                </tr>
                </thead>
                <tbody>
                <?php

                $obj = new grupoModel();

                $grupoArray = $obj->listaTodos();

                foreach($grupoArray as $linha){ ?>

                    <tr>
                                
                                        <td> <?php print $linha["nome_grupo"]; ?></td>
                                        <td> <?php print $linha["endereco_grupo"]; ?></td>
                                        <td> <?php print $linha["dia"]; ?></td>
                                        <td> <?php print $linha["horario"]; ?></td>
                                        

                                        <td align="center" width="70">
                                             <form action="../../controller/grupoController.php?action=1&id=<?php echo $linha['id_grupo'];?>" method="POST" >
                                                     <button type="submit" class="btn btn-danger">Excluir</button>    
                                             </form> 
                                        </td>

                                     
                                      
                     </tr>
                              

              

               <?php } ?>
                </tbody>
            </table>
    </div>
   
<?php include "../../view/layout/footer.php"; ?>
 