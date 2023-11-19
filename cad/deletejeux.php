<?php
include("connection.php");

$jeux = $_GET['jeux'];

// Connexion :
global $db;

if ($stmt = $db->prepare("DELETE FROM jeux WHERE id_jeux=?")) {
    $stmt->execute([$jeux]);
    // Vous pouvez ignorer la récupération du résultat, car DELETE ne renvoie pas de résultats.
}

if ($stmt = $db->prepare("DELETE FROM imagejeux WHERE id_jeux_images=?")) {
    $stmt->execute([$jeux]);
    // Vous pouvez ignorer la récupération du résultat, car DELETE ne renvoie pas de résultats.
}


header("location:list.php");
exit(); // Assurez-vous de terminer l'exécution après la redirection.
?>
