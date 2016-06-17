<?php include "../../view/layout/header.php";


require_once "../../model/pessoaModel.php";


?>

    <h3>
        Adicionar Pessoas ao Quadrante
    </h3>

   
    <div class="col-lg-8 col-lg-push-2" style="padding-bottom:150px">  

                 <table style="margin-top:40px" class="table">
                <thead>
                <tr>
                    <th>id</th>
                    <th>Nome da pessoa</th>
                    <th>Equipe</th>
                    <th>Quadrante</th>
                </tr>
                </thead>
                <tbody>
                <?php

                $obj = new pessoaModel();

                $pessoaArray = $obj->listaTodos(); ?>
                <form id="form1"  action="../../controller/quadranteController.php?action=0" method="post">
                   <?php foreach($pessoaArray as $linha){ ?> 

                        <tr>
                                   

                                            <td> <?php print $linha["id_pessoa"]; ?></td>

                                            <td><a href="../../view/pessoa/listaUm.php?id=<?php print $linha['id_pessoa']; ?>">
                                                        <?php   echo $linha['nome_pessoa'];?></td></a>
                                             <td> <?php print $linha["nome_equipe"]; ?></td>
                                            
                                            
                                             <td align="center" width="70">
                                                <input type="checkbox" name="selecao[]" value="<?php print $linha["id_pessoa"]; ?>"/>
                                            </td>
                                        
                                            
                                           
                                           
                                          
                         </tr>
                                  

                  

                   <?php } ?>
                   <button type="submit" align="center" class="btn btn-default">Cadastrar</button>
                    <div class="col-lg-5 ">

                        <div  class="col-lg-4 ">
                              <a href="../../controller/quadranteController.php?action=2"><button type="button" class="btn btn-primary">Limpar Quadrante</button></a>
                        </div>
                       
                    </div>
    
                </form>

                </tbody>
            </table>
    </div>
   

 <?php include "../../view/layout/footer.php"; ?>