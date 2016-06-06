<?php


require_once "dataBase.php";


class equipeModel {


    function adicionar ($equipe)
    {

        $obj = new Database();

        $sqlAdicionar = "INSERT INTO equipes
                        (nome_equipe, ordem_equipe)
                        VALUES
                        ('{$equipe['nome_equipe']}','{$equipe['ordem_equipe']}')";

        mysqli_query($obj->getConnection(), $sqlAdicionar);

    }

    function alterar ($equipe,$id)
    {
        $obj = new Database();

        $sqlAlterar = "UPDATE equipes SET
                      nome_equipe        = '{$equipe['nome_equipe']}',
                      ordem_equipe      = '{$equipe['ordem_equipe']}'
                    WHERE id_equipe = '$id'";
        mysqli_query($obj->getConnection(), $sqlAlterar);
    }

    function remover($id){

        $obj = new Database();
        $sqlRemover = "DELETE FROM equipes WHERE id_equipe = '$id'";
        mysqli_query($obj->getConnection(), $sqlRemover);

    }

    function pesquisar($pesq)
    {
        $obj = new Database();

        $sqlGet = "SELECT * FROM equipes WHERE nome_equipe LIKE '%$pesq%' ORDER BY id_equipe ASC";

        $result = mysqli_query($obj->getConnection(), $sqlGet);

        $equipeArray = array();

        while($equipe = mysqli_fetch_assoc($result)){

            $equipeArray[] = $equipe;
        }
        return $equipeArray;
    }

    function listaUm ($id)
    {

        $obj = new Database();
        $sqllistaUm = "SELECT * FROM equipes WHERE id_equipe = '$id'";
        $result = mysqli_query($obj->getConnection(), $sqllistaUm);
        return mysqli_fetch_assoc($result);

    }

    function listaTodos ()
    {
        $obj = new Database();

        $sqllistaTodos = 'SELECT * FROM equipes';

        $result = mysqli_query($obj->getConnection(), $sqllistaTodos);

        $equipeArray = array();

        while($equipe = mysqli_fetch_assoc($result)){

            $equipeArray[] = $equipe;
        }
        return $equipeArray;

    }
} 