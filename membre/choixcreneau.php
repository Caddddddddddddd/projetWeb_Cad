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
               echo '<td><a href="traitement_inscription_creneau.php?idcreneau=' . $row['id_creneau'] . '">S\'inscrire</a></td>';

              
                echo '<td><a href="traitement_liste_joueurs.php?idcreneau=' . $id_creneau . '" >Liste</a></td>';
         
                echo '</tr>';
                
            }
            ?>
        </tbody>
    </table>





</form>

</div>
        </main>





</body>
</html>