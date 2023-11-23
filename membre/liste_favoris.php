<?php
    require ('sidebar.php');
?>


<div class="container">
<h1>Liste des favoris</h1>





<?php
    

 
?>
<table class="table">
        <thead>
            <tr>
                
                <th scope="col">Jeux favoris</th>
            
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
               
                echo '</tr>';
              
            }
            ?>
        </tbody>
    </table>





</form>

</div>


</body>
</html>