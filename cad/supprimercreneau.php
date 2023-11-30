<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    

<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include('connection.php');
global $db;

// Valider et nettoyer l'ID
$id = isset($_GET['idcreneauad']) ? intval($_GET['idcreneauad']) : 0; 
var_dump($id);

$statut = "refuse(e)";

$q_update = $db->prepare("UPDATE membre_creneau
                        SET statut = :statut
                        WHERE id_membre_creneau = :id");

$q_update->bindParam(':statut', $statut);
$q_update->bindParam(':id', $id);

$q_update->execute();

// echo "Statut modifié avec succès : " . $statut;
header("location:acceuilAdmin.php");
?>
</body>