
  <?php

// Connexion :
require 'connection.php';

$ps = $db->prepare("SELECT * FROM creneau");

$ps->execute();
$ps->bind_result($id_creneau, $date, /* autres colonnes de votre table */);

$rows = array();
while ($ps->fetch()) {
    $row = array(
        'id_creneau' => $id_creneau,
        'date' => $date,
        // autres colonnes de votre table
    );
    $rows[] = $row;
}



?>


