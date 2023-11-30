<?php
 require('menu_membre.php');
/* session_start();
$user_id = $_SESSION['id_membre'];

var_dump($user_id); */
// Valider et nettoyer l'ID

$id1 = isset($_GET['idcreneau']) ? intval($_GET['idcreneau']) : 0;
//var_dump($id1);
$statut="accepte(e)";
include('../cad/connection.php');



$q = $db->prepare("SELECT tablemembre.pseudo FROM tablemembre WHERE id_membre IN (SELECT membre_creneau.id_membre FROM membre_creneau WHERE id_creneau = :id1 AND statut = :statut)");



$q->execute([
    'id1' => $id1,
    'statut'=> $statut
   ]);

   require ('liste_joueurs_creneau.php');

//header('location:liste_joueurs_creneau.php');
//exit();





?>
