<?php
require_once('role_membre.php');



// Valider et nettoyer l'ID
$id_favoris = isset($_GET['idfavoris']) ? intval($_GET['idfavoris']) : 0;
//var_dump($id);
//var_dump($user_id);
include('../cad/connection.php');

$checkQuery = $db->prepare("DELETE FROM favoris_membre WHERE id_favoris = :id_favoris");
$checkQuery->execute([
    'id_favoris' => $id_favoris
]);



header('location:traitement_liste_favoris.php');
exit();


?>
