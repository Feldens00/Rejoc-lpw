

<h3>Adicionar Pessoa</h3>
 <div  class="content">
  
   <b> 
    <p align="center"> .....CADASTROS.... </p>
    <br />
    
     <form    action="../../controller/pessoaController.php?action=0"
         method="post"
         enctype="multipart/form-data"
         accept-charset="utf-8"
         role="form"
         id="products_add_form">
        <p align="center"> Pessoas </p>
        <br />
        <p> Equipe: <select name="sel_equipe">
 
                            <?php

                                include '../../model/equipeModel.php';
                                $obj = new equipeModel();

                                $equipeArray = $obj->listaTodos();
                              
                               
                                print ('<option value="0" >Selecione a Equipe...</option>');
                                foreach ($equipeArray as $linha) 
                                {
                                    $id_equipe=$linha["id_equipe"];
                                    $nome_equipe=$linha["nome_equipe"];
                                    print ("<option value=$id_equipe >$nome_equipe</option>");
                                }
                            ?>
                    </select> 
        *</p> 


        <p> Nome: <input name="txt_nome" type="text" size="40" maxlength="40" />*      </p>

        <p>Data de Nascimento: 
        <input name="txt_dia" type="text" size="2" maxlength="2" /> m&ecirc;s  
        <input name="txt_mes" type="text" size="2" maxlength="2" />

        </p>

    <p> Endere&ccedil;o: <input name="txt_end" type="text" size="50" maxlength="50"/> </p>

    <p> Bairro: <input type="text" name="txt_bairro" maxlength="22" size="30" />

     CEP: <input type="text" name="cep5" maxlength="5" size="5" />-<input type="text" name="cep3" maxlength="3" size="3" /> </p>
        
        <p> Cidade: <select name="sel_cidade">
 
                        <?php
                            include '../../model/pessoaModel.php';
                             $obj = new pessoaModel();

                                $cidadeArray = $obj->cidade_estado();
                                
                               
                                print ('<option value="0" >Selecione a Cidade...</option>');
                                foreach ($cidadeArray as $linha) 
                                {
                                    $id_cidade=$linha["id_cidade"];
                                    $nome_cidade=$linha["nome_cidade"];
                                    print ("<option value=$id_cidade>$nome_cidade</option>");
                                }
                       
                            ?>
                    </select> 
     </p>
      <p> Telefone: (<input type="text" name="ddd" maxlength="2" size="2" />) <input type="text" name="fone" maxlength="40" size="40" /> </p>
      <p> E-mail: <input type="text" name="txt_email" maxlength="45" size="45" /> </p>
      

       
        <p> <input type="submit" value="CADASTRAR" /> <input type="reset" value="LIMPAR" /> </p>
        
     
    </form>
    </b>
   
    <!-- end .content --></div>