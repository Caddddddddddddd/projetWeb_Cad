<div class="container-fluid">
<?php
            // Inclure le contenu de la nouvelle barre latérale ici
            
            require_once('role_membre.php');
            require('menu_membre.php');
            ?>
        
       
        <br>
  


       
            <!-- Votre contenu principal ici -->
            
            <div class="container mt-5">
<h1>Liste des jeux favoris</h1>





<?php
    

 
?>
<table class="table mt-5">
        <thead>
            <tr>
                
                <th scope="col ">Jeux favoris</th>
            
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