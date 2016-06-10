<?php include "../../view/layout/header.php";
?>

<h3 id="h3_addCoord">Adicionar Coordeenador e Numero do Rejoc</h3>
    <div class="div-add">
        <div  class="content">
      
       <b> 
      
        
         <form   align="center" action="../../controller/coordenadorController.php?action=0"
             method="post"
             enctype="multipart/form-data"
             accept-charset="utf-8"
             role="form"
             id="products_add_form">
            
            <br />
           

            <p> Nome do Coordenador: <input name="nome_coordenador" type="text" size="40" maxlength="40" />      </p>

            <p> Numero do Rejoc: <input name="numero" type="number" size="40" maxlength="40" />      </p>

           

       
           
            <p>  <button type="submit" name="btn_addCoord" id="btn_addCoord" class="btn btn-default">Cadastrar</button> </p>
            
         
        </form>
        </b>
       </div> 
    </div>
 

<?php include "../../view/layout/footer.php"; ?>