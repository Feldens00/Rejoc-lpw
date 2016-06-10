<?php

class loginModel {

    var $result;

    public function checkLogin($name_login){

        $Oconn = new Database();
        $sql = 'SELECT * FROM login WHERE user="' . $name_login .'"';
        $Oconn = $Oconn->getConnection();
        $this->result = $Oconn->query($sql);
    }

    public function getLogin(){

        return $this->result;
    }
} 