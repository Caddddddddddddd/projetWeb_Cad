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



        <main role="main" class="col-md-10 ml-sm-auto">
            <!-- Votre contenu principal ici -->
            
            <div class="container mt-5">
<h1>Jeux auxquels je suis inscrit</h1>





<?php
    

 
?>
<table class="table mt-5">
        <thead>
            <tr>
                
                <th scope="col ">Nom Jeux</th>
                <th scope="col ">Date début</th>
                <th scope="col ">Date fin</th>
                <th scope="col ">Statut</th>
            
            </tr>
        </thead>
        <tbody>

            <?php
            //$i = 1;

            // Utilisation de "ORDER BY" pour ordonner les résultats par ID membre
           
            //require ('traitement_liste_favoris.php');

           /*  $req1 = $db->prepare("SELECT * FROM imagejeux ORDER BY id_imagejeux");
            $req1->execute(); && $user1 = $req1->fetch()*/
         
            while ($row1 = $q->fetch()) {
               
                echo '<tr>';
                echo '<td>' . $row1['nom_jeux'] . '</td>';
                echo '<td>' . $row1['date_debut'] . '</td>';
                echo '<td>' . $row1['date_fin'] . '</td>';
                echo '<td>' . $row1['statut'] . '</td>';
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