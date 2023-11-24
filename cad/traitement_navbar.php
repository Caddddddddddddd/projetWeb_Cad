<?php
session_start();
             
                    if (isset($_SESSION['id_membre'])) {
                        // La session existe, redirige vers la page de jeu du membre
                        header('Location: ../membre/liste_favoris.php');
                        exit();
                    } else {
                        // La session n'existe pas, redirige vers une autre page (par exemple, la page de connexion)
                        header('Location: loginform.php');
                        exit();
                    }
                
                 ?>