
<?php include "../../view/layout/header.php";
 

require_once "../../model/equipeModel.php";


?>

   <h1>
        Equipes
    </h1>
    <div class="col-lg-9 ">

        <div class="col-lg-4 col-lg-push-2">
              <a href="adicionar.php"><button type="button" class="btn btn-primary">+ Equipe</button></a>
        </div>
        <div class="col-lg-8 col-lg-push-4 col-sm-5">
            <form action="pesquisa.php" method="post">
                <div class="col-lg-8">
                    <input type="text"
                           class="form-control"
                           name="equipe_pesq" />
                           
                </div>  
            </form>
        </div>
    </div>
   

   
     <div class="col-lg-8 col-lg-push-2" style="padding-bottom:150px">  
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
                                                 <button type="submit" class="btn btn-warning">Alterar</button>   
                                            </form> 
                                        </td>

                                        <td align="center" width="70">
                                             <form action="../../controller/equipeController.php?action=2&id=<?php echo $linha[ 'id_equipe'];?>" method="POST" >
                                                    <button type="submit" class="btn btn-danger">Excluir</button>   
                                             </form> 
                                        </td>
                                       
                                      
                     </tr>
                              

                 


               <?php } ?>
                </tbody>
            </table>
        </div>
<?php include "../../view/layout/footer.php"; ?>
 