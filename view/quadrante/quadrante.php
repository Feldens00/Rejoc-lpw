<?php


require_once "../../model/quadranteModel.php";


?>

    <h1>
        Pessoas
    </h1>
    
    <div class="col-lg-9 ">

        <div class="col-lg-4 col-lg-push-2">
              <a href="selecionarQuadrante.php"><button type="button" class="btn btn-primary">Adicionar Pessoas ao Quadrante</button></a>
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
   
    <div class="col-lg-8 col-lg-push-2" style="padding-bottom:300px">   
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

        $obj = new quadranteModel();

        $pessoaArray = $obj->listaTodos();

        foreach($pessoaArray as $linha){ ?>

            <tr>
                        
                                <td> <?php print $linha["id_pessoa"]; ?></td>

                                <td><a href="../../view/quadrante/listaUm.php?id=<?php print $linha['id_pessoa']; ?>">
                                            <?php   echo $linha['nome_pessoa'];?></td></a>
                                 <td> <?php print $linha["nome_equipe"]; ?></td>
                                
                               

                             
                              
             </tr>

       <?php } ?>
        </tbody>
    </table>
    </div>

 