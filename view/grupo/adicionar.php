<?php include "../../view/layout/header.php";
?>

<h3>Adicionar Pessoa</h3>
     <div class="col-lg-8 col-lg-push-2 centro" style="padding-bottom:150px"> 
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
                                <input style="width:500px;" id="#teste" name="grupo" value="Nome do Grupo" class="form-control" type="text" size="40" maxlength="40" />
                            </div>       
                        </p>

                        <p> 
                            <label>Dia da Semana:</label>
                             <div align="center">
                                 <input style="width:500px;" name="dia" class="form-control" value="Ex segunda feira..." type="text" size="40" maxlength="40" />
                             </div>       
                         </p>

                        <p> 
                            <label>Horario:</label>
                            <div align="center">
                                <input style="width:100px;" name="horario"  class="form-control" type="time" size="40" maxlength="40" /> 
                            </div>      
                        </p>

                        <p> 
                            <label>Endereço:</label> 
                            <div align="center">
                                <input style="width:500px;" name="endereco" value="Endereco" class="form-control" type="text" size="50" maxlength="50"/>
                            </div> 
                        </p>

                   
                       
                        <p> <button type="submit" class="btn btn-default">Cadastrar</button>  </p>
                        
                     
                    </form>
                    </b>
                   
             </div>
      </div>
     
<?php include "../../view/layout/footer.php"; ?>