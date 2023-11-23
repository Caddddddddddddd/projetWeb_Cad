<?php
session_start();
$user_id = $_SESSION['id_membre'];

//var_dump($user_id); 
// Valider et nettoyer l'ID


//var_dump($id1);

include('../cad/connection.php');



$q = $db->prepare("SELECT DISTINCT jeux.nom_jeux FROM jeux WHERE id_jeux IN (SELECT favoris_membre.id_favoris_jeux FROM favoris_membre WHERE id_favoris_membre = :id1)");



$q->execute([
    'id1' => $user_id
  
   ]);

   require ('liste_favoris.php');

//header('location:liste_joueurs_creneau.php');
//exit();





?>
