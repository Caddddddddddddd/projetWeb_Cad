<?php
include("connection.php");

$email = $_GET['email'];

// Connexion :
global $db;

if ($stmt = $db->prepare("DELETE FROM tablemembre WHERE email=?")) {
    $stmt->execute([$email]);
    // Vous pouvez ignorer la récupération du résultat, car DELETE ne renvoie pas de résultats.
}

header("location:listadmin.php");
exit(); // Assurez-vous de terminer l'exécution après la redirection.
?>
