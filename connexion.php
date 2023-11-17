<?php
//Debut 
if (isset($_POST['envoyer'])) {

    $bdd = new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8', 'root', '');
    $username = $_POST['identifiant'];
    $password = $_POST['motDePasse'];
    echo $user['nom'];
    
    $req = $bdd->prepare("SELECT id, prenom, mdp,role FROM users WHERE email = ?");
    $req->execute([$username]);
    $user = $req->fetch();
    echo $user['prenom'];

    if ($user && $password==$user['mdp'] && $user['role'] == "membre" ) {
       
 
        // Redirigez l'utilisateur vers la page d'accueil des membres
        header('Location: accueilMembre.php');
        exit();
    } //elseif ($user && password_verify($password, $user['mdp']) && $user['role'] == "administrateur" ){
        //header('Location: acceuilAdmin.php');
        //exit();
    //}
    else{
        header('Location: loginform.php');
        exit();
    }
}
    ?>