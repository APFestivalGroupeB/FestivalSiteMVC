<?php
$connexion=connect();
if (!$connexion)
{
   ajouterErreur("Echec de la connexion au serveur MySql");
   afficherErreurs();
   exit();
}
require ('modellisteEtablissements.php');
var_dump(lgEtab());exit;
require ('viewlisteEtablissements.php');
?>