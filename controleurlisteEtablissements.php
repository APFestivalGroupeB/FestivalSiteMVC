<?php

$titre="/listeEtablissement";
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
require ('modellisteEtablissements.php');
$lgEtab  = lgEtab($connexion)  ;
ob_start();

 require ('templates/viewlisteEtablissements.php');
 $content = ob_get_clean();
 echo  $content;

?>