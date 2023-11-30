<?php
session_start(); // Appelé une seule fois au début du script

if (isset($_POST['envoyer'])) {
    include('connection.php');
    global $db;
    $username = $_POST['identifiant'];
    $password = $_POST['motDePasse'];

    $req = $db->prepare("SELECT id_membre, pseudo, email, passwords, privilege FROM tablemembre WHERE email = ?");
    $req->execute([$username]);
    $user = $req->fetch();

    if (password_verify($password, $user["passwords"])) {
        if ($user['privilege'] == "admin") {
            $_SESSION['privilege'] = "admin";
           $_SESSION['PROFILE'] = $user;
            $_SESSION['id_user'] = $user['id_membre'];
            $_SESSION['pseudo'] = $user['pseudo'];

            /* var_dump($_SESSION['privilege']);
            var_dump($_SESSION['PROFILE']);
            var_dump($_SESSION['id_user']); */
            $_SESSION['message'] = 'Authentification réussi  ' .   $_SESSION['pseudo'] . ' !';

           


            header('Location: acceuilAdmin.php');
            exit();
        } elseif ($user['privilege'] == "membre") {
            $_SESSION['privilege'] = "membre";
            $_SESSION['PROFILE'] = $user;
            $_SESSION['id_user'] = $user['id_membre'];
            

            header('Location: ../membre/accueilMembre.php');
            exit();
        } else {
            header('Location: loginform.php');
            exit();
        }
    }
    else{
        $_SESSION['message'] = 'Erreur ! Entrez à nouveau vos identifiants';

           


            header('Location: loginform.php');
    }
}
?>