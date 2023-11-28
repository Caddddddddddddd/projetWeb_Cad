<?php
    $pseudo = "cadhel";
    $age = 18;
    $email = "farelagossa@gmail.com";
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
    ?>
    <h2>Inscription</h2>
    <!-- Menu de navigation -->
    
    <!-- <form action="" method = "post">
        <input type="text" name="pseudo"id="pseudo" placeholder = "Votre nom" required><br/>
        <input type="email" name="email" id = "email" placeholder = "Votre mail" required><br/>
        <input type="password" name="passwords" id = "passwords" placeholder = "Votre mot de passe" required><br/>
        <input type="password" name="cdpassword" id = "cdpassword" placeholder = "Confirmation mot de passe" required> <br/>       
        <input type="submit" name="formsend" id = "formsend">

    </form> -->
    <form  method ="post" action="" enctype="multipart/form-data">
    <div class="container">
    <div class="row my-3">
       <div class="row">

        <div class="col-md-6">
            <label for="nom" class="form-label">Nom </label>
            <input type="text" class="form-control " id="pseudo" name="pseudo" placeholder="Votre nom...." required>
        </div>

        <div class="col-md-6">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control " id="email" name="email" placeholder="Votre email..." required>
        </div>

        <div class="col-md-6">
            <label for="motdepasse" class="form-label">Mot de passe</label>
            <input type="password" class="form-control " id="passwords" name="passwords" placeholder="Mot de passe..." required>
        </div>

        <div class="col-md-6">
            <label for="motdepasse" class="form-label">Confirmation Mot de passe</label>
            <input type="password" class="form-control " id="cdpassword" name="cdpassword" placeholder="Mot de passe..." required>
        </div>

       </div>
        <div class="row my-3">
        <div class="d-grid gap-2 d-md-block">
            <button class="btn btn-outline-primary" id = "formsend" name ="formsend" type="submit">
                Ajouter

            </button>
        </div>   
        </div>
    </div>
</form>
    <?php

        include('connection.php');
        global $db;
        $options = [
            'cost' => 12,
            ];
        


        if(isset($_POST['formsend']))
        {

               /*  $pseudo= $_POST['pseudo']; 
                //$age= $_POST['age'];  
                $email= $_POST['email'];
                $passwords = $_POST['passwords'];
                $cdpassword = $_POST['cdpassword']; */


                if(isset($_POST['pseudo'], $_POST['email'], $_POST['passwords'], $_POST['cdpassword'])) {
                     $pseudo = $_POST['pseudo'];
                     $email = $_POST['email'];
                     $passwords = $_POST['passwords'];
                     $cdpassword = $_POST['cdpassword'];
                
               if($passwords == $cdpassword){
                
                $q = $db->prepare("INSERT INTO tablemembre(pseudo,email,passwords,privilege) VALUES(:pseudo,:email,:passwords,:privilege)");
                $q->execute([
                  'pseudo' => $pseudo,
                 'email' => $email,
                 'passwords' => password_hash($passwords, PASSWORD_BCRYPT, $options),
                 'privilege' => "membre"
                 ]);  
                 //$password = ;
               
                 $_SESSION['message'] = "Inscription réussie";
                 header('location:loginform.php');


               } else {
                $_SESSION['message'] = "Les mots de passe ne correspondent pas.";
              
               }

                
             }
          
            
         }
           else {
              //  echo"Probleme";
                }
               
    ?>
    
</body>
</html>