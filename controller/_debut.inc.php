<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" 
"http://www.w3.org/TR/html4/loose.dtd">
<!-- TITRE ET MENUS -->
<html lang="fr">
   <head>
      <?php
         echo"<title>Festival$titre</title>";
      ?>
      <meta http-equiv="Content-Language" content="fr">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <link href="../css/cssGeneral.css" rel="stylesheet" type="text/css">
   </head>
   <body class="basePage">

<!--  Tableau contenant le titre -->
      <table width="100%" cellpadding="0" cellspacing="0">
         <tr> 
            <td class="titre">Festival<br>
            <span id="texteNiveau2" class="texteNiveau2">
            H&eacute;bergement des Groupes</span><br>&nbsp;
            </td>
         </tr>
      </table>

<!--  Tableau contenant les menus -->
      <table width="80%" cellpadding="0" cellspacing="0" class="tabMenu" align="center">
         <tr>
            <td class="menu"><a href="../index.php">Accueil</a></td>
            <td class="menu"><a href="../controller/ctrllisteEtablissements.php">
            Gestion établissements</a></td>
            <td class="menu"><a href="../controller/ctrlconsultationAttributions.php">
            Attributions chambres</a></td>
         </tr>
      </table>
      <br>
   </body>
</html>