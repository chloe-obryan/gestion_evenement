<?php
class ajoutmodifier{
    private $ajouter;
    function __construct() {
        $base= new Db();
        $db= $base->connect();
        $this->ajouter= new Evenement($db);
        }

        function nomEmpty($arg){
            if ($arg!="") {
               echo $arg;
            } 
            
        }

        function valu($arg){
            if ($arg!="") {
               echo 'value="'.$arg.'"';
            } 
            
        }

        function disable($arg){
            
            if ($arg!="") {
                echo 'disabled';
             } 

        }

        function start(){

            $ajoutmodifier=$this;

            $id="";
            $nom="";
            $types="";
            $organisateur="";
            $dates="";
            $heure="";
            $lieu="";
            $description="";
            $photo="";
          
            
            if(isset($_GET['update'])){
                
                $mod=$this->ajouter->detail($_GET['update']);

                $id=$_GET['update'];
                $nom=$mod['nom'];
                $types=$mod['types'];
                $organisateur=$mod['organisateur'];
                $dates=$mod['dates'];
                $heure=$mod['heure'];
                $lieu=$mod['lieu'];
                $description=$mod['description'];
                $photo=$mod['photo'];
                
            }
            if(isset($_POST['nom']) AND  isset($_POST['types']) AND isset($_POST['organisateur']) AND isset($_POST['dates']) AND isset($_POST['heure']) AND isset($_POST['lieu'])AND isset($_POST['description'])AND isset($_POST['photo'])){

                $this->ajouter->modifier($id,$_POST['nom'],$_POST['types'],$_POST['organisateur'],$_POST['dates'],$_POST['heure'],$_POST['lieu'],$_POST['description'],$_POST['photo']);

            }

            if(isset($_POST['nom']) AND  isset($_POST['types']) AND isset($_POST['organisateur']) AND isset($_POST['dates']) AND isset($_POST['heure']) AND isset($_POST['lieu'])AND isset($_POST['description'])AND isset($_POST['photo'])){
                $chemin='imag/'.$_POST['nom'].'image.jpg';
                $this->ajouter->enregistrer($_POST['nom'],$_POST['types'],$_POST['organisateur'],$_POST['dates'],$_POST['heure'],$_POST['lieu'],$_POST['description'],$_POST['photo']);
                move_uploaded_file($_FILES['photo']['tmp_name'],'imag/'.trim($_POST['nom']).'image.jpg');
            }

            include('vues/user.vue.php');
        }
            
             
}

?>