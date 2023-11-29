<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include('connection.php');
global $db;

// Valider et nettoyer l'ID
$id = isset($_GET['idcreneauad']) ? intval($_GET['idcreneauad']) : 0; 
var_dump($id);

$statut = "refuse²(e)";

$q_update = $db->prepare("UPDATE membre_creneau
                        SET statut = :statut
                        WHERE id_membre_creneau = :id");

$q_update->bindParam(':statut', $statut);
$q_update->bindParam(':id', $id);

$q_update->execute();

// echo "Statut modifié avec succès : " . $statut;
header("location:acceuilAdmin.php");
?>
