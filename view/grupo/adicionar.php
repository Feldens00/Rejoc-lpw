<?php include "../../view/layout/header.php";
?>

<h3 id="h3_addGrupo">Adicionar Pessoa</h3>
     <div class="div-add">
            <div  class="content">
                  
                   <b> 
                    
                    
                     <form   align="center" action="../../controller/grupoController.php?action=0"
                         method="post"
                         enctype="multipart/form-data"
                         accept-charset="utf-8"
                         role="form"
                         id="products_add_form">
                        
                        <br />
                       
                        
                        <p><label>Nome do Grupo:</label> 
                            <div align="center">
                                <input style="width:500px;" id="#teste" name="grupo" class="form-control" type="text" size="40" maxlength="40" />
                            </div>       
                        </p>

                        <p> 
                            <label>Dia da Semana:</label>
                             <div align="center">
                                 <input style="width:500px;" name="dia" class="form-control" type="text" size="40" maxlength="40" />
                             </div>       
                         </p>

                        <p> 
                            <label>Horario:</label>
                            <div align="center">
                                <input style="width:100px;" name="horario" class="form-control" type="time" size="40" maxlength="40" /> 
                            </div>      
                        </p>

                        <p> 
                            <label>Endereço:</label> 
                            <div align="center">
                                <input style="width:500px;" name="endereco" class="form-control" type="text" size="50" maxlength="50"/>
                            </div> 
                        </p>

                   
                       
                        <p> <button type="submit" name="btn_addGrupo" id="btn_addGrupo" class="btn btn-default">Cadastrar</button>  </p>
                        
                     
                    </form>
                    </b>
                   
             </div>
      </div>
     
<?php include "../../view/layout/footer.php"; ?>