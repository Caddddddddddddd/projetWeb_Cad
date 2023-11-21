
<?php

// Connexion :
require ('../cad/connection.php');

$ps = $db->prepare("SELECT creneau.id_creneau,jeux.nom_jeux,creneau.date FROM jeux INNER JOIN creneau on (jeux.id_jeux=creneau.id_jeux_creneau)");



$ps->execute();


//$ps1 = $db->prepare("SELECT id_jeux,jeux.nom_jeux,creneau.date FROM jeux INNER JOIN creneau on (jeux.id_jeux=creneau.id_jeux_creneau) WHERE jeux.id_jeux = :idJeu");



?>


