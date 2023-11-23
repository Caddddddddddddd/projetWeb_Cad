<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichage des images avec Bootstrap</title>
    <!-- Inclure la bibliothèque Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <?php
    require ('sidebar.php');
?>

</head>
<body>
<form>
<div class="container">
    <div class="row">
        <?php
        // Tableau d'informations sur les images
     require('selectionjeux.php');
    $chemin_dossier_image="../images/";
        // Boucle pour afficher les informations sur les images dans des cartes Bootstrap
        foreach ($resultats as $resultat) {
            echo '<div class="col-md-4 mb-3">';
            echo '<div class="card">';
            echo '<img src="' . $chemin_dossier_image.$resultat['images'] . '" class="card-img-top" alt="' . $resultat['nom_jeux'] . '">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">' . $resultat['nom_jeux'] . '</h5>';
            echo '<p class="card-text"><strong>Description:</strong> ' . $resultat['descriptions'] . '</p>';
            echo '<p class="card-text"><strong>Catégorie:</strong> ' . $resultat['categorie'] . '</p>';
            echo '<p class="card-text"><strong>Règles:</strong> ' . $resultat['regles'] . '</p>';
            echo '<p class="card-text"><a href="../regles_jeux/' . $resultat['regles'] . '" target="_blank">Règles</a></p>';
            echo '<a href="traitement_inscription_creneau.php?idjeux=' . $resultat['id_jeux'] . '"  class="btn btn-primary">';
            echo 'Like';
            echo '</a>';
                $_SESSION['bu
          
            if (isset($_SESSION['button_clicked'])) {
               
            // Le bouton a déjà été cliqué, n'affiche pas le bouton
          echo '<a href="traitement_inscription_creneau.php?idjeux=' . $resultat['id_jeux'] . '"  class="btn btn-primary" name="yo">';
                
          echo 'Liked';
          echo '</a>';
                // Marque le bouton comme cliqué dans la session
                
            } else {
               
                // Le bouton n'a pas été cliqué, affiche le bouton avec une chaîne de requête
                echo '<a href="traitement_inscription_creneau.php?idjeux=' . $resultat['id_jeux'] . '"  class="btn btn-primary">';
                echo 'Like';
                echo '</a>';
                $_SESSION['button_clicked'] = true;
            }
            

          

            echo '</div>';
            echo '</div>';
            echo '</div>' . PHP_EOL;
        }
        
        ?>
    </div>
</div>
</form>
<!-- Inclure la bibliothèque Bootstrap (jQuery et Popper.js inclus) -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>
