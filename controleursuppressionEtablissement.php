<?php
$titre="/supprressionEtablissement";
include("_debut.inc.php");
include("_gestionBase.inc.php"); 
include("_controlesEtGestionErreurs.inc.php");

$connexion=connect();
if (!$connexion)
{
   ajouterErreur("Echec de la connexion au serveur MySql");
   afficherErreurs();
   exit();
}

$id=$_REQUEST['idEtab'];  
$lgEtab=obtenirDetailEtablissement($connexion, $id);
ob_start();
require ('templates/viewsuppressionEtablissement.php');


$content = ob_get_clean();
echo  $content;
?>