<?php
            // Inclure le contenu de la nouvelle barre latérale ici
            
            require_once('role_membre.php');

?>
<div class="container-fluid">

            <?php
            // Inclure le contenu de la nouvelle barre latérale ici
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
       



        <!-- Contenu principal -->
        
            <!-- Votre contenu principal ici -->
            
            
<div class="container mt-5">
<h1>Créneaux</h1>





<?php
    

 
?>
<table class="table mt-5">
        <thead>
            <tr>
                
                <th scope="col">Nom Jeux</th>
                <th scope="col">Heure début</th>
                <th scope="col">Heure de fin</th>
                <th scope="col">Inscription</th>
                <th scope="col">Liste des joueurs</th>
            </tr>
        </thead>
        <tbody>

            <?php
            //$i = 1;

            // Utilisation de "ORDER BY" pour ordonner les résultats par ID membre
            require ('selectioncreneau.php');

           /*  $req1 = $db->prepare("SELECT * FROM imagejeux ORDER BY id_imagejeux");
            $req1->execute(); && $user1 = $req1->fetch()*/

            while ($row = $ps->fetch()) {
                echo '<tr>';
                echo '<td>' . $row['nom_jeux'] . '</td>';
                echo '<td>' . $row['date_debut'] . '</td>';
                echo '<td>' . $row['date_fin'] . '</td>';
               $id_creneau=$row['id_creneau'] ;
               echo '<td><a href="traitement_inscription_creneau.php?idcreneau=' . $row['id_creneau'] . '" class="btn btn-success">S\'inscrire</a></td>';


              
               echo '<td><a href="traitement_liste_joueurs.php?idcreneau=' . $id_creneau . '" class="btn btn-info">Liste</a></td>';

         
                echo '</tr>';
                
            }
            ?>
        </tbody>
    </table>





</form>

</div>
     





</body>
</html>