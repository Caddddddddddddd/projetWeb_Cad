<?php
            // Inclure le contenu de la nouvelle barre latérale ici
            
            require_once('roleAdmin.php');

            ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    
<?php
            // Inclure le contenu de la nouvelle barre latérale ici
            require('menuadmin.php');


         //   $user_id = $_SESSION['id_membre'];

//var_dump($user_id); 
// Valider et nettoyer l'ID


//var_dump($id1);

include('connection.php');



$q = $db->prepare("SELECT * FROM jeux INNER JOIN creneau on(jeux.id_jeux=creneau.id_jeux_creneau) INNER JOIN membre_creneau on (creneau.id_creneau=membre_creneau.id_creneau) INNER JOIN tablemembre on (membre_creneau.id_membre=tablemembre.id_membre)  ");



$q->execute();
?>
   <div class="container-fluid">
    <div class="row">




        
            <!-- Votre contenu principal ici -->
            
            <div class="container mt-5">
<h1>Jeux auxquels les membres sont inscrits</h1>


<table class="table mt-5">
        <thead>
            <tr>
                <th scope="col ">Nom Membre</th>
                <th scope="col ">Nom Jeux</th>
                <th scope="col ">Date début</th>
                <th scope="col ">Date fin</th>
                <th scope="col ">Statut</th>
                <th scope="col ">Accepter</th>
                <th scope="col ">Refuser</th>
            
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
                echo '<td>' . $row1['pseudo'] . '</td>';
                echo '<td>' . $row1['nom_jeux'] . '</td>';
                echo '<td>' . $row1['date_debut'] . '</td>';
                echo '<td>' . $row1['date_fin'] . '</td>';
                echo '<td>' . $row1['statut'] . '</td>';
                echo '<td><a href="acceptercreneau.php?idcreneauad=' . $row1['id_membre_creneau'] . '">Accepter</a></td>';

              
                echo '<td><a href="supprimercreneau.php?idcreneauad=' . $row1['id_membre_creneau'] . '" >Refuser</a></td>';
                echo '</tr>';
              
            }
            ?>
        </tbody>
    </table>





</form>

</div>
        








