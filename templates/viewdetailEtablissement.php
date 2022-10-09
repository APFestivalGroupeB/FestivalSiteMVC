<table width='80%' cellpadding='0' cellspacing='0' align='center'>
   <tr>
   <td align='center'><a href='index.php'>Accueil ></a> <a href='listeEtablissements.php'> listeEtablissements ></a> detailEtablissement</td>
   </tr>
</table>
<br>

<?php foreach($req as $value): ?>

   <table width='60%' cellspacing='0' cellpadding='0' align='center' 
   class='tabNonQuadrille'>
      
      <tr class='enTeteTabNonQuad'>
         <td colspan='3'><?=$value['nom'] ?></td>
      </tr>
      <tr class='ligneTabNonQuad'>
         <td  width='20%'> id: </td>
         <td><?= $value['id'] ?></td>
      </tr>
      <tr class='ligneTabNonQuad'>
         <td> Adresse: </td>
         <td><?=$value['adresseRue'] ?></td>
      </tr>
      <tr class='ligneTabNonQuad'>
         <td> Code postal: </td>
         <td><?=$value['codePostal'] ?></td>
      </tr>
      <tr class='ligneTabNonQuad'>
         <td> Ville: </td>
         <td><?=$value['ville'] ?></td>
      </tr>
      <tr class='ligneTabNonQuad'>
         <td> Téléphone: </td>
         <td><?=$value['tel'] ?></td>
      </tr>
      <tr class='ligneTabNonQuad'>
         <td> E-mail: </td>
         <td><?=$value['adresseElectronique'] ?></td>
      </tr>
      <tr class='ligneTabNonQuad'>
         <td> Type: </td>
        

         <?php if ($value['type']) : ?>
<td> Etablissement scolaire </td>
<?php else : ?>
<td> Autre établissement </td>
<?php endif ?>

  
        </tr>
      <tr class='ligneTabNonQuad'>
      <td> Responsable: </td>
         <td><?=$value['nomResponsable'] ?> <?=$value['prenomResponsable'] ?>  <?=$value['civiliteResponsable'] ?> </td>
         
      </tr> 
      <tr class='ligneTabNonQuad'>
         <td> Offre: </td>
         <td> <?=$value['nombreChambresOffertes'] ?>&nbsp;chambre(s)</td>
      </tr>

      <?php endforeach  ?> 
   </table>
   <table align='center'>
      <tr>
         <td align='center'><a href='listeEtablissements.php'>Retour</a>
         </td>
      </tr>
   </table>