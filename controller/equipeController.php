<?php

include "/../model/equipeModel.php";

class equipeController {

    function action($action)
    {
        switch($action){
            case '0':
                $this->adicionar();
                break;
            case '1':
                $this->alterar();
                break;
            case '2':
                $this->remover($_GET['id']);
                break;
            default:
                echo "Erro de Action";
                die();
        }
    }

    function adicionar()
    {
       
        $nome_e        = strip_tags($_POST['nome']);
        $ordem_e       = strip_tags($_POST['ordem']);

        

       if($nome_e == null){

           $params = [

               'status' => 0,
               'message' => "O nome &eacute; obrigat&oacute;rio."

           ];

           echo json_encode($params, JSON_UNESCAPED_UNICODE);
           return false;

       }

        if($ordem_e == null){

            $params = [

                'status' => 0,
                'message' => "A ordem &eacute; obrigat&oacute;ria."

            ];

            echo json_encode($params, JSON_UNESCAPED_UNICODE);
            return false;

        }

      


        $equipe = [
            'nome_equipe'        => $nome_e,
            'ordem_equipe'       => $ordem_e
            
        ];


        $obj = new equipeModel();
        $obj->adicionar($equipe);
        header('Location: ../view/equipe/');
        return ;
    }

    function alterar()
    {
         $nome_e        = strip_tags($_POST['nome']);
        $ordem_e       = strip_tags($_POST['ordem']);


        if($nome_e == null){

            $params = [

                'status' => 0,
                'message' => "O nome &eacute; obrigat&oacute;rio."

            ];

            echo json_encode($params, JSON_UNESCAPED_UNICODE);
            return false;

        }

        if($ordem_e == null){

            $params = [

                'status' => 0,
                'message' => "A ordem &eacute; obrigat&oacute;ria."

            ];

            echo json_encode($params, JSON_UNESCAPED_UNICODE);
            return false;

        }

       


       $equipe = [
            'nome_equipe'        => $nome_e,
            'ordem_equipe'       => $ordem_e
            
        ];


        $obj = new equipeModel();
        $obj->alterar($equipe, $_POST['id']);
         header('Location: ../view/equipe/');
        return true;
    }

    function remover($id)
    {
        $obj = new equipeModel();
        $obj->remover($id);
         header('Location: ../view/equipe/');
    }


}

$obj = new equipeController();
$obj->action($_GET['action']);