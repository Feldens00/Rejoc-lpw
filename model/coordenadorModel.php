<?php


require_once "dataBase.php";


class coordenadorModel {


   

    function adicionar($coordenador)
    {

        $obj = new Database();

        $sqlAdicionar = "INSERT INTO coordenadores
                        (nome_coordenador, numero_rejoc)
                        VALUES
                        ('{$coordenador['nome_coordenador']}','{$coordenador['numero_rejoc']}')";

        mysqli_query($obj->getConnection(), $sqlAdicionar);

    }



   
    function remover($id){

        $obj = new Database();
        $sqlRemover = "DELETE FROM coordenadores WHERE id_coordenador = '$id'";
        mysqli_query($obj->getConnection(), $sqlRemover);

    }

    function numero()
    {

        $obj = new Database();
        $sql = "SELECT numero_rejoc FROM coordenadores ORDER BY numero_rejoc DESC LIMIT 1";
        $result = mysqli_query($obj->getConnection(), $sql);
        return mysqli_fetch_assoc($result);

    }


    function listaTodos ()
    {
        
        $obj = new Database();

        $sqllistaTodos = "SELECT * FROM `coordenadores` WHERE`nome_coordenador` is not null ORDER BY nome_coordenador";
        

        $result = mysqli_query($obj->getConnection(), $sqllistaTodos);

        $pessoaArray = array();

        while($pessoa = mysqli_fetch_assoc($result)){

            $pessoaArray[] = $pessoa;
        }
        return $pessoaArray;

    }


   


   


} 