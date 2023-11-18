<?php

        include('connection.php');
        
        global $db;
        $options = [
            'cost' => 12,
            ];
        


        if(isset($_POST['formsend1']))
        {


            echo"0";
                if(isset($_POST['nomjeux'], $_POST['description'], $_POST['categorie'], $_FILES['userfile'], $_FILES['imagejeux'])) {
                    echo"1";
                     $nomjeux = $_POST['nomjeux'];
                     $descriptions = $_POST['description'];
                     $categorie = $_POST['categorie'];
                     $userfile = $_FILES['userfile']['tmp_name'];


                     $imagejeuxs = $_FILES['imagejeux']["tmp_name"];
                     $idjeuximages = "1";


                     $regles = file_get_contents($userfile, FILE_BINARY);
                     $images = file_get_contents($imagejeuxs,  FILE_BINARY);



                
               
                
                $q = $db->prepare("INSERT INTO jeux(nom_jeux, descriptions, categorie, regles) VALUES(:nomjeux, :descriptions, :categorie, :regles)");
                $q->execute([
                  'nomjeux' => $nomjeux,
                 'descriptions' => $descriptions,
                 'categorie' => $categorie,
                 'regles' => $regles
                 ]);  

                 $q1 = $db->prepare("INSERT INTO imagejeux(images, id_jeux_images) VALUES(:images, :idjeuximages)");
                $q1->execute([
                  'images' => $images,
                 'idjeuximages' => $idjeuximages
                 ]);  
                 //$password = ;
                echo" Jeu enregistré : ".$_POST['nomjeux'];                
             }

            
         }
           else {
                echo"Probleme";
                }
    ?>
    