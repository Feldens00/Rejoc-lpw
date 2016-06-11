<?php

require_once "../model/coordenadorModel.php";

class coordenadorController {

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

     
        $numero      = strip_tags($_POST['numero']);
        $nome_coordenador       = strip_tags($_POST['nome_coordenador']);
        
             if($nome_coordenador == null){

           $params = [

               /*'status' => 0,
               'message' =>*/ "O nome &eacute; obrigat&oacute;rio."

           ];

           echo json_encode($params, JSON_UNESCAPED_UNICODE);
           return false;

       }

         $coordenador = [
            
           
            'nome_coordenador'       => $nome_coordenador,
            'numero_rejoc'    => $numero,

        ];


        $obj = new coordenadorModel();
        $obj->adicionar($coordenador);
        header('Location: ../view/coordenador/');
        return true;
        

     }

      function remover($id)
    {
        $obj = new coordenadorModel();
        $obj->remover($id);
         header('Location: ../view/coordenador/');
    }
   

}

$obj = new coordenadorController();
$obj->action($_GET['action']);




