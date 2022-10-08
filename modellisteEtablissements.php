


<?php
echo "chargé!";exit;
function lgEtab(){
    $req=obtenirReqEtablissements();
$rsEtab=$connexion->query($req);
$lgEtab=$rsEtab->fetchAll();
}
?>

