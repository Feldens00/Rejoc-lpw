<!DOCTYPE html>
<html lang="en">
<head>
  <title>Rejoc</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../../css/bootstrap.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  

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
	
		<nav class="navbar navbar-inverse fixed">
		  <div class="container-fluid">
		    <div class="navbar-header">
		      <a class="navbar-brand" href="#">Rejoc</a>
		    </div>

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
		       <!-- <div class="circulo">
		          <img src="../../img/icone_rejoc.png">

		     
		        </div>-->
		       
		    
		  </div>
		</nav>
  <div class="container-fluid">



