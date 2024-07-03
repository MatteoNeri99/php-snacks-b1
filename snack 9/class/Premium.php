<?php 

require_once __DIR__ . "./Utente.php";
require_once __DIR__ . "./Membership.php";

class PremiunmUser extends Utente{

    protected $membership;

    protected function __construct($membership){

        parent::__construct("fabio","password");
        $this->membership=$membership;
    }

    protected function getMembership($membership){
        return $this->membership=$membership;
    }

    protected function setMembership($membership){

        $this->membership=$membership;

    }

}


$primoUtente= new PremiunmUser($primoMembership);

