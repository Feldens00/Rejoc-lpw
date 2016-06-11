<?php include "../../view/layout/header.php";
?>

<h3>Adicionar Coordeenador e Numero do Rejoc</h3>
    <div class="col-lg-8 col-lg-push-2 centro" style="padding-bottom:150px"> 
        <div  class="content">
      
       <b> 
      
        
         <form   align="center" action="../../controller/coordenadorController.php?action=0"
             method="post"
             enctype="multipart/form-data"
             accept-charset="utf-8"
             role="form"
             id="products_add_form">
            
            <br />
           

            <p>
                <label>Nome do Coordenador:</label> 
                <div align="center">
                <input name="nome_coordenador"  style="width:500px;" class="form-control" type="text" size="40" maxlength="40" />
                </div>      
            </p>

            <p>
                <label>Numero do Rejoc:</label>
                <div align="center">
                    <input name="numero" type="number" style="width:100px;" class="form-control" size="40" maxlength="40" />
                </div>       
            </p>

           

       
           
            <p>  <button type="submit"  class="btn btn-default">Cadastrar</button> </p>
            
         
        </form>
        </b>
       </div> 
    </div>
 

<?php include "../../view/layout/footer.php"; ?>