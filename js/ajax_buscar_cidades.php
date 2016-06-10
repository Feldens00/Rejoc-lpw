<?php
 require_once '../model/dataBase.php';


$obj = new Database();
$estado = $_GET['estado'];
$sql = "SELECT * FROM cidades WHERE id_estado = '$estado' ORDER BY nome_cidade";
$res = mysqli_query($obj->getConnection(),$sql);
$num = mysqli_num_rows($res);
for ($i = 0; $i < $num; $i++) {
  $dados = mysqli_fetch_array($res);
  $arrayCidades[$dados['id_cidade']] = utf8_encode($dados['nome_cidade']);
}
?>

 Cidades:
<select name="id_cidade" id="id_cidade">
  <?php foreach($arrayCidades as $value => $nome){
    echo "<option value='{$value}'>{$nome}</option>";
  }
?>
</select>