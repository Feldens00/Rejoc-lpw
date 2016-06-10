<?php

require_once "../model/grupoModel.php";

class grupoController {

    function action($action)
    {
        switch($action){
            case '0':
                $this->adicionar();
                break;
            case '1':
                $this->remover($_GET['id']);
                break;
           
            default:
                echo "Erro de Action";
                die();
        }
    }

  
   
    function adicionar()
    {

       
        $dia        = strip_tags($_POST['dia']);
        $horario      = strip_tags($_POST['horario']);
        $nome_grupo       = strip_tags($_POST['grupo']);
        $endereco       = strip_tags($_POST['endereco']);
      
       

         $grupo = [
            
            'dia'       => $dia,
            'horario'       => $horario,
            'nome_grupo'       => $nome_grupo,
            'endereco_grupo'    => $endereco,
           
            
            
        ];


        $obj = new grupoModel();
        $obj->adicionar($grupo);
        header('Location: ../view/grupo/');
        return true;
        

     }

      function remover($id)
    {
        $obj = new grupoModel();
        $obj->remover($id);
         header('Location: ../view/grupo/');
    }
   

}

$obj = new grupoController();
$obj->action($_GET['action']);




