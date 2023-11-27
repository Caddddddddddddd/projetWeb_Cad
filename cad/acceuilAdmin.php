
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    
<?php
            // Inclure le contenu de la nouvelle barre latérale ici
            require('menuadmin.php');
            ?>
<div class="container">
    <div class="row">
        <?php
        // Tableau d'informations sur les images
        require('../membre/selectionjeux.php');
        $chemin_dossier_image="../images/";

        // Boucle pour afficher les informations sur les images dans des cartes Bootstrap
        foreach ($resultats as $resultat) {
            echo '<div class="col-md-4 mb-3 mt-5">';
            echo '<div class="card">';
            echo '<img src="' . $chemin_dossier_image . $resultat['images'] . '" class="card-img-top" alt="' . $resultat['nom_jeux'] . '">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">' . $resultat['nom_jeux'] . '</h5>';
            echo '<p class="card-text"><strong>Description:</strong> ' . $resultat['descriptions'] . '</p>';
            echo '<p class="card-text"><strong>Catégorie:</strong> ' . $resultat['categorie'] . '</p>';
            echo '<p class="card-text"><a href="../regles_jeux/' . $resultat['regles'] . '" target="_blank">Règles</a></p>';
            echo '<a href="favoris.php?idjeux=' . $resultat['id_jeux'] . '" class="btn btn-primary">Intéressé(e)</a>';
            echo '</div>';
            echo '</div>';
            echo '</div>' . PHP_EOL;

            echo '<div class="col-md-4 mb-3 mt-5">';
            echo '<div class="card">';
            echo '<img src="' . $chemin_dossier_image . $resultat['images'] . '" class="card-img-top" alt="' . $resultat['nom_jeux'] . '">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">' . $resultat['nom_jeux'] . '</h5>';
            echo '<p class="card-text"><strong>Description:</strong> ' . $resultat['descriptions'] . '</p>';
            echo '<p class="card-text"><strong>Catégorie:</strong> ' . $resultat['categorie'] . '</p>';
            echo '<p class="card-text"><a href="../regles_jeux/' . $resultat['regles'] . '" target="_blank">Règles</a></p>';
            echo '<a href="favoris.php?idjeux=' . $resultat['id_jeux'] . '" class="btn btn-primary">Intéressé(e)</a>';
            echo '</div>';
            echo '</div>';
            echo '</div>' . PHP_EOL;

            echo '<div class="col-md-4 mb-3 mt-5">';
            echo '<div class="card">';
            echo '<img src="' . $chemin_dossier_image . $resultat['images'] . '" class="card-img-top" alt="' . $resultat['nom_jeux'] . '">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">' . $resultat['nom_jeux'] . '</h5>';
            echo '<p class="card-text"><strong>Description:</strong> ' . $resultat['descriptions'] . '</p>';
            echo '<p class="card-text"><strong>Catégorie:</strong> ' . $resultat['categorie'] . '</p>';
            echo '<p class="card-text"><a href="../regles_jeux/' . $resultat['regles'] . '" target="_blank">Règles</a></p>';
            echo '<a href="favoris.php?idjeux=' . $resultat['id_jeux'] . '" class="btn btn-primary">Intéressé(e)</a>';
            echo '</div>';
            echo '</div>';
            echo '</div>' . PHP_EOL;

            echo '<div class="col-md-4 mb-3 mt-5">';
            echo '<div class="card">';
            echo '<img src="' . $chemin_dossier_image . $resultat['images'] . '" class="card-img-top" alt="' . $resultat['nom_jeux'] . '">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">' . $resultat['nom_jeux'] . '</h5>';
            echo '<p class="card-text"><strong>Description:</strong> ' . $resultat['descriptions'] . '</p>';
            echo '<p class="card-text"><strong>Catégorie:</strong> ' . $resultat['categorie'] . '</p>';
            echo '<p class="card-text"><a href="../regles_jeux/' . $resultat['regles'] . '" target="_blank">Règles</a></p>';
            echo '<a href="favoris.php?idjeux=' . $resultat['id_jeux'] . '" class="btn btn-primary">Intéressé(e)</a>';
            echo '</div>';
            echo '</div>';
            echo '</div>' . PHP_EOL;
            echo '<div class="col-md-4 mb-3 mt-5">';
            echo '<div class="card">';
            echo '<img src="' . $chemin_dossier_image . $resultat['images'] . '" class="card-img-top" alt="' . $resultat['nom_jeux'] . '">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">' . $resultat['nom_jeux'] . '</h5>';
            echo '<p class="card-text"><strong>Description:</strong> ' . $resultat['descriptions'] . '</p>';
            echo '<p class="card-text"><strong>Catégorie:</strong> ' . $resultat['categorie'] . '</p>';
            echo '<p class="card-text"><a href="../regles_jeux/' . $resultat['regles'] . '" target="_blank">Règles</a></p>';
            echo '<a href="favoris.php?idjeux=' . $resultat['id_jeux'] . '" class="btn btn-primary">Intéressé(e)</a>';
            echo '</div>';
            echo '</div>';
            echo '</div>' . PHP_EOL;
            echo '<div class="col-md-4 mb-3 mt-5">';
            echo '<div class="card">';
            echo '<img src="' . $chemin_dossier_image . $resultat['images'] . '" class="card-img-top" alt="' . $resultat['nom_jeux'] . '">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">' . $resultat['nom_jeux'] . '</h5>';
            echo '<p class="card-text"><strong>Description:</strong> ' . $resultat['descriptions'] . '</p>';
            echo '<p class="card-text"><strong>Catégorie:</strong> ' . $resultat['categorie'] . '</p>';
            echo '<p class="card-text"><a href="../regles_jeux/' . $resultat['regles'] . '" target="_blank">Règles</a></p>';
            echo '<a href="favoris.php?idjeux=' . $resultat['id_jeux'] . '" class="btn btn-primary">Intéressé(e)</a>';
            echo '</div>';
            echo '</div>';
            echo '</div>' . PHP_EOL;
        }
        ?>
    </div>
</div>


</form>
        </main>
    </div>
</div>
</body>
</html>