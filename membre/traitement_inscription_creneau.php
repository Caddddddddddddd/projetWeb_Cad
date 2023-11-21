
<?php



$options = [
    'cost' => 12,
];
   
    if (isset($_GET['inscrire'])) {
        include('../cad/connection.php');
   
        $valeur_select = $_GET['creneau'];
        echo $valeur_select;
    }



?>
