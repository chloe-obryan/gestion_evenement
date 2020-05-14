<?php
//include_once('modeles/evenement.model.php');
class liste{
    private $evenement;

    function __construct(){
        $base=new Db();
        $db=$base->connect();
        $this->evenement=new evenement($db);
    }
    function start(){
        if(isset($_GET['lister'])){

            $evenement=$this->evenement->lister();

            //hh
        include("vues/liste.vue.php");
        }
    }
}
?>