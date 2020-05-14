<?php
//session_start();
class user{
    private $admin;
    private $evenement;

    function __construct(){
        $base=new Db();
        $db=$base->connect();
        $this->admin=new admin($db);
    }

    function start(){
            

            if(isset($_GET['suppr'])) {
                $this->admin->supprimer($_GET['suppr']);
                header("location:index.php?page=user");
            }
            if(isset($_POST['new_pass'])) {
                $this->admin->modifPass($_POST['new_pass'],$_SESSION["id"]);
                header("location:index.php?page=user");
            }
            require('vues/user.vue.php');
    }
}
?>