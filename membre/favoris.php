<?php
// Inclure le contenu de la nouvelle barre latérale ici

require_once('role_membre.php');


$user = $_SESSION['id_user'];

$aa = isset($_GET['idjeux']) ? intval($_GET['idjeux']) : 0;
//var_dump($aa);
//var_dump($user);
include('../cad/connection.php');

$checkQuery = $db->prepare("SELECT * FROM favoris_membre WHERE id_favoris_jeux = :id_fav_jeux AND id_favoris_membre = :id_fav_membre");
$checkQuery->execute([
    'id_fav_jeux' => $aa,
    'id_fav_membre' => $user
]);
if ($checkQuery->rowCount() == 0) {

$query = $db->prepare("INSERT INTO favoris_membre(id_favoris_jeux, id_favoris_membre) VALUES (:id_fav_jeux, :id_fav_membre)");


 $query->execute([
    'id_fav_jeux' => $aa,
   'id_fav_membre' => $user
   ]);  
  
  // echo "gdfdf";

  


  

header('location:accueilMembre.php');
exit();
  }
  else{
    $_SESSION['message'] = 'Ce jeu est deja dans vos favoris';
    header('location:accueilMembre.php');
  }
?>