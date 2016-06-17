<?php


require_once "dataBase.php";


class quadranteModel {


    function adicionar ($pessoa)
    {
   
        $obj = new Database();
        
    for ($i=0; $i<sizeof($pessoa); $i++) {
    

      // Aqui eu faço a busca dos valores que selecionei
      $sqlSelect = "SELECT id_pessoa, id_equipe, id_estado, id_cidade FROM pessoas WHERE id_pessoa = ' ".$pessoa[$i]." ' ";
      $busca[$i] = mysqli_query($obj->getConnection(),$sqlSelect);

          while ($resultado = mysqli_fetch_array($busca[$i])) {

                  // Aqui faço o insert dos valores que selecionei
                $sqlInsert = "INSERT INTO quadrante
                            (id_pessoa, id_equipe, id_estado, id_cidade)
                            VALUES
                            ('".$resultado['id_pessoa']."', '".$resultado['id_equipe']."', '".$resultado['id_estado']."', '".$resultado['id_cidade']."' )";
                   mysqli_query($obj->getConnection(),$sqlInsert);

          }
      }   

     }

     function listaUm ($id)
    {

        $obj = new Database();
        $sqllistaUm = 'SELECT * FROM pessoas  WHERE id_pessoa = '.$id;
        $result = mysqli_query($obj->getConnection(), $sqllistaUm);
        $linha= mysqli_fetch_assoc($result);

        $array_pessoa = array(
        
            "id_pessoa" => $linha['id_pessoa'],
            "nome_pessoa" => $linha['nome_pessoa']
            
            
        );
        
        return $array_pessoa;
        /*
         * Após os índices criados para o formato jSon, dou um echo no jsonEcode da array acima.
         */
        echo json_encode($array_clientes);

    }
      function equipeQuadrante ($ordem)
    {
        $obj = new Database();
        $sqllistaTodos = 'SELECT * FROM equipes  WHERE ordem_equipe = '.$ordem;
        $result = mysqli_query($obj->getConnection(), $sqllistaTodos);
        $equipeArray = array();
        while($equipe = mysqli_fetch_assoc($result)){
            $equipeArray[] = $equipe;
        }
        return $equipeArray;
    }

       function qtd ($i)
    {
        $obj = new Database();
        $sql = 'SELECT count(id_pessoa) AS qtd_pessoa FROM pessoas WHERE id_equipe =  '.$i;
        $result = mysqli_query($obj->getConnection(), $sql);
         
        return $result;
    }
   
    
     function remover($id){

        $obj = new Database();
        $sqlRemover = "DELETE FROM quadrante WHERE id_pessoa = '$id'";
        mysqli_query($obj->getConnection(), $sqlRemover);

    }

     function removeTodos(){

        $obj = new Database();
        $sqlRemover = "DELETE FROM quadrante";
        mysqli_query($obj->getConnection(), $sqlRemover);

    }



    function todosEquipe($ordem)
    {
        
        $obj = new Database();

        $sqllistaTodos = "SELECT p.id_pessoa, p.nome_pessoa, p.dia_nasc, p.endereco, p.cep, p.fone, p.email, p.bairro, p.mes_nasc, c.nome_cidade, est.uf, eq.nome_equipe FROM quadrante q
            INNER JOIN pessoas p on q.id_pessoa = p.id_pessoa 
            INNER JOIN cidades c on p.id_cidade = c.id_cidade 
            INNER JOIN estados est on p.id_estado = est.id_estado 
            INNER JOIN equipes eq on p.id_equipe = eq.id_equipe WHERE eq.ordem_equipe = '" .$ordem."' ORDER BY p.nome_pessoa ";
        

        $result = mysqli_query($obj->getConnection(), $sqllistaTodos);

        $pessoaArray = array();

        while($pessoa = mysqli_fetch_assoc($result)){

            $pessoaArray[] = $pessoa;
        }
        return $pessoaArray;

    }


    function listaTodos()
    {
        
        $obj = new Database();

        $sqllistaTodos = "SELECT q.id_quadrante, p.id_pessoa, p.nome_pessoa, p.dia_nasc, p.endereco, p.cep, p.fone, p.email, p.bairro, p.mes_nasc, c.nome_cidade, est.uf, eq.nome_equipe FROM quadrante q
            INNER JOIN pessoas p on q.id_pessoa = p.id_pessoa 
            INNER JOIN cidades c on p.id_cidade = c.id_cidade 
            INNER JOIN estados est on p.id_estado = est.id_estado 
            INNER JOIN equipes eq on p.id_equipe = eq.id_equipe ";
        

        $result = mysqli_query($obj->getConnection(), $sqllistaTodos);

        $pessoaArray = array();

        while($pessoa = mysqli_fetch_assoc($result)){

            $pessoaArray[] = $pessoa;
        }
        return $pessoaArray;

    }

     


   


} 