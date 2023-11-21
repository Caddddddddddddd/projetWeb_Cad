
<?php

// Connexion :
require ('../cad/connection.php');

$ps = $db->prepare("SELECT * FROM jeux INNER JOIN imagejeux on (jeux.id_jeux=imagejeux.id_jeux_images)");

$ps->execute();
$resultats = $ps->fetchAll(PDO::FETCH_ASSOC);





?>


