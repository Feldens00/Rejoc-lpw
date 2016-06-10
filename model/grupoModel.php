<?php


require_once "dataBase.php";


class grupoModel {


   

    function adicionar($grupo)
    {

        $obj = new Database();

        $sqlAdicionar = "INSERT INTO grupos
                        (endereco_grupo, horario, nome_grupo, dia)
                        VALUES
                        ('{$grupo['endereco_grupo']}','{$grupo['horario']}','{$grupo['nome_grupo']}','{$grupo['dia']}')";

        mysqli_query($obj->getConnection(), $sqlAdicionar);

    }
         
         

   
    function remover($id){

        $obj = new Database();
        $sqlRemover = "DELETE FROM grupos WHERE id_grupo = '$id'";
        mysqli_query($obj->getConnection(), $sqlRemover);

    }



  
     function listaTodos()
    {
        
        $obj = new Database();

        $sql = "SELECT * FROM grupos g ";
        

        $result = mysqli_query($obj->getConnection(), $sql);

        $grupoArray = array();

        while($grupo= mysqli_fetch_assoc($result)){

            $grupoArray[] = $grupo;
        }
        return $grupoArray;

    }


   


   


} 