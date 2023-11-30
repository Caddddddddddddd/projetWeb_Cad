<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<html>
<head>
    <title>Inscription</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<?php
    require 'navbar.html';
    if(isset($_SESSION['message_email'])) {
      echo '<div class="alert alert-primary alert-dismissible fade show" role="alert">';
      echo $_SESSION['message_email'];
      echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
      echo '</div>';
      unset($_SESSION['message_email']);
  }
  else if(isset($_SESSION['message'])) {
    echo '<div class="alert alert-primary alert-dismissible fade show" role="alert">';
    echo $_SESSION['message'];
    echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
    echo '</div>';
    unset($_SESSION['message']);
}
    ?>





<form  method ="post" action="connexion.php" enctype="multipart/form-data">
    <div class="container">
    <div class="row my-3">
       <div class="row">

        <div class="col-md-6">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control " id="identifiant" name="identifiant" placeholder="Votre email..." required>
        </div>

        <div class="col-md-6">
            <label for="motDePasse" class="form-label">Mot de passe</label>
            <input type="password" class="form-control " id="motDePasse" name="motDePasse" placeholder="Mot de passe..." required>
        </div>


       </div>
        <div class="row my-3">
        <div class="d-grid gap-2 d-md-block">
            <button class="btn btn-outline-primary" id = "envoyer" name ="envoyer" type="submit">
                Connexion

            </button>
        </div>   
        <a href="pageInscription.php">Vous n'avez pas de compte ?</a>
        </div>
    </div>
</form>
</body>
</html>

 