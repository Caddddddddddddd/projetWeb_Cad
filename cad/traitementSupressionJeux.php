<?php
session_start();

// Valider et nettoyer l'ID
$id = isset($_GET['idjeux']) ? intval($_GET['idjeux']) : 0;

include('connection.php');

global $db;

$options = [
    'cost' => 12,
];
$chainejeux="../images/";
$chaineregles="../regles_jeux/";

echo "1";

// Récupération du chemin du fichier associé au jeu dans la table "jeux"
$q = $db->prepare("SELECT regles FROM jeux WHERE id_jeux = ?");
$q->bindParam(1, $id, PDO::PARAM_INT);
$q->execute();
$result = $q->fetch(PDO::FETCH_ASSOC);

// Si le chemin du fichier existe, on le supprime
if ($result && file_exists($chaineregles.$result['regles'])) {
    unlink($chaineregles.$result['regles']);
}

$q->closeCursor();

// Récupération du chemin du fichier associé au jeu dans la table "imagejeux"
$q1 = $db->prepare("SELECT images FROM imagejeux WHERE id_jeux_images = ?");
$q1->bindParam(1, $id, PDO::PARAM_INT);
$q1->execute();
$result1 = $q1->fetch(PDO::FETCH_ASSOC);

// Si le chemin du fichier existe, on le supprime
if ($result1 && file_exists($chainejeux.$result1['images'])) {
    unlink($chainejeux.$result1['images']);
}

$q1->closeCursor();
/* echo "Chemin du fichier jeu : " . $chaineregles.$result['regles'] . "<br>";
echo "Chemin du fichier imagejeux : " . $chaineregles.$result1['images'] . "<br>";
echo "Chemin du fichier imagejeux : " . $result1 && file_exists($result1['images']) . "<br>";

var_dump($result);
var_dump($result1); */

// Suppression du jeu de la base de données
$q_delete = $db->prepare("DELETE FROM jeux WHERE id_jeux=?");
$q_delete->bindParam(1, $id, PDO::PARAM_INT);
$q_delete->execute();
$q_delete->closeCursor();

// Suppression de l'entrée associée dans la table "imagejeux"
$q1_delete = $db->prepare("DELETE FROM imagejeux WHERE id_jeux_images=?");
$q1_delete->bindParam(1, $id, PDO::PARAM_INT);
$q1_delete->execute();
$q1_delete->closeCursor();

//echo "Jeu supprimé avec succès : " . $_POST['nomjeux'];
//header("location:list.php");
?>
