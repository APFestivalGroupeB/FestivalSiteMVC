<?php
$titre="/detailEtablissement";
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
   $req  = obtenirDetailEtablissement($connexion, $id) ;
  
   ob_start();
   require ('templates/viewdetailEtablissement.php');
   $content = ob_get_clean();
   echo  $content;
  ?>