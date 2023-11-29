<?php
session_start();
if(isset($_SESSION['id_user']) && isset($_SESSION['privilege']) && $_SESSION['privilege'] == "membre" ){
//header("location:connexion.php");
}
else{
    header("location:../membre/deconnexion_membre.php");//à vous de décider...!! Moi je renvoie vers la page connexion. 
    exit();
}
?>