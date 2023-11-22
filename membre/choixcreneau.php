<?php
    require ('sidebar.php');
?>


<div class="container">
<h1>Créneaux</h1>





<?php
    

 
?>
<table class="table">
        <thead>
            <tr>
                
                <th scope="col">Nom Jeux</th>
                <th scope="col">Creneau</th>
                <th scope="col">Choix</th>
                <th scope="col">Liste_joueurs</th>
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
                echo '<td>' . $row['date'] . '</td>';
               $id_creneau=$row['id_creneau'] ;
                echo '<td><a href="traitement_inscription_creneau.php?idcreneau=' . $row['id_creneau'] . '" >Inscrire</a></td>';
              
                echo '<td><a href="traitement_liste_joueurs.php?idcreneau=' . $id_creneau . '" >Liste</a></td>';
         
                echo '</tr>';
                
            }
            ?>
        </tbody>
    </table>





</form>

</div>


</body>
</html>