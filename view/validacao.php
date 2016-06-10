<?php

// Verifica se houve POST e se o usu�rio ou a senha �(s�o) vazio(s)
if (!empty($_POST) AND (empty($_POST['usuario']) OR empty($_POST['senha']))) {
	header("Location: index.php"); exit;
}

require_once "../model/dataBase.php";
// Tenta se conectar ao servidor MySQL
//mysql_connect('localhost', 'root', '') or trigger_error(mysql_error());
// Tenta se conectar a um banco de dados MySQL
//mysql_select_db('rejoc') or trigger_error(mysql_error());
 $obj = new Database();
$usuario = mysqli_real_escape_string($obj->getConnection(), $_POST['usuario']);
$senha = mysqli_real_escape_string($obj->getConnection(), $_POST['senha']);

// Valida��o do usu�rio/senha digitados
$sql = "SELECT `id`, `nome`, `nivel` FROM `usuarios` WHERE (`usuario` = '". $usuario ."') AND (`senha` = '". sha1($senha) ."') AND (`ativo` = 1) LIMIT 1";
$query = mysqli_query($obj->getConnection(),$sql);
if (mysqli_num_rows($query) != 1) {
	// Mensagem de erro quando os dados s�o inv�lidos e/ou o usu�rio n�o foi encontrado
	echo "Login inv�lido!"; exit;
} else {
	// Salva os dados encontados na vari�vel $resultado
	$resultado = mysqli_fetch_assoc($query);

	// Se a sess�o n�o existir, inicia uma
	if (!isset($_SESSION)) session_start();

	// Salva os dados encontrados na sess�o
	$_SESSION['UsuarioID'] = $resultado['id'];
	$_SESSION['UsuarioNome'] = $resultado['nome'];
	$_SESSION['UsuarioNivel'] = $resultado['nivel'];

	// Redireciona o visitante
	header("Location: ../view/layout/"); exit;
}

?>