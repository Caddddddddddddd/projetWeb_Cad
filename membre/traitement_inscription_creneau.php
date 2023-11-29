<?php
 require('menu_membre.php');
$user_id = $_SESSION['id_user'];


// Valider et nettoyer l'ID
$id = isset($_GET['idcreneau']) ? intval($_GET['idcreneau']) : 0;
//var_dump($id);
//var_dump($user_id);
include('../cad/connection.php');



$q = $db->prepare("INSERT INTO membre_creneau(id_membre, id_creneau) VALUES (:id_membre, :id_creneau)");


$q->execute([
    'id_membre' => $user_id,
   'id_creneau' => $id
   ]);  
   

  

header('location:choixcreneau.php');
exit();





?>
