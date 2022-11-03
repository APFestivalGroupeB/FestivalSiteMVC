<?php 


$id=$_REQUEST['id'];
$lgEtab=obtenirDetailEtablissement($connexion, $id);
$nom=$lgEtab['nom'];


?>