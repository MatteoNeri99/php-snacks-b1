<?php 


class Utente{
    protected $name;
    protected $password;
    
    public function __construct($name,$password){

        $this->name=$name;
        $this->password=$password;
    }

    public function setName($name){

        $this->name=$name;

    }

    protected function setPassword($password){

        $this->name=$password;

    }

}


$primoUtente= new Utente ("carlo", "password");