<?php
require_once('role_membre.php');
$user_id = $_SESSION['id_user'];

//var_dump($user_id); 
// Valider et nettoyer l'ID


//var_dump($id1);

include('../cad/connection.php');


//$new_query = $db->prepare("SELECT favoris_membre.id_favoris_jeux, favoris_membre.id_favoris FROM favoris_membre WHERE id_favoris_membre = :id1");

$q = $db->prepare("SELECT DISTINCT jeux.nom_jeux,imagejeux.images,favoris_membre.id_favoris FROM jeux INNER JOIN imagejeux on (jeux.id_jeux=imagejeux.id_jeux_images) INNER JOIN favoris_membre on (imagejeux.id_jeux_images=favoris_membre.id_favoris_jeux) WHERE id_jeux IN (SELECT favoris_membre.id_favoris_jeux FROM favoris_membre WHERE id_favoris_membre = :id1)");



$q->execute([
    'id1' => $user_id
  
   ]);

   
   require ('liste_favoris.php');

//header('location:liste_joueurs_creneau.php');
//exit();





?>
