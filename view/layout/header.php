<!DOCTYPE html>
<html lang="en">
<head>
  <title>Rejoc</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../../css/bootstrap.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
   <script src="../../js/jquery.maskedinput.js" type="text/javascript"></script>
   <script src="../../js/jquery.validate.js" type="text/javascript"></script>
   <script>
  
$(document).ready( function() {
  $("#formPes").validate({
    // Define as regras
    rules:{
     id_equipe:{
        // campoNome será obrigatório (required) e terá tamanho mínimo (minLength)
        required: true
      },
      nome:{
        // campoNome será obrigatório (required) e terá tamanho mínimo (minLength)
        required: true, minlength: 2
      },
       estado:{
        // campoNome será obrigatório (required) e terá tamanho mínimo (minLength)
        required: true
      },
       id_cidade:{
        // campoNome será obrigatório (required) e terá tamanho mínimo (minLength)
        required: true
      }
       
    
    },
    // Define as mensagens de erro para cada regra
    messages:{
      id_equipe:{
        required: "Escolha a Equipe"
       
      },
      nome:{
        required: "Digite o nome",
        minLength: "O nome deve conter, no mínimo, 2 caracteres"
      },

       estado:{
        required: "Escolha um Estado"
      
      },
       id_cidade:{
        required: "Escolha uma Cidade"
      }
      
    }
  });
});


$(document).ready( function() {
  $("#formEqui").validate({
    // Define as regras
    rules:{
     
      nome:{
        // campoNome será obrigatório (required) e terá tamanho mínimo (minLength)
        required: true, minlength: 2
      },
       ordem:{
        // campoNome será obrigatório (required) e terá tamanho mínimo (minLength)
        required: true
      }
       
    
    },
    // Define as mensagens de erro para cada regra
    messages:{
    
      nome:{
        required: "Digite o nome da Equipe",
        minLength: "O nome deve conter, no mínimo, 2 caracteres"
      },

       ordem:{
        required: "Digite um valor para a ordem de listagem"
      
      }
      
    }
  });
});






    function buscar_cidades(){
      var estado = $('#estado').val();
      if(estado){
        var url = '../../js/ajax_buscar_cidades.php?estado='+estado;
        $.get(url, function(dataReturn) {
          $('#load_cidades').html(dataReturn);
        });
      }
    }

      function mascara(t, mask){
         var i = t.value.length;
         var saida = mask.substring(1,0);
         var texto = mask.substring(i)
         if (texto.substring(0,1) != saida){
            t.value += texto.substring(0,1);
         }
     }
    </script>


	  <style>
        { font-family: Verdana; font-size: 96%; }
        label { display: block; margin-top: 10px; }
        label.error { float: none; color: red; margin: 0 .5em 0 0; vertical-align: top; font-size: 14px }
        p { clear: both; }
        .submit { margin-top: 1em; }
        em { font-weight: bold; padding-right: 1em; vertical-align: top; }
    </style>
</head>
<body>

<?php

// A sessão precisa ser iniciada em cada página diferente
if (!isset($_SESSION)) session_start();

$nivel_necessario = 2;

// Verifica se não há a variável da sessão que identifica o usuário
if (!isset($_SESSION['UsuarioID']) OR ($_SESSION['UsuarioNivel'] < $nivel_necessario)) {
  // Destrói a sessão por segurança
  session_destroy();
  // Redireciona o visitante de volta pro login
  header('Location: ../'); exit;
}

?>
	
	<div class="navbar navbar-inverse fixed" >
		  <div class="container-fluid">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="#">Rejoc</a>

		    </div>
		    <div class="collapse navbar-collapse">
		      <ul class="nav navbar-nav">
		        <li class="active"><a href="../../view/layout/">Home</a></li>
		       
		       
		         <li class="dropdown">
				            <a class="dropdown-toggle" data-toggle="dropdown" href="#" >Pessoas <span class="caret"></span></a>
				              <ul class="dropdown-menu">
				                <li><a href="../../view/pessoa/">Todas as Pessoas</a></li>
				                <li><a href="../../view/pessoa/adicionar.php">Adicionar uma Pessoa</a></li>
				              </ul>
				 </li>
				
				 <li class="dropdown">
				            <a class="dropdown-toggle" data-toggle="dropdown" href="#" >Equipes <span class="caret"></span></a>
				              <ul class="dropdown-menu">
				                <li><a href="../../view/equipe/">Todas as Equipes</a></li>
				                <li><a href="../../view/equipe/adicionar.php">Adicionar uma Equipe</a></li>
				              </ul>
				 </li>

				  <li class="dropdown">
				            <a class="dropdown-toggle" data-toggle="dropdown" href="#" >Quadrante <span class="caret"></span></a>
				              <ul class="dropdown-menu">
				                <li><a href="../../view/quadrante/">Visualizar o Quadrante</a></li>
				                <li><a href="../../view/quadrante/selecionaQuadrante.php">Adicionar Pessoas ao Quadrante</a></li>
				              </ul>
				  </li>

				  <li class="dropdown">
				            <a class="dropdown-toggle" data-toggle="dropdown" href="#" >Coordenadores e Número do Rejoc<span class="caret"></span></a>
				              <ul class="dropdown-menu">
				                <li><a href="../../view/coordenador/">Todos os Coordenadores</a></li>
				                <li><a href="../../view/coordenador/adicionar.php">Adicionar Coordenador e Número do Rejoc</a></li>
				              </ul>
				  </li>

				   <li class="dropdown">
				            <a class="dropdown-toggle" data-toggle="dropdown" href="#" >Grupos<span class="caret"></span></a>
				              <ul class="dropdown-menu">
				                <li><a href="../../view/grupo/">Todos os Grupos</a></li>
				                <li><a href="../../view/grupo/adicionar.php">Adicionar Grupo</a></li>
				              </ul>
				  </li>

		      </ul>

		     <ul class="nav navbar-nav navbar-right">
          <li>
            <a href="#">Olá, <?php echo $_SESSION['UsuarioNome']; ?></a>
          </li>
        
            <li>
              <a href="../../controller/userController.php?action=1"><span class="glyphicon glyphicon-log-in"></span> Logout</a>
            </li>
          
        </ul>
		    </div><!--/.nav-collapse -->
		  </div>
</div>


		
  <div class="container-fluid">



