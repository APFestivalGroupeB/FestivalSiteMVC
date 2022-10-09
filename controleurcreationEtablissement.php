<?php
$titre="/creationEtablissement";
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
$tabCivilite=array("M.","Mme","Melle");  

$action=$_REQUEST['action'];

require ('modellcreationEtablissements.php');
ob_start();


require ('templates/viewcreationEtablissements.php');
$content = ob_get_clean();
echo  $content;
?>