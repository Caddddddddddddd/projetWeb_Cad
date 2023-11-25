<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <!-- Contenu de la barre latérale -->
            <?php
            // Inclure le contenu de la nouvelle barre latérale ici
            require('new_sidebar.php');
            ?>
        </nav>

        <!-- Contenu principal -->
        <main role="main" class="col-md-10 ml-sm-auto">
            <!-- Votre contenu principal ici -->
            
            <form>
<div class="container">
   
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
        </main>
    </div>
</div>
