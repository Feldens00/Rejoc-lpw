<?php

require_once "../model/quadranteModel.php";

class quadranteController {

    function action($action)
    {
        switch($action){
            case '0':
                $this->adicionar();
                break;
            case '1':
                $this->alterar();
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
        


        $obj = new quadranteModel();
        $obj->adicionar($pessoa);
        header('Location: ../view/quadrante/');
        return true;
    }

   
    function remover($id)
    {
        $obj = new pessoaModel();
        $obj->remover($id);
         header('Location: ../view/pessoa/');
    }

   

}

$obj = new quadranteController();
$obj->action($_GET['action']);




