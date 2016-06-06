<?php



class Database {

    private $connection;

    function __construct()
    {

        $database = [

            'server'  => 'localhost',
            'user'    => 'root',
            'password'=> '',
            'db'      => 'rejoc'

        ];


        $server   = $database['server'];
        $user     = $database['user'];
        $password = $database['password'];
        $db       = $database['db'];


        $this->connection = mysqli_connect($server,$user,$password,$db);

        if(mysqli_connect_errno($this->connection)){

            echo "Erro de conexão" . $this->connection->error;
            die();

        }

    }

    public function getConnection()
    {
        return $this->connection;
    }

    public function date()
    {
        $now = new Datetime('NOW');
        return $now->format('Y-m-d H:i:s');
    }

} 