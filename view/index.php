
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Rejoc</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="../img/rejoc1.jpg" alt="Chania">
    </div>

    <div class="item">
      <img src="../img/rejoc2.jpg" alt="Chania">
    </div>

    <div class="item">
      <img src="../img/rejoc3.jpg" alt="Chania">
    </div>

    <div class="item">
      <img src="../img/rejoc4.jpg" alt="Flower">
    </div>

   
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div  align="center"   class="modal-body">
    <br>
    <br>
    <button align="center" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Login</button>
    <br>
    <br>
    <br>
    <br>
    <p>
    <p>
        <label> Programa para Cadastro de pessoas e equipes, alem de gerar o quadrante do Rejoc!</label>
    </p>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
        <label> Desenvolvido por:</label>
    <p>
        <img src="../img/feldensCorp.jpg" alt="1" class="img-circle">
       
    </p>

  
</div>



  <!-- Trigger the modal with a button -->
  

   
    
  <!-- Modal -->
      <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
        
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Dados para Login</h4>
            </div>
            <div class="modal-body">
                <form  id="formLogin" action="../controller/userController.php?action=0" method="post">
               
                
                    <label for="txUsuario">Usuário</label>
                    <input type="text"  class="form-control" name="usuario" id="usuario" maxlength="25" />
                    <label for="txSenha">Senha</label>
                    <input type="password" class="form-control"  name="senha" id="senha" />
                  
                    <button type="submit" class="btn btn-default">Entrar</button>
                
                </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
            </div>
          </div>
          
        </div>
      </div>
      
    </div>

</body>
</html>

