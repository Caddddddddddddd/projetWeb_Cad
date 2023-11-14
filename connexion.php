
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

    if ($user && $password==$user['passwords']) {
       
        if ($user['privilege'] == "admin") {
            session_start();
            $_SESSION['privilege'] == "admin";
            header('Location: acceuilAdmin.php');
            exit();
        }elseif($user['privilege'] == "membre"){
            session_start();
            $_SESSION['privilege'] == "membre";
            header('Location: accueilMembre.php');
        exit();
        }     
    else{
        header('Location: loginform.php');
        exit();
    }
    }
}
        
    ?>