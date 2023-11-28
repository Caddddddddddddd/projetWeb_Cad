<?php
            // Inclure le contenu de la nouvelle barre latérale ici
        
            require_once('roleAdmin.php');

            ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Creation jeux</title>
</head>
<body>
<?php
    require 'navbar.html';
    ?>
<div class="container">
<h1>Ajout d'un Jeux </h1>
<form  method ="post" action="traitementAjoutjeux.php" enctype="multipart/form-data">
    <div class="container">
    <div class="row my-3">
       <div class="row">

        <div class="col-md-6">
            <label for="nomjeux" class="form-label">Nom de jeux</label>
            <input type="text" class="form-control " id="nomjeux" name="nomjeux" placeholder="Nom du jeux..." required>
        </div>

        <div class="col-md-6">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control " id="description" name="description" placeholder="description..." required>
        </div>

        <div class="col-md-6">
            <label for="categorie" class="form-label">Categorie</label>
            <input type="text" class="form-control " id="categorie" name="categorie" placeholder="Categorie..." required>
        </div>


        <div class="col-md-6">
            <label class="form-label">Images du jeux</label>
            <input type="file" name="imagejeux" class="form-control" required>
        </div>

        <div class="col-md-6">
             <label  class="form-label">Regles du jeux </label>
            <input type="file" name="userfile" class="form-control" />
 
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