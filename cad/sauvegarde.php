<?php
$titre = "Administrateur";
include 'header.inc.php';
include 'menuadmin.php';
include 'connection.php';
?>

<div class="container">
    <h1>Contenu</h1>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">ID Jeux</th>
                <th scope="col">Nom Jeux</th>
                <th scope="col">Descriptions</th>
                <th scope="col">Categorie</th>
                <th scope="col">Regles</th>
                <th scope="col">Images</th>
                <th scope="col">Modifier</th>
                <th scope="col">Supprimer</th>
                


            </tr>
        </thead>
        <tbody>

            <?php
            global $db;
            $i = 1;

            // Utilisation de "ORDER BY" pour ordonner les résultats par ID membre
            $req = $db->prepare("SELECT * FROM jeux INNER JOIN  imagejeux on(jeux.id_jeux=imagejeux.id_jeux_images)ORDER BY id_jeux");
            $req->execute();

           /*  $req1 = $db->prepare("SELECT * FROM imagejeux ORDER BY id_imagejeux");
            $req1->execute(); && $user1 = $req1->fetch()*/

            while ($user = $req->fetch() ) {
                echo '<tr>';
                echo '<th scope="row">' . $i . '</th>';
                echo '<td>' . $user['id_jeux'] . '</td>';
                echo '<td>' . $user['nom_jeux'] . '</td>';
                echo '<td>' . $user['descriptions'] . '</td>';
                echo '<td>' . $user['categorie'] . '</td>';
                echo '<td>' . $user['regles'] . '</td>';
                echo '<td>' . $user['images'] . '</td>';
                echo '<td><a href="traitementUpdatejeux.php?idjeux=' . $user['id_jeux'] . '&nomjeux=' . $user['nom_jeux'] . '&descriptions=' . $user['descriptions'] . '&categorie=' . $user['categorie'] . '">Modifier</a></td>';
                echo '<td><a href="traitementSupressionJeux.php?idjeux=' . $user['id_jeux'] . '" >Supprimer</a></td>';
                echo '</tr>';
                $i++;
            }
            ?>
        </tbody>
    </table>
</div>
