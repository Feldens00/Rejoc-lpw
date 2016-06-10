
<?php include "header.php";

require_once "../../model/quadranteModel.php";


?>

    <h3 font class= "h3_indexLayout">
        Pessoas que apareceram no Quadrante
    </h3>

    <div  id="btn_indexLayout">
        <meta charset="UTF-8">
        <div class="col-lg-4">
            <a href="../../view/quadrante/selecionaQuadrante.php"><button type="button" class="btn btn-primary">+ Pessoas ao Quadrante</button></a>
           
        </div>
    </div>
            
            <div class="div-centro">
                 
                        
                        <table  class="table table-condensed">
                            <thead>
                                <tr  >
                                    <th width="33%">Nome da pessoa</th>
                                    <th width="33%">Equipe</th>
                                    <th >Opções</th>
                                   
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                              

                                $obj = new quadranteModel();

                                $pessoaArray = $obj->listaTodos();

                                foreach($pessoaArray as $linha){ ?>

                                    <tr>
                                                
                                                        <td ><a  href="../../view/pessoa/listaUm.php?id=<?php print $linha['id_pessoa']; ?>">
                                                                    <?php   echo $linha['nome_pessoa'];?></td></a>
                                                         <td width="33%" > <?php print $linha["nome_equipe"]; ?></td>
                                                        
                                                          <td  width="33%">
                                                             <form action="../../controller/quadranteController.php?action=1&id=<?php echo $linha[ 'id_quadrante'];?>" method="POST" >
                                                                  <button type="submit" class="btn btn-danger">Excluir</button>   
                                                             </form> 
                                                        </td>                  
                                                      
                                     </tr>

                               <?php } ?>
                                </tbody>
                         </table>
       
               
            </div>
   
        
         

  <?php include "footer.php"; ?>

