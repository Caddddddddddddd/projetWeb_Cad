
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <title>Document</title>
</head>
<body>
  

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="acceuilAdmin.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pageCreationAdmin.php">Gestion Administrateur</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Gestion creneaux
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="pageformajoutCreneau.php">Création creneau</a></li>
            <li><a class="dropdown-item" href="pageCalendar.php">Affichage creneau</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="traitementsupprimercreneau.php">Suppression creneau</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Gestion jeux
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="pageAjoutJeux.php">Création jeux</a></li>
            <li><a class="dropdown-item" href="list.php">Modification jeux</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="list.php">Suppression jeux</a></li>
          </ul>
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