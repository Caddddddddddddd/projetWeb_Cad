
<?php
    if (isset($_POST['envoyer'])) {
        include('connection.php');
        global $db;
        $username = $_POST['identifiant'];
        $password = $_POST['motDePasse'];
        
    
        $req = $db->prepare("SELECT id_membre, pseudo, email, passwords, privilege FROM tablemembre WHERE email = ?");
        $req->execute([$username]);
        $user = $req->fetch(); 
    echo $user['pseudo'];
//(password_verify($password,$row["password"])
    if (password_verify($password,$user["passwords"])) {
       
        if($user['privilege'] == "admin"){
            session_start();
            $_SESSION['privilege'] == "admin";
            $_SESSION['id_membre'] = $user['id_membre'];
            

            header('Location: acceuilAdmin.php');
            exit();
        }elseif($user['privilege'] == "membre"){
            session_start();
            $_SESSION['privilege'] == "membre";
            $_SESSION['id_membre'] = $user['id_membre'];
            header('Location: ../membre/accueilMembre.php');
        exit();
        }     
    else{
        header('Location: loginform.php');
        exit();
    }
    }
}
        
    ?>