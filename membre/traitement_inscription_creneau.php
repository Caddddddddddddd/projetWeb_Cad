<?php
require_once('role_membre.php');
 require('menu_membre.php');
$user_id = $_SESSION['id_user'];


// Valider et nettoyer l'ID
$id = isset($_GET['idcreneau']) ? intval($_GET['idcreneau']) : 0;
//var_dump($id);
//var_dump($user_id);
include('../cad/connection.php');

$checkQuery = $db->prepare("SELECT * FROM membre_creneau WHERE id_membre = :id_membre AND id_creneau = :id_creneau");
$checkQuery->execute([
    'id_membre' => $user_id,
    'id_creneau' => $id
]);

// Si la ligne n'existe pas, effectuer l'insertion
if ($checkQuery->rowCount() == 0) {

$q = $db->prepare("INSERT INTO membre_creneau(id_membre, id_creneau) VALUES (:id_membre, :id_creneau)");


$q->execute([
    'id_membre' => $user_id,
   'id_creneau' => $id
   ]);  
   $_SESSION['message'] = 'Inscription au creneau réussie';

  

header('location:choixcreneau.php');
exit();
}
else{
    $_SESSION['message'] = 'Vous êtes déjà inscrit(e) à ce créneau';
    header('location:choixcreneau.php');

}




?>
