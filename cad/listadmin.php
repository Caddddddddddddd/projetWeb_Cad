<?php
$titre = "Administrateur";
include 'header.inc.php';
include 'menuadmin.php';
include 'connection.php';

            // Inclure le contenu de la nouvelle barre latérale ici
            session_start();
            require_once('roleAdmin.php');

            
?>

<div class="container">
    <h1>Contenu</h1>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">ID Admin</th>
                <th scope="col">Pseudo</th>
                <th scope="col">Email</th>
                <th scope="col">Privilege</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>

            <?php
            global $db;
            $i = 1;

            // Utilisation de "ORDER BY" pour ordonner les résultats par ID membre
            $req = $db->prepare("SELECT id_membre, pseudo, email, privilege FROM tablemembre WHERE privilege='admin' ORDER BY id_membre");
            $req->execute();

            while ($user = $req->fetch()) {
                echo '<tr>';
                echo '<th scope="row">' . $i . '</th>';
                echo '<td>' . $user['id_membre'] . '</td>';
                echo '<td>' . $user['pseudo'] . '</td>';
                echo '<td>' . $user['email'] . '</td>';
                echo '<td>' . $user['privilege'] . '</td>';
                echo '<td><a href="deleteadmin.php?email=' . $user['email'] . '" >Supprimer</a></td>';
                echo '</tr>';
                $i++;
            }
            ?>
        </tbody>
    </table>
</div>
