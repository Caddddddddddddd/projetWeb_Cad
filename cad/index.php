<?php
            // Inclure le contenu de la nouvelle barre latérale ici
            session_start();
            //require_once('roleAdmin.php');

            ?>
<!DOCTYPE html>
<html>
<?php
        if (isset($_SESSION['deco_message'])) {
            if ($_SESSION['deco_message'] == "Erreur de connexion") {
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">';
            } else {
                echo '<div class="alert alert-primary alert-dismissible fade show" role="alert">';
            }
            echo $_SESSION['deco_message'];
            echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
            echo '</div>';
            unset($_SESSION['deco_message']);
        }
        session_destroy();
        ?>
    <head>
        <meta charset="UTF-8">
        <title>Accueil</title>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <!-- <link rel="stylesheet" href="../css/style.css"> -->
            <link href="../css/style.css" rel="stylesheet">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
         
         <!-- block stylesheets -->
       

         <!-- block javascripts -->
    
    </head>
          
    <body>
   
    <?php
    require ('navbar.html');
    ?>

    <!-- block body -->

    <section class="home" >
            <div class="content">
                <h3>PlateauVirtuoso  
                </h3>
                
                <div class="col-8 ">
                <p>Plongez dans l'univers captivant des jeux de plateau en ligne avec PlateauVirtuoso, votre destination ludique par excellence. Rassemblez vos amis, défiez des adversaires du monde entier et explorez des mondes fantastiques sans quitter le confort de votre foyer. PlateauVirtuoso offre une expérience de jeu immersive, où la stratégie, l'intrigue et le divertissement se rencontrent virtuellement. Rejoignez la communauté des joueurs passionnés et laissez la magie des jeux de plateau s'épanouir dans le monde numérique. Que l'aventure commence sur PlateauVirtuoso, où chaque dé de dés est une promesse d'excitation !</p>
                </div>
               
                <form method="post">
                <button id="playnow" name="play">Jouer !</button>
                </form>
                <?php
                if (isset($_POST['play'])) {
                    if (isset($_SESSION['id_membre'])) {
                        // La session existe, redirige vers la page de jeu du membre
                        header('Location: ../membre/accueilMembre.php');
                        exit();
                    } else {
                        // La session n'existe pas, redirige vers une autre page (par exemple, la page de connexion)
                        header('Location: loginform.php');
                        exit();
                    }
                }
                 ?>

            </div>
            <div class="col-md-5 py-3 py-md-4">
                <img src="../images/Free_Vector_Board_games_online_composition-removebg-preview.png" alt="" class="home-image">
            </div>
    </section>
    </div>

    <div class="container" id="top-cards">
        <h1>Jeux Top 4</h1>
        <div class="row ">
            
            <div class="col-md-5 py-3 py-md-0 mb-4">
                
                <div class="card" >
                    <img src="../images/rami-multijoueur-html5-2021.gif" alt="">
                    <h5 class="card-titel">RAMI</h5>
                </div>
            </div>
            <div class="col-md-5 py-3 py-md-0 mb-4">
               
                <div class="card" >
                    <img src="../images/tic-tac-toe-couv-788x444.png" alt="">
                    <h5 class="card-titel">MORPION</h5>
                </div>
            </div>
            <div class="col-md-5 py-3 py-md-0">
                
                <div class="card" >
                    <img src="../images/183009455-design-plat-illustration-vectorielle-moderne-concept-de-stratégie-d-entreprise-avec-des-figures-d.jpg" alt="">  
                    <h5 class="card-titel">ECHECS</h5>
                </div>
            </div>
            <div class="col-md-5 py-3 py-md-0">
                
                <div class="card" >
                    <img src="../images/6da8e6912a0063ccc7a37a8f0ec0f320_icon.png" alt="">  
                    <h5 class="card-titel">YATZY</h5>
                </div>
            </div>
        </div>
    </div>
    

    <div class="banner" id="a_propos">
        <div class="content">
            <h1>A propos</h1>
            <p>PlateauVirtuoso est bien plus qu'un simple site de jeu de plateau en ligne. C'est une communauté florissante d'amateurs de jeux qui partagent une passion commune pour l'aventure, la stratégie, et l'amusement sans bornes.<br></p>
<h1>Notre Mission</h1><br>

<p>Chez PlateauVirtuoso, notre mission est de rapprocher les joueurs du monde entier à travers une expérience de jeu de plateau immersive et conviviale. Nous croyons au pouvoir des jeux pour connecter les gens, stimuler l'imagination, et créer des souvenirs durables.<br></p>
<h1>Pourquoi Choisir PlateauVirtuoso ?</h1><br>

<p>Diversité des Jeux : Parcourez notre vaste collection de jeux de plateau, des classiques intemporels aux dernières créations. Il y en a pour tous les goûts et tous les niveaux d'expérience.

    Multijoueur en Ligne : Jouez avec vos amis, votre famille ou des adversaires du monde entier. PlateauVirtuoso offre une plateforme conviviale pour des défis stratégiques passionnants.

    Expérience Immersive : Plongez dans des mondes fantastiques avec des graphismes captivants, des animations fluides, et des effets sonores immersifs. Laissez-vous transporter dans l'univers magique des jeux de plateau.

    Communauté Engagée : Rejoignez une communauté dynamique de joueurs passionnés. Échangez des stratégies, partagez des astuces, et découvrez de nouveaux amis qui partagent votre amour pour les jeux de plateau.?</p>
            
        </div>
    </div>

    <footer id="footer" style="margin-top: 0px;">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 footer-links">
                    <h3>PlateauVirtuoso</h3>
                    <p> S'engage à offrir une expérience de jeu en ligne sécurisée, équitable et divertissante. Nous mettons constamment à jour notre plateforme pour intégrer de nouveaux jeux et améliorer votre expérience de jeu.

Prêt à relever de nouveaux défis et à découvrir l'excitation des jeux de plateau en ligne ? Inscrivez-vous dès maintenant sur PlateauVirtuoso et laissez l'aventure commencer !</p>
                   
                    
                </div>
                
                    
                
                <div class="col-lg-4 col-md-6 footer-links">
                    <h3>Nos Services</h3>
                    <p>Bien plus qu'une simple plateforme de jeux de plateau en ligne, PlateauVirtuoso vous offre une gamme de services exceptionnels pour enrichir votre expérience de jeu. Découvrez comment nous allons au-delà des attentes pour rendre votre aventure ludique encore plus passionnante.</p>
                   
                </div>
                <div class="col-lg-4 col-md-6 footer-link">
                    <h3>Contact</h3>
                    <strong><i class="fas fa-phone"></i>Phone: <strong>+33 7 65 68 83 85</strong></strong><br>
                    <strong><i class="fas-solid fa-envelope"></i>Email: <strong>cadhel.agossa@groupe-esigelec.org</strong></strong>
                    <div class="socail-links mt-3">
                       
                        <a href="https://www.linkedin.com/in/charly-ken-capo-chichi-05ab99268/" class="linkedin"><i class="fa-brands fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="container py-4">
        <div class="copyright">
            &copy; Copyright<strong>Games</strong>.All Rights Reserved
        </div>
    </div>
    </footer>

</body>
</html>