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
                     
                     $userfile = $_FILES['userfile']['name'];
                     $fichierTempuserfile=$_FILES['userfile']['tmp_name'];//recupérer le nom du fichier temporaire téléchargé sur le serveur.
                     move_uploaded_file($fichierTempuserfile,'../regles_jeux/'.$userfile);

                     $imagejeux = $_FILES['imagejeux']['name'];
                     $fichierTempimagesjeux=$_FILES['imagejeux']['tmp_name'];//recupérer le nom du fichier temporaire téléchargé sur le serveur.
                     move_uploaded_file($fichierTempimagesjeux,'../images/'.$imagejeux);
                     $idjeuximages = "1";


                     /* $regles = file_get_contents($userfile, FILE_BINARY);
                     $images = file_get_contents($imagejeuxs,  FILE_BINARY); */




                
               
                
                $q = $db->prepare("INSERT INTO jeux(nom_jeux, descriptions, categorie, regles) VALUES(:nomjeux, :descriptions, :categorie, :regles)");
                $q->execute([
                  'nomjeux' => $nomjeux,
                 'descriptions' => $descriptions,
                 'categorie' => $categorie,
                 'regles' => $userfile
                 ]);  
                 $id_jeux = $db->lastInsertId(); // Récupérer l'ID du jeu inséré

                 $q1 = $db->prepare("INSERT INTO imagejeux(images, id_jeux_images) VALUES(:images, :idjeuximages)");
                $q1->execute([
                  'images' => $imagejeux,
                 'idjeuximages' => $id_jeux
                 ]);  
                 //$password = ;
                echo" Jeu enregistré : ".$_POST['nomjeux'];      
                header("location:list.php");         
             }

           
         }
           else {
                echo"Probleme";
                }
    ?>
    