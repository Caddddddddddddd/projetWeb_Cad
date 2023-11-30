<?php
require_once('roleAdmin.php');

// Valider et nettoyer l'ID
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
var_dump($id);

include('connection.php');
$q_delete = $db->prepare("DELETE FROM creneau WHERE id_creneau=?");
$q_delete->bindParam(1, $id, PDO::PARAM_INT);
$q_delete->execute();
$q_delete->closeCursor();

header("location:traitementsupprimercreneau.php");
?>