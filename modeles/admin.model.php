<?php


class Admin{
    private $base;
   function __construct($db){
    $this->base=$db;
}
function isAdmin($identifiant,$Password){
    $verif=$this->base->prepare("SELECT * FROM administrateur WHERE identifiant=:idt AND password=:pass");
    $verif->execute(array(
        "idt"=>$identifiant,
        "pass"=>sha1($Password),
    ));
    $admi=$verif->fetch();
    print_r($admi);
    if(count($admi)!=0){
        return $admi;
    }
    else{ 
        return false;
    }
}


function creer($identifiant,$Password){
    $inserer=$this->base->prepare("INSERT INTO administrateur(identifiant,password) VALUES(:identifiantN,:passwordN)");
    $inserer->execute(array(
        "identifiantN"=>$identifiant,
        "passwordN"=>sha1($Password)
    ));
}


}
?>