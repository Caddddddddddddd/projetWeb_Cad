<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        /* Style de base pour le bouton */
        .btn-primary:active {
            background-color: #007bff; /* Couleur primaire Bootstrap pour un bouton en état actif */
            border-color: #007bff;
        }
    </style>
    <title>Bouton Like</title>
</head>
<body>
<?php

// Vérifie si le bouton a déjà été cliqué pour cet utilisateur
if (!isset($_SESSION['button_clicked'])) {
    // Le bouton n'a pas été cliqué, affiche le bouton avec une chaîne de requête
    echo '<a href="https://getbootstrap.com/docs/5.3/components/buttons/#base-class?' . time() . '"  class="btn btn-primary">';
    echo 'Like';
    echo '</a>';

    // Marque le bouton comme cliqué dans la session
    $_SESSION['button_clicked'] = true;
} else {
    // Le bouton a déjà été cliqué, n'affiche pas le bouton
    echo '<span class="btn btn-primary" disabled>Like</span>';
}
?>

</body>
</html>
