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
header("location:list.php");
?>

</body>