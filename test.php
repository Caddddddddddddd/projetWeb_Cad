<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichage des images avec Bootstrap</title>
    <!-- Inclure la bibliothèque Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <div class="row">
        <?php
        // Tableau d'informations sur les images
        $images = array(
            array(
                'url' => 'images/board-game-logo_555017-125.jpg',
                'nom' => 'Nom Image 1',
                'description' => 'Description de l\'image 1',
                'categorie' => 'Catégorie 1',
                'regles' => 'Règles de l\'image 1',
            ),
            array(
                'url' => 'images/clash_royal.jpg',
                'nom' => 'Nom Image 2',
                'description' => 'Description de l\'image 2',
                'categorie' => 'Catégorie 2',
                'regles' => 'Règles de l\'image 2',
            ),
            array(
                'url' => 'images/Free Vector Board games online composition.jpeg',
                'nom' => 'Nom Image 3',
                'description' => 'Description de l\'image 3',
                'categorie' => 'Catégorie 3',
                'regles' => 'Règles de l\'image 3',
            ),
            // ... ajoutez autant d'images que nécessaire
        );

        // Boucle pour afficher les informations sur les images dans des cartes Bootstrap
        foreach ($images as $image) {
            echo '<div class="col-md-4 mb-3">';
            echo '<div class="card">';
            echo '<img src="' . $image['url'] . '" class="card-img-top" alt="' . $image['nom'] . '">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">' . $image['nom'] . '</h5>';
            echo '<p class="card-text"><strong>Description:</strong> ' . $image['description'] . '</p>';
            echo '<p class="card-text"><strong>Catégorie:</strong> ' . $image['categorie'] . '</p>';
            echo '<p class="card-text"><strong>Règles:</strong> ' . $image['regles'] . '</p>';
            echo '</div>';
            echo '</div>';
            echo '</div>' . PHP_EOL;
        }
        ?>
    </div>
</div>

<!-- Inclure la bibliothèque Bootstrap (jQuery et Popper.js inclus) -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>
