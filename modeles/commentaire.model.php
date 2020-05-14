<?php

  class commentaire{
      
    private $base;
    function __construct($db){
        $this->base=$db;
    }

      function getAll($id){
          $select= $this->base->prepare('SELECT * FROM commentaire WHERE eve_id=:id');
          $select->execute(array("id"=>$id));
          $commentaire=$select->fetchAll();
          return $commentaire;
      }

      function register($id,$nom,$numero,$contenu){
        echo $id.'--'.$nom.'--'.$numero.'--'.$contenu;
        echo date('d/m/Y à H:i:s');
        $inser= $this->base->prepare('INSERT INTO commentaire(eve_id,nom,numero,contenu,datePub ) VALUES(:eve_id, :nom, :numero, :contenu,:datePub)');
        $inser->execute(array(
          'eve_id'=>$id,
          'nom'=>$nom,
          'numero'=>$numero,
          'contenu'=>$contenu,
          'datePub'=>date('d/m/Y à H:i:s')
        ));
      }
  }
?>