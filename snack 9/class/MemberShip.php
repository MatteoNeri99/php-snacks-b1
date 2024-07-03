<?php 

require_once __DIR__ . "./Premium.php";


class MemberShip extends PremiunmUser{

    protected $secondName;

    protected function __construct($secondName){

        parent::__construct("membership");

        $this->secondName=$secondName;
        
    }
}