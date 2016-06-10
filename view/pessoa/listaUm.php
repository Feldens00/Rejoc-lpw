<?php include "../../view/layout/header.php";



require_once "../../model/pessoaModel.php";


?>
    <?php $id =  $_GET['id'] ?>
    <h1 id="h1_umPessoa">
        Pessoa
    </h1>

    <div class="div-add">
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
                        <th>Telefone</th>
                        <th>CEP</th>
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
                                            <td> <?php print $linha["cep"]; ?></td>
                                            <td> <?php print $linha["fone"]; ?></td>
                                             <td> <?php print $linha["nome_equipe"]; ?></td>
                                            
                                           
                                           
                                          
                         </tr>
                                  

                  

                   
                    </tbody>
                </table>
    </div>

   

 <?php include "../../view/layout/footer.php"; ?>
