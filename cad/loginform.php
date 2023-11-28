<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/styleSeconnecter.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;1,500&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>Page de connexion</title>
  
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
    ?>
  <div class="PagedeConnection">
    <div class="enregistrement" id="formulaire">
      <h2 class="Titre_Formulaire">Formulaire</h2>
      <div class="form-formulaire-container">
        <form action="connexion.php" method="post" class="form_formulaire">
          <div class="form_top">
            <div class="form_left">
              <div>
                <label for="identifiant">identifiant</label>
                <input type="text" name="identifiant" placeholder="farelagossa@gmai.com">

              </div>
               
              <div>
                <label for="motDePasse">Mot de Passe</label>
                <input type="password" name="motDePasse" placeholder=".......">
              </div>
            </div>
          </div>
          <div class="form-bottom">
            <input type="submit" name="envoyer" value="Se connecter">

          </div>
        </form>
      </div>
    </div>
    <div class="separator"></div>
    <a href="pageInscription.php">Vous n'avez pas de compte ?</a>
    
</body>
</html>