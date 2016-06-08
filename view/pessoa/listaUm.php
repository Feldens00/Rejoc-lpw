<?php


require_once "../../model/pessoaModel.php";


?>
    <?php $id =  $_GET['id'] ?>
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
            <th>Endereço</th>
            <th>Bairro</th>
            <th>Data</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>Email</th>
            <th>Equipe</th>
           
        </tr>
        </thead>
        <tbody>
        <?php
        
        $obj = new pessoaModel();
        
        $linha = $obj->listaUm($id);
    

         ?>

            <tr>
                        
                               <td> <?php print $linha["id_pessoa"]; ?></td>
                                <td> <?php print $linha["nome_pessoa"]; ?></td>
                                <td> <?php print $linha["endereco"]; ?></td>
                                <td> <?php print $linha["bairro"]; ?></td>
                                <td> <?php print $linha["dia_nasc"]; ?>/<?php print $linha["mes_nasc"]; ?></td>
                                <td> <?php print $linha["nome_cidade"]; ?></td>
                                <td> <?php print $linha["uf"]; ?></td>
                                <td> <?php print $linha["email"]; ?></td>
                                <td> <?php print $linha["fone"]; ?></td>
                                 <td> <?php print $linha["nome_equipe"]; ?></td>
                                
                               
                               
                              
             </tr>
                      

      

       
        </tbody>
    </table>

 
