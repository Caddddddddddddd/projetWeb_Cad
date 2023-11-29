

<?php
session_start();
session_destroy();

session_start();
$_SESSION['deco_message']="Deconnexion reussie";
header("location: ../cad/index.php");
?>

