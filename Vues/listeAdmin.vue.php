
<!DOCTYPE html>
<html>
<?php
include('header.php');
?>
<body>
<table class="table table-bordered table-striped">
<tr class="ligne">
<td>Nom</td>
<td>types</td>
<td>organisateur</td>
<td>Dates</td>
<td>heure</td>
<td>lieu</td>
<td>Description</td>
<td>Option</td>
</tr>
<?php
foreach ($event as $key) {
    ?>

<tr class="ligne">
<td>
<?php
echo $key['nom'];
?>
</td>
<td>
<?php
echo $key['types'];
?>
</td>

<td>
<?php
echo $key['organisateur'];
?>
<td>
<?php
echo $key['dates'];
?>
</td>

<td>
<?php
echo $key['heure'];
?>
<td>
<?php
echo $key['lieu'];
?>
<td>
<?php
echo $key['description'];
?>
</td>


</td>

<td>
<a class="btn btn-danger" href="?page=listeAdmin&suppr=<?php echo $key['id'];
?>">Supprimer</a>
<a class="btn btn-success" href="?page=ajoutmodifier&update=<?php echo $key['id'];
?>">Modifier</a>
</td>
</tr>
<?php
}
?>
</table>
</body>
</html>