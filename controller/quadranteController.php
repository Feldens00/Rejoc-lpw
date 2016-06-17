<?php 
error_reporting(0);

require_once "../model/quadranteModel.php";

class quadranteController {

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
        $obj = new Database();
        $pessoa      = $_POST['selecao'];
        
           if($pessoa == null){

           $params = [

               /*'status' => 0,
               'message' =>*/ "Ao menos uma  pessoa &eacute; obrigat&oacute;rio."

           ];

           echo json_encode($params, JSON_UNESCAPED_UNICODE);
           return false;

       }

        $obj = new quadranteModel();
        $obj->adicionar($pessoa);
        header('Location: ../view/layout/');
        return true;
    }

   
    function remover($id)
    {   
        $obj = new quadranteModel();
        $obj->remover($id);
        header('Location: ../view/layout/');
    }

     function removeTodos()
    {
        $obj = new quadranteModel();
        $obj->removeTodos();
         header('Location: ../view/layout/');
    }

   

}

$obj = new quadranteController();
$obj->action($_GET['action']);




