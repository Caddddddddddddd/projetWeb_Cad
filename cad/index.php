<?php
session_start();
?>
<!DOCTYPE html>
<html>
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
        <div class="row">
            <div class="col-md-5 py-3 py-md-0">
                <div class="card" style="background-color: #1c1c50;">
                    <img src="../images/Puissance 4.jpeg" alt="">
                    <div class="card-img-overlay">
                        
                        <h5 class="card-titel">Puissance 4</h5>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repudiandae asperiores nisi sapiente cum maiores, harum consectetur a. Dolorem, nemo! Dolores mollitia laborum vel nihil sequi tempora aperiam quos alias non?</p>
                    </div>
                </div>
            </div>
            <div class="col-md-5 py-3 py-md-0">
                <div class="card" style="background-color: #1c1c50;">
                    <img src="../images/Puissance 4.jpeg" alt="">
                    <div class="card-img-overlay">
                        
                        <h5 class="card-titel">Puissance 4</h5>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repudiandae asperiores nisi sapiente cum maiores, harum consectetur a. Dolorem, nemo! Dolores mollitia laborum vel nihil sequi tempora aperiam quos alias non?</p>
                    </div>
                </div>
            </div>
            <div class="col-md-5 py-3 py-md-0">
                <div class="card" style="background-color: #1c1c50;">
                    <img src="../images/Puissance 4.jpeg" alt="">
                    <div class="card-img-overlay">
                        
                        <h5 class="card-titel">Puissance 4</h5>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repudiandae asperiores nisi sapiente cum maiores, harum consectetur a. Dolorem, nemo! Dolores mollitia laborum vel nihil sequi tempora aperiam quos alias non?</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="banner">
        <div class="content">
            <h1>Get Up To 50% off</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga saepe in mollitia incidunt blanditiis. Error similique praesentium vel, porro, doloremque consequuntur debitis alias corporis quod fuga, ratione nihil. Ipsum, ad?</p>
            <div id="bannerbtn"><button>JOUER</button></div>
        </div>
    </div>

    <footer id="footer" style="margin-top: 0px;">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 footer-links">
                    <h3>Fasion</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum cum aperiam eligendi maiores neque commodi enim sequi nostrum dolor maxime, dicta incidunt fugit inventore soluta iste nesciunt libero odit necessitatibus?</p>
                    <p>
                        Karcahi<br><br>
                        Sind<br><br>
                        Pakistan<br><br>
                    </p>
                    <strong><i class="fas fa-phone"></i>Phone: <strong>+0000000000</strong></strong>
                    <strong><i class="fas-solid fa-envelope"></i>Email: <strong>example@gmail.com</strong></strong>
                </div>
                <div class="col-lg-3 col-md-6 footer-links">
                <h4>Useful links</h4>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="index.php">A propos</a></li>
                        <li><a href="index.php">Contact</a></li>
                        <li><a href="index.php">Services</a></li>
                        <li><a href="index.php">Privacy policy</a></li>
                    </ul>
                </div>
                    
                
                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Our Services</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus beatae commodi, dicta quos ab vero deserunt nostrum modi nesciunt doloribus magnam dolor temporibus voluptatum iure velit praesentium illo amet fuga.</p>
                    <ul>
                        <li><a href="#">Smart Phone</a></li>
                        <li><a href="#">Smart watch</a></li>
                        <li><a href="#">Airpods</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 footer-link">
                    <h4>Our Social Network</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam sunt quibusdam culpa, itaque consectetur dolorum. Natus dolores maiores inventore laborum recusandae consectetur sunt impedit aut. Voluptas iste officia at incidunt?</p>
                    <div class="socail-links mt-3">
                        <a href="#" class="twitter"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#" class="twitter"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#" class="twitter"><i class="fa-brands fa-google-plus"></i></a>
                        <a href="#" class="twitter"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#" class="twitter"><i class="fa-brands fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="container py-4">
        <div class="copyright">
            &copy; Copyright<strong>Fashion</strong>.All Rights Reserved
        </div>
    </div>
    </footer>

</body>
</html>