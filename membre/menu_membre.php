<?php
            // Inclure le contenu de la nouvelle barre latérale ici
            
            require_once('role_membre.php');

            ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  <title>Document</title>
</head>
<body>
  

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
     <a class="navbar-brand" href="accueilMembre.php">
              <img src="../images/board-game-logo_555017-125.jpg" alt="Logo" width="30" height="24">
            </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="accueilMembre.php">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="traitement_liste_favoris.php">Favoris</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="choixcreneau.php">Créneaux</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="mes_creneau.php">Mes créneaux</a>
        </li>
        
        
        <!-- <li class="nav-item">
          <a class="nav-link disabled"href="deconnexion_membre.php" aria-disabled="false">deconnexion</a>
        </li> -->
        <li class="nav-item">
          <a class="nav-link" href="../membre/deconnexion_membre.php">Deconnexion</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
</body>
</html>