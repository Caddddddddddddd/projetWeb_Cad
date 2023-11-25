<?php
session_start();
$user = $_SESSION['id_membre'];
$aa = isset($_GET['idjeux']) ? intval($_GET['idjeux']) : 0;
//var_dump($aa);
//var_dump($user);
include('../cad/connection.php');



$query = $db->prepare("INSERT INTO favoris_membre(id_favoris_jeux, id_favoris_membre) VALUES (:id_fav_jeux, :id_fav_membre)");


 $query->execute([
    'id_fav_jeux' => $aa,
   'id_fav_membre' => $user
   ]);  
  
  // echo "gdfdf";

  


  

header('location:accueilMembre.php');
exit();
?>