<div class="container-fluid">
<?php
            // Inclure le contenu de la nouvelle barre latérale ici
            
            require_once('role_membre.php');
            require('menu_membre.php');
            if (isset($_SESSION['message'])) {
                echo '<div class="alert alert-primary alert-dismissible fade show" role="alert">';
                echo $_SESSION['message'];
                echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
                echo '</div>';
                unset($_SESSION['message']);
            }
            ?>
        
       
        <br>
  


       
            <!-- Votre contenu principal ici -->
            
            <div class="container mt-5">
    <h1>Liste des jeux favoris</h1><br><br>
    
    <?php
    $chemin_dossier_image="../images/";
    while ($row1 = $q->fetch()) {
    ?>
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-4">
                    <!-- Vous pouvez afficher une image du jeu ici -->
                    <img src="<?php echo $chemin_dossier_image . $row1['images']; ?>" class="card-img-top" alt="">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row1['nom_jeux']; ?></h5>
                        <!-- Ajouter le bouton Supprimer -->
                        <form action="supprimer_jeu_favori.php" method="post">
                            <input type="hidden" name="id_jeu" value="<?php echo $row1['id_jeu']; ?>">
                            <a href="supprimer_favoris.php?idfavoris=<?php echo $row1['id_favoris']; ?>" class="btn btn-danger">Supprimer</a>

                          
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
</div>

</div>

</form>

</div>










</body>
</html>