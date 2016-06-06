<?php

require_once "../model/pessoaModel.php";

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

        $nome_p        = strip_tags($_POST['nome']);
        $dia_nasc       = strip_tags($_POST['dia']);
        $mes_nasc       = strip_tags($_POST['mes']);
        $id_cidade       = strip_tags($_POST['id_cidade']);
        $id_equipe       = strip_tags($_POST['id_equipe']);



       if($nome_p == null){

           $params = [

               'status' => 0,
               'message' => "O nome &eacute; obrigat&oacute;rio."

           ];

           echo json_encode($params, JSON_UNESCAPED_UNICODE);
           return false;

       }

        if($dia_nasc == null){

            $params = [

                'status' => 0,
                'message' => "O dia &eacute; obrigat&oacute;rio."

            ];

            echo json_encode($params, JSON_UNESCAPED_UNICODE);
            return false;

        }
         if($mes_nasc == null){

            $params = [

                'status' => 0,
                'message' => "O mes &eacute; obrigat&oacute;rio."

            ];

            echo json_encode($params, JSON_UNESCAPED_UNICODE);
            return false;

        }

         if($id_cidade == null){

            $params = [

                'status' => 0,
                'message' => "A cidade &eacute; obrigat&oacute;ria."

            ];

            echo json_encode($params, JSON_UNESCAPED_UNICODE);
            return false;

        }
          if($id_equipe == null){

            $params = [

                'status' => 0,
                'message' => "A equipe &eacute; obrigat&oacute;ria."

            ];

            echo json_encode($params, JSON_UNESCAPED_UNICODE);
            return false;

        }

      


        $pessoa = [
            'nome_pessoa'        => $nome_p,
            'dia_nasc'       => $dia_nasc,
            'mes_nasc'       => $mes_nasc,
            'id_cidade'       => $id_cidade,
            'id_equipe'       => $id_equipe
            
        ];


        $obj = new pessoaModel();
        $obj->adicionar($pessoa);
        header('Location: ../view/pessoa/');
        return true;
    }

    function alterar()
    {
         $nome_p        = strip_tags($_POST['nome']);
        $dia_nasc       = strip_tags($_POST['dia']);
        $mes_nasc       = strip_tags($_POST['mes']);


       if($nome_p == null){

           $params = [

               'status' => 0,
               'message' => "O nome &eacute; obrigat&oacute;rio."

           ];

           echo json_encode($params, JSON_UNESCAPED_UNICODE);
           return false;

       }

        if($dia_nasc == null){

            $params = [

                'status' => 0,
                'message' => "O dia &eacute; obrigat&oacute;rio."

            ];

            echo json_encode($params, JSON_UNESCAPED_UNICODE);
            return false;

        }
         if($mes_nasc == null){

            $params = [

                'status' => 0,
                'message' => "O mes &eacute; obrigat&oacute;rio."

            ];

            echo json_encode($params, JSON_UNESCAPED_UNICODE);
            return false;

        }

      


        $pessoa = [
            'nome_pessoa'        => $nome_p,
            'dia_nasc'       => $dia_nasc
            'mes_nasc'       => $mes_nasc
            
        ];

        $obj = new pessoaModel();
        $obj->alterar($pessoa, $_POST['id']);
         header('Location: ../view/pessoa/');
        return true;
    }

    function remover($id)
    {
        $obj = new equipeModel();
        $obj->remover($id);
         header('Location: ../view/pessoa/');
    }


}

$obj = new pessoaController();
$obj->action($_GET['action']);