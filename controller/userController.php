<?php


require_once "../model/dataBase.php";

class userController {

    function action($action)
    {
        switch($action){
            case '0':
                $this->checkUser();
                break;
            case '1':
                $this->logout();
                break;
           
            default:
                echo "Erro de Action";
                die();
        }
    }

  
   
      function checkUser()
    {

       
        

         $obj = new Database();
        $usuario = mysqli_real_escape_string($obj->getConnection(), $_POST['usuario']);
        $senha = mysqli_real_escape_string($obj->getConnection(), $_POST['senha']);

        // Validação do usuário/senha digitados
        $sql = "SELECT `id`, `nome`, `nivel` FROM `usuarios` WHERE (`usuario` = '". $usuario ."') AND (`senha` = '". sha1($senha) ."') AND (`ativo` = 1) LIMIT 1";
        $query = mysqli_query($obj->getConnection(),$sql);
        if (mysqli_num_rows($query) != 1) {
            // Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado
            echo "Login incorreto!"; exit;
        } else {
            // Salva os dados encontados na variável $resultado
            $resultado = mysqli_fetch_assoc($query);

            // Se a sessão não existir, inicia uma
            if (!isset($_SESSION)) session_start();

            // Salva os dados encontrados na sessão
            $_SESSION['UsuarioID'] = $resultado['id'];
            $_SESSION['UsuarioNome'] = $resultado['nome'];
            $_SESSION['UsuarioNivel'] = $resultado['nivel'];

            // Redireciona o visitante
            header("Location: ../view/layout/"); exit;
        }
        

     }

      function logout()
    {
        session_start(); // Inicia a sessão
        session_destroy(); // Destrói a sessão limpando todos os valores salvos
        header("Location: ../view/layout/"); exit; 
    }
   

}

$obj = new userController();
$obj->action($_GET['action']);


