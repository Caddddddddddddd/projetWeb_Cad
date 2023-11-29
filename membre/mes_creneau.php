<?php
session_start();
$user_id = $_SESSION['id_user'];

//var_dump($user_id); 
// Valider et nettoyer l'ID


//var_dump($id1);

include('../cad/connection.php');



$q = $db->prepare("SELECT jeux.nom_jeux,creneau.date_debut,creneau.date_fin,membre_creneau.statut FROM jeux INNER JOIN creneau on(jeux.id_jeux=creneau.id_jeux_creneau) INNER JOIN membre_creneau on (creneau.id_creneau=membre_creneau.id_creneau) WHERE id_membre = :id1; ");



$q->execute([
    'id1' => $user_id
  
   ]);

   require ('liste_mes_jeux.php');

//header('location:liste_joueurs_creneau.php');
//exit();





?>
