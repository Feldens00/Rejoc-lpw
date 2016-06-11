<?php include "../../view/layout/header.php";


require_once "../../model/coordenadorModel.php";


?>

    <h1>
        Coordenadores
    </h1>

   
    <div class="col-lg-9 ">

        <div class="col-lg-4 col-lg-push-2">
               <a href="adicionar.php"><button type="button" class="btn btn-primary">+ Coordenador</button></a>
        </div>
        
    </div>

   <div class="col-lg-8 col-lg-push-2" style="padding-bottom:300px">    
                 <table style="margin-top:40px" class="table">
                    <thead>
                    <tr>
                        
                        <th>Nome do Coordenador</th>
                        <th>Opções</th>
                
                    </tr>
                    </thead>
                    <tbody>
                    <?php

                    $obj = new coordenadorModel();

                    $coordenadorArray = $obj->listaTodos();

                    foreach($coordenadorArray as $linha){ ?>

                        <tr>
                                    
                                            

                                             <td> <?php print $linha["nome_coordenador"]; ?></td>
                                            
                                             

                                            <td align="center" width="70">
                                                 <form action="../../controller/coordenadorController.php?action=1&id=<?php echo $linha['id_coordenador'];?>" method="POST" >
                                                        <button type="submit" class="btn btn-danger">Excluir</button>     
                                                 </form> 
                                            </td>

                                         
                                          
                         </tr>
                                  

                  

                   <?php } ?>
                    </tbody>
                </table>
     </div>
   
<?php include "../../view/layout/footer.php"; ?>
 