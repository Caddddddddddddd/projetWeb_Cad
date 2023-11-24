<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Creation creneau</title>
</head>
<body>
<?php
    require 'navbar.html';
    include('connection.php');
    // Ajoutez cette section pour récupérer la liste des jeux depuis la base de données
$query = $db->query("SELECT nom_jeux FROM jeux");
$jeuxList = $query->fetchAll(PDO::FETCH_COLUMN);

    ?>
<div class="container">
<h1>Ajout creneau </h1>
<form  method ="post" action="traitementajoutcreneau.php" enctype="multipart/form-data">
    <div class="container">
    <div class="row my-3">
       <div class="row">

       <div class="col-md-6">
    <label for="nomjeux" class="form-label">Nom du jeu</label>
    <select class="form-control" id="nomjeux" name="nomjeux" required>
        <?php foreach ($jeuxList as $jeu): ?>
            <option value="<?= $jeu ?>"><?= $jeu ?></option>
        <?php endforeach; ?>
    </select>
</div>
<div class="col-md-6">
            <label for="date" class="form-label">Date</label>
            <input type="date" class="form-control " id="date" name="date" placeholder="" required>
        </div>

        

        <div class="col-md-6">
            <label for="heureDebut" class="form-label"></label>
            <input type="time" class="form-control " id="heureDebut" name="heureDebut" placeholder="HH:MM"  required>
        </div>

        <div class="col-md-6">
            <label for="heureFin" class="form-label"></label>
            <input type="time" class="form-control " id="heureFin" name="heureFin" placeholder="HH:MM"  required>
        </div>
       </div>
        <div class="row my-3">
        <div class="d-grid gap-2 d-md-block">
            <button class="btn btn-outline-primary" name ="formsend1" type="submit">
                Ajouter

            </button>
        </div>   
        </div>
    </div>
</form>
</div>
</body>
</html>
