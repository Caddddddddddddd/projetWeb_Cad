<div class="container-fluid">
  
            <!-- Contenu de la barre latérale -->
            <?php
            // Inclure le contenu de la nouvelle barre latérale ici
            require('menu_membre.php');
            ?>
       
        <br>

        <!-- Contenu principal -->
      
            <!-- Votre contenu principal ici -->
            
            <form>
<div class="container">
<?php
    if (isset($_SESSION['message'])) {
        echo '<div class="alert alert-primary alert-dismissible fade show" role="alert">';
        echo $_SESSION['message'];
        echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
        echo '</div>';
        unset($_SESSION['message']);
    }
    ?>
    <div class="row">
        <?php
        // Tableau d'informations sur les images
     require('selectionjeux.php');
    $chemin_dossier_image="../images/";
        // Boucle pour afficher les informations sur les images dans des cartes Bootstrap
        foreach ($resultats as $resultat) {
            echo '<div class="col-md-4 mb-3 mt-5">';
            echo '<div class="card">';
            echo '<img src="' . $chemin_dossier_image.$resultat['images'] . '" class="card-img-top" alt="' . $resultat['nom_jeux'] . '">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">' . $resultat['nom_jeux'] . '</h5>';
            echo '<p class="card-text"><strong>Description:</strong> ' . $resultat['descriptions'] . '</p>';
            echo '<p class="card-text"><strong>Catégorie:</strong> ' . $resultat['categorie'] . '</p>';
           
            echo '<p class="card-text"><a href="../regles_jeux/' . $resultat['regles'] . '" target="_blank">Règles</a></p>';
            
          
        
               
            // Le bouton a déjà été cliqué, n'affiche pas le bouton
          echo '<a href="favoris.php?idjeux=' . $resultat['id_jeux'] . '"  class="btn btn-primary" >';
                
          echo 'Intéressé(e)';
          echo '</a>';
                // Marque le bouton comme cliqué dans la session
                
           
            

          

            echo '</div>';
            echo '</div>';
            echo '</div>' . PHP_EOL;
        }
        
        ?>
    </div>
</div>
</form>

    </div>
</div>
