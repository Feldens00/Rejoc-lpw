<?php include "../../view/layout/header.php";
?>
<script type="text/javascript">
    $(document).ready( function() {
  $("#formGrup").validate({
    // Define as regras
    rules:{
     
      grupo:{
        // campoNome será obrigatório (required) e terá tamanho mínimo (minLength)
        required: true, minlength: 2
      },
       dia:{
        // campoNome será obrigatório (required) e terá tamanho mínimo (minLength)
        required: true, minlength: 4
      },
        horario:{
        // campoNome será obrigatório (required) e terá tamanho mínimo (minLength)
        required: true
      },
      endereco:{
        // campoNome será obrigatório (required) e terá tamanho mínimo (minLength)
        required: true, minlength: 4
      }
       
    
    },
    // Define as mensagens de erro para cada regra
    messages:{
    
      grupo:{
        required: "Digite o nome do Grupo",
        minLength: "O nome deve conter, no mínimo, 2 caracteres"
      },

     dia:{
        required: "Digite o dia da Semana",
        minLength: "O dia da semana deve conter, no mínimo, 4 caracteres"
      },

       horario:{
        required: "Escolha o Horario",
        
      },

       endereco:{
        required: "Digite o Endereço",

        minLength: "O dia da semana deve conter, no mínimo, 4 caracteres"
        
      }

      
    }
  });
});
</script>

<h3>Adicionar Pessoa</h3>
     <div class="col-lg-8 col-lg-push-2 centro" style="padding-bottom:150px"> 
            <div  class="content">
                  
                   <b> 
                    
                    
                     <form   align="center" action="../../controller/grupoController.php?action=0"
                         method="post"
                         enctype="multipart/form-data"
                         accept-charset="utf-8"
                         role="form"
                         id="formGrup">
                        
                        <br />
                       
                        
                        <p><label>Nome do Grupo:</label> 
                            <div align="center">
                                <input style="width:500px;" id="#teste" name="grupo"  class="form-control" maxlength="40"  type="text" size="40" maxlength="40" />
                            </div>       
                        </p>

                        <p> 
                            <label>Dia da Semana:</label>
                             <div align="center">
                                 <input style="width:500px;" name="dia" class="form-control"  type="text" size="40" maxlength="40" />
                             </div>       
                         </p>

                        <p> 
                            <label>Horario:</label>
                            <div align="center">
                                <input style="width:100px;" name="horario"  class="form-control" type="time" size="5" maxlength="5" /> 
                            </div>      
                        </p>

                        <p> 
                            <label>Endereço:</label> 
                            <div align="center">
                                <input style="width:500px;" name="endereco"  class="form-control" type="text" size="50" maxlength="50"/>
                            </div> 
                        </p>

                   
                       
                        <p> <button type="submit" class="btn btn-default">Cadastrar</button>  </p>
                        
                     
                    </form>
                    </b>
                   
             </div>
      </div>
     
<?php include "../../view/layout/footer.php"; ?>