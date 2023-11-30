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
try {
    session_start();
    // Connexion à la base de données
    include('connection.php');
    require('menuadmin.php');
    // Préparation et exécution de la requête SQL pour récupérer tous les créneaux avec le nombre de membres pour chaque créneau
    $sql = "SELECT creneau.*, jeux.nom_jeux, COUNT(membre_creneau.id_membre) AS count_membres
            FROM creneau
            LEFT JOIN jeux ON creneau.id_jeux_creneau = jeux.id_jeux
            LEFT JOIN membre_creneau ON creneau.id_creneau = membre_creneau.id_creneau
            GROUP BY creneau.id_creneau";
    $stmt = $db->query($sql);
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Affichage des créneaux avec moins de 9 participants
    foreach ($results as $result) {
        if ($result['count_membres'] < 9) {
            echo "<div style='border: 1px solid #ccc; padding: 10px; margin-bottom: 10px;'>";
            echo "<h3>Informations sur le créneau '{$result['nom_jeux']}'</h3>";
            echo "<p>Date de début : {$result['date_debut']}</p>";
            echo "<p>Date de fin : {$result['date_fin']}</p>";
            echo "<p>Nombre de participants : {$result['count_membres']}</p>";
            echo "<a href='traitement.php?id={$result['id_creneau']}'><button>Supprimer</button></a>";
            echo "</div>";
        }
    }
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
?>
</body>