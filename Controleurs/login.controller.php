<?php
class login{
   
    function __construct(){
        $base=new Db();
        $db=$base->connect();
        $this->admin=new Admin($db);
    }
    function start(){
        if(isset($_POST["identifiant"]) AND isset($_POST["password"])){
            $admi=$this->admin->isAdmin($_POST["identifiant"],$_POST["password"]);
            if ($admi!=false){
    $_SESSION["id"]=$admi["id"];
                header("location:index.php?page=user");
            }
            else{
                header("location:index.php?page=connexion");
            }

        }
        include("vues/adminConnection.vue.php");
    }
}

?>