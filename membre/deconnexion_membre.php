

<?php
session_start();
session_destroy();

// Désactive le cache
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

// Redirige avec JavaScript pour empêcher le retour en arrière vers le fichier index.php
echo '<script>window.location.href = "../cad/index.php";</script>';
exit();
?>

