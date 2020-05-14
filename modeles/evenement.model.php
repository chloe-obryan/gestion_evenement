<?php
class Evenement{
  private $nom="";
  private $types="";
  private $organisateur="";
  private $dates="";
  private $heure="";
  private $lieu="";
  private $description="";
  private $photo="";

    function __construct($db){
        $this->base=$db;
    }
    function enregistrer($nom,$types,$organisateur,$dates,$heure,$lieu,$description,$photo) 
    {
    $event =$this->base-> prepare('INSERT INTO evenement
    (nom,types,organisateur,dates,heure,lieu,description,photo) VALUES (?,?,?,?,?,?,?,?)'); 
    $event->execute(array(
    "nom"=>$nom,  
    "types"=>$types,
    "organisateur"=>$organisateur,
    "dates"=>$dates,
    "heure"=>$heure,
    "lieu"=>$lieu,
    "description"=>$description,
    "photo"=>$photo
 ));
    }

   function modifier($id,$nom,$types,$organisateur,$dates,$heure,$lieu,$description,$photo)
   {
    $event=$this->base->prepare('UPDATE evenement SET 
    nom=:nom,types=:types,organisateur=:organisateur,dates=:dates,heure=:heure,lieu=:lieu,description=:description,photo=:photo WHERE id = :id');
    $event->execute(array(
    "id"=>$id,
    "nom"=>$nom,  
    "types"=>$types,
    "organisateur"=>$organisateur,
    "dates"=>$dates,
    "heure"=>$heure,
    "lieu"=>$lieu,
    "description"=>$description,
    "photo"=>$photo
));
}
function supprimer($id)
{
$event=$this->base->prepare('DELETE FROM evenement WHERE id = :id');
$event->execute(array(
    "id"=>$id
));
}

function lister()
{
$event=$this->base->query('SELECT * FROM evenement');
$ev=$event->fetchAll();
return $ev;
}

function detail($id)
{
$event=$this->base->prepare('SELECT * FROM evenement WHERE id= :id');
$event->execute(array(
    "id"=>$id
));
return $event->fetch();
}



}
?>