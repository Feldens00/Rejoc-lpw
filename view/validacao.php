<?php

// Verifica se houve POST e se o usuсrio ou a senha щ(sуo) vazio(s)
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

// Validaчуo do usuсrio/senha digitados
$sql = "SELECT `id`, `nome`, `nivel` FROM `usuarios` WHERE (`usuario` = '". $usuario ."') AND (`senha` = '". sha1($senha) ."') AND (`ativo` = 1) LIMIT 1";
$query = mysqli_query($obj->getConnection(),$sql);
if (mysqli_num_rows($query) != 1) {
	// Mensagem de erro quando os dados sуo invсlidos e/ou o usuсrio nуo foi encontrado
	echo "Login invсlido!"; exit;
} else {
	// Salva os dados encontados na variсvel $resultado
	$resultado = mysqli_fetch_assoc($query);

	// Se a sessуo nуo existir, inicia uma
	if (!isset($_SESSION)) session_start();

	// Salva os dados encontrados na sessуo
	$_SESSION['UsuarioID'] = $resultado['id'];
	$_SESSION['UsuarioNome'] = $resultado['nome'];
	$_SESSION['UsuarioNivel'] = $resultado['nivel'];

	// Redireciona o visitante
	header("Location: ../view/layout/"); exit;
}

?>