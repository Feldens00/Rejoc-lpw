
<?php include "header.php";

require_once "../../model/quadranteModel.php";


?>

    <h3>
        Pessoas que apareceram no Quadrante
    </h3>
    
    <div class="col-lg-9 ">

        <div class="col-lg-4 col-lg-push-2">
              <a href="../../view/quadrante/selecionaQuadrante.php"><button type="button" class="btn btn-primary">+ Pessoas ao Quadrante</button></a>
        </div>
       
    </div>
    
            
             <div class="col-lg-8 col-lg-push-2" style="padding-bottom:150px">  
                 
                        
                        <table  class="table table-condensed">
                            <thead>
                                <tr  >
                                    <th width="33%">Nome da pessoa</th>
                                    <th width="33%">Equipe</th>
                                    <th >Opções</th>
                                   
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                              

                                $obj = new quadranteModel();

                                $pessoaArray = $obj->listaTodos();

                                foreach($pessoaArray as $linha){ ?>

                                    <tr>
                                                
                                                        <td ><a  href="../../view/pessoa/listaUm.php?id=<?php print $linha['id_pessoa']; ?>">
                                                                    <?php   echo $linha['nome_pessoa'];?></td></a>
                                                         <td width="33%" > <?php print $linha["nome_equipe"]; ?></td>
                                                        
                                                          <td  width="33%">
                                                                
                                                                  <button type="submit" class="btn btn-danger delete" data-id="<?php echo $linha['id_pessoa']?>" data-nome="<?php echo $linha['nome_pessoa']?>">Excluir</button>     
                                                               
                                                             
                                                        </td>                  
                                                      
                                     </tr>

                               <?php } ?>
                                </tbody>
                         </table>
                        
            </div>


              <div id="deletePeople" class="modal fade">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      <h4 class="modal-title">Modal title</h4>
                    </div>
                    <div class="modal-body">
                       <p><strong>Realmente deseja apagar o cadastro?</strong><label id="nomeTxt"></label></p>
                    </div>
                    <div class="modal-footer">
                     
                        <a id="hreft" href="" ><button type="submit" class="btn btn-primary">Sim</button></a>
                    
                    
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
                  
                    </div>
                  </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
              </div><!-- /.modal -->


   
  <script>
function myFunction(id) {
   document.write(id);
    nome = "<?php echo $linha['nome_pessoa'] ?>";
   op=confirm("Deseja deletar"+nome);
   if (op){
    alert(id);
   window.location = "../../controller/pessoaController.php?action=2&id="+id;
  } 

}

function showDetails(pessoa) {
    var pessoaType = pessoa.getAttribute("data-animal-type");
    alert("Deseja deletar " + pessoa.innerHTML + " is a " + animalType + ".");
    
}

$('.delete').click(function(){
    nome = $(this).data('nome');
    $('#nomeTxt').text(nome);

     
    id = $(this).data('id');

    $('#idDel').text(id);
    document.getElementById('hreft').href="../../controller/quadrantecontroller.php?action=1&id="+ id;
    $('#deletePeople').modal('show');

});



  

</script>      
         

  <?php include "footer.php"; ?>

