<?php


require_once "dataBase.php";


class pessoaModel {


    function adicionar ($pessoa)
    {

        $obj = new Database();

        $sqlAdicionar = "INSERT INTO pessoas
                        (id_equipe, id_estado, id_cidade, nome_pessoa, dia_nasc, endereco, cep, fone, email, bairro, mes_nasc)
                        VALUES
                        ('{$pessoa['id_equipe']}','{$pessoa['id_estado']}','{$pessoa['id_cidade']}','{$pessoa['nome_pessoa']}','{$pessoa['dia_nasc']}','{$pessoa['endereco']}','{$pessoa['cep']}','{$pessoa['fone']}','{$pessoa['email']}','{$pessoa['bairro']}','{$pessoa['mes_nasc']}')";

        mysqli_query($obj->getConnection(), $sqlAdicionar);

    }

    function alterar ($pessoa,$id)
    {
        $obj = new Database();

        $sqlAlterar = "UPDATE pessoas SET
                      id_equipe        = '{$pessoa['id_equipe']}',
                      id_estado        = '{$pessoa['id_estado']}',
                      id_cidade        = '{$pessoa['id_cidade']}',
                      nome_pessoa        = '{$pessoa['nome_pessoa']}',
                      dia_nasc        = '{$pessoa['dia_nasc']}',
                      endereco        = '{$pessoa['endereco']}',
                      cep        = '{$pessoa['cep']}',
                      fone        = '{$pessoa['fone']}',
                      email        = '{$pessoa['email']}',
                      bairro        = '{$pessoa['bairro']}',
                      mes_nasc        = '{$pessoa['mes_nasc']}',
                      WHERE id_pessoa = '$id'";
        mysqli_query($obj->getConnection(), $sqlAlterar);
    }

    function remover($id){

        $obj = new Database();
        $sqlRemover = "DELETE FROM pessoas WHERE id_pessoa = '$id'";
        mysqli_query($obj->getConnection(), $sqlRemover);

    }

    function pesquisar($pesq)
    {
        $obj = new Database();

        $sqlGet = "SELECT * FROM pessoas WHERE nome_pessoa LIKE '%$pesq%' ORDER BY id_pessoa ASC";

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
        $sqllistaUm = 'SELECT p.id_pessoa, p.nome_pessoa, p.dia_nasc, p.endereco, p.cep, p.fone, p.email, p.bairro, p.mes_nasc, c.nome_cidade, est.uf, eq.nome_equipe FROM pessoas p 
            INNER JOIN cidades c on p.id_cidade = c.id_cidade 
            INNER JOIN estados est on p.id_estado = est.id_estado 
            INNER JOIN equipes eq on p.id_equipe = eq.id_equipe WHERE id_pessoa = "$id";';
        $result = mysqli_query($obj->getConnection(), $sqllistaUm);
        return mysqli_fetch_assoc($result);

    }

    function listaTodos ()
    {
        $obj = new Database();

        $sqllistaTodos = 'SELECT p.id_pessoa, p.nome_pessoa, p.dia_nasc, p.endereco, p.cep, p.fone, p.email, p.bairro, p.mes_nasc, c.nome_cidade, est.uf, eq.nome_equipe FROM pessoas p 
            INNER JOIN cidades c on p.id_cidade = c.id_cidade 
            INNER JOIN estados est on p.id_estado = est.id_estado 
            INNER JOIN equipes eq on p.id_equipe = eq.id_equipe';
        

        $result = mysqli_query($obj->getConnection(), $sqllistaTodos);

        $pessoaArray = array();

        while($pessoa = mysqli_fetch_assoc($result)){

            $pessoaArray[] = $pessoa;
        }
        return $pessoaArray;

    }

    function cidade_estado ()
    {
        $obj = new Database();

      $sqlCidade = 'SELECT c.id_cidade, c.nome_cidade, e.id_estado, e.uf  
                        FROM cidades c
                        INNER JOIN estados e on c.id_estado = e.id_estado;';

        $result = mysqli_query($obj->getConnection(), $sqlCidade);

        $cidadeArray = array();

        while($cidade = mysqli_fetch_assoc($result)){

            $cidadeArray[] = $cidade;
        }
        return $cidadeArray;

    }
} 