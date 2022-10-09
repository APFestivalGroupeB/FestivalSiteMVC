<?php
function lgEtab($connexion){
$req=obtenirReqEtablissements();
$rsEtab=$connexion->query($req);
return $rsEtab->fetchAll();
}
?>

