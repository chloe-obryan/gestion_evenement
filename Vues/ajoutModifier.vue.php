<?php

?> 
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" type="text/css" media="screen" href="Public/style/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="Public/style/css/style.css" /> 
</head>
    <body>
  
        <div class="container-fluid le-div-general-duform-et-de-l-image">
            <h1 class="le-titre">enregister un nouveau évènement</h1>
                                                                   <!-- Le formulaire -->
                <form action="" method="post" class="formulaire" enctype="multipart/form-data">
                    <div class="row " >
                        <div class="col-6">
                            <img src="Public/images/lion.jpg"   title="Photo illustratif de l'évènement" id="idImage" width="500px"; height="400px";/><br>
                            <input type="file"  name="photo" class="parcourir"   onchange="afficherLaPhoto(this, idImage);" <?php $ajoutmodifier->valu($photo);?>>
                            
                        </div>
                        <div class="col-6 les-champs-du-formulaire">  
                        <input type="text" name="id" hidden <?php $ajoutmodifier->nomEmpty($id);?>>
                            <input type="text" class="form-control les-champs" placeholder="Nom" name="nom"<?php $ajoutmodifier->valu($nom);?> >
                            <input type="text" class="form-control les-champs" placeholder="Types" name="types" <?php $ajoutmodifier->valu($types);?> >
                            <input type="text" class="form-control les-champs" placeholder="Organisateur" name="organisateur"<?php $ajoutmodifier->valu($organisateur);?>>
                            <input type="date" class="form-control les-champs" placeholder="Date de debut" name="dates" <?php $ajoutmodifier->valu($dates);?>>
                            <input type="time" class="form-control les-champs" placeholder="heure" name="heure" <?php $ajoutmodifier->valu($heure);?> >
                            <input type="text" class="form-control les-champs" placeholder="Lieu" name="lieu" <?php $ajoutmodifier->valu($lieu);?>>
                            <textarea name="description" id="" cols="20" rows="3" class="form-control" placeholder="Description de l'évènement" <?php $ajoutmodifier->valu($description);?>></textarea>
                        <div class="row la-classe-de-enregistrer-et-de-annuler">
                        <div class="col bouton-enregistrer">
                            <input class="btn btn-primary Enregistrer" type="submit" name="submit" value="Enregistrer" ></div>
                        <div class="col">
                            <input class="btn btn-primary Annuler" type="reset" name="reset" value="Annuler">
                        </div>
                </form>
            </div>
        </div>
    </div>
                <script src="Public/style/js/admin.js"></script>

    </body>
</html>