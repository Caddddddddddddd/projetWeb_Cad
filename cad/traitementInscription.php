<?php
session_start();
include('connection.php');
global $db;
$options = [
    'cost' => 12,
];

if (isset($_POST['formsend'])) {
    if (isset($_POST['pseudo'], $_POST['email'], $_POST['passwords'], $_POST['cdpassword'])) {
        $pseudo = $_POST['pseudo'];
        $email = $_POST['email'];
        $passwords = $_POST['passwords'];
        $cdpassword = $_POST['cdpassword'];

        if ($passwords == $cdpassword) {
            try {
                $q = $db->prepare("INSERT INTO tablemembre(pseudo,email,passwords,privilege) VALUES(:pseudo,:email,:passwords,:privilege)");
                $q->execute([
                    'pseudo' => $pseudo,
                    'email' => $email,
                    'passwords' => password_hash($passwords, PASSWORD_BCRYPT, $options),
                    'privilege' => "membre"
                ]);

                $req = $db->prepare("SELECT id_membre, pseudo, email, passwords, privilege FROM tablemembre WHERE email = ?");
                $req->execute([$email]);
                $user = $req->fetch();
                $_SESSION['pseudo'] = $user['pseudo'];

                $_SESSION['message_email'] = 'Inscription réussie ' . $_SESSION['pseudo'] . ' !';
                header("location: loginform.php");
                exit();
            } catch (PDOException $e) {
                if ($e->getCode() == '23000' && strpos($e->getMessage(), 'Duplicate entry') !== false) {
                    // Gestion spécifique pour une violation de contrainte d'unicité
                    
                    $_SESSION['message_email']="Cet utilisateur existe deja !";
                    header("location: pageInscription.php");
                } else {
                    // Gestion d'autres erreurs PDO
                    echo "Erreur: " . $e->getMessage();
                }
            }
        } else {
            echo "Les mots de passe ne correspondent pas.";
        }
    }
} else {
    // Autre logique en cas de problème
    // echo "Problème";
}
?>
