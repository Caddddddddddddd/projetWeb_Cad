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



                
               
                
                $q = $db->prepare("UPDATE  jeux SET nom_jeux = :nomjeux, descriptions = :descriptions, categorie = :categorie, regles = :regles WHERE id_jeux = :id_jeux");
                $q->execute([
                  'nomjeux' => $nomjeux,
                 'descriptions' => $descriptions,
                 'categorie' => $categorie,
                 'regles' => $regles,
                 'id_jeux' => 
                 ]);  
                 $id_jeux = $db->lastInsertId(); // Récupérer l'ID du jeu inséré

                 $q1 = $db->prepare("UPDATE  imagejeux SET(images, id_jeux_images) VALUES(:images, :idjeuximages)");
                $q1->execute([
                  'images' => $images,
                 'idjeuximages' => $id_jeux
                 ]);  
                 //$password = ;
                echo" Jeu enregistré : ".$_POST['nomjeux'];                
             }

            
         }
           else {
                echo"Probleme";
                }
    ?>
    