<?php
include_once('modeles/commentaire.model.php');
include_once('modeles/evenement.model.php');
class single{
    private $commentaire;
    private $evenement;
    function __construct(){
        $base=new Db();
        $db=$base->connect();
        $this->commentaire=new commentaire($db);
        $this->evenement=new evenement($db);
    }

    function start(){
        if(isset($_GET['id'])){
            $evenement=$this->evenement->detail($_GET['id']);
            $commentaire=$this->commentaire->getAll($evenement['id']);
            if(isset($_POST['nom']) AND isset($_POST['numero']) AND isset($_POST['contenu'])) {
                $this->commentaire->register($_GET['id'],$_POST['nom'],$_POST['numero'],$_POST['contenu']);
            }
        }
        require('vues/single.vue.php');
    }
}
?>