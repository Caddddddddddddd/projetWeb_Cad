<?php

        include('connection.php');
        
        global $db;
        $options = [
            'cost' => 12,
            ];
        


        if(isset($_POST['formsend1']))
        {

            
            
            echo"0";
                if(isset($_POST['nomjeux'], $_POST['date'], $_POST['heureDebut'], $_POST['heureFin']) && ($_POST['heureFin'] > $_POST['heureDebut'])) {
                    
                  $nomjeux = $_POST['nomjeux'];
                  $dateform = $_POST['date'];
                  
                  // Convertir les chaînes de caractères en objets DateTime
                  $heureDebut = new DateTime($_POST['heureDebut']);
                  $heureFin = new DateTime($_POST['heureFin']);
                  
                  // Formater les objets DateTime comme des chaînes au format 'Y-m-d H:i'
                  $heureDebutFormatted = $heureDebut->format('H:i');
                  $heureFinFormatted = $heureFin->format('H:i');
                  
                  // Concaténer la date avec l'heure pour les champs de début et de fin
                  $heureDebutAvecDate = $dateform . ' ' . $heureDebutFormatted;
                  $heureFinAvecDate = $dateform . ' ' . $heureFinFormatted; 
                  
                     
                    
                     

                     
                  $q = $db->prepare("SELECT id_jeux FROM jeux WHERE nom_jeux = ?");
                  $q->bindParam(1, $nomjeux, PDO::PARAM_STR);
                  $q->execute();
                  $result = $q->fetch(PDO::FETCH_ASSOC);
                  $idjeuximages = $result['id_jeux'];

                
               
                
                $q = $db->prepare("INSERT INTO creneau(nom_jeux_creneau, date_debut, id_jeux_creneau, date_fin) VALUES(:nom_jeux_creneau, :date_debut, :id_jeux_creneau, :date_fin)");
                $q->execute([
                  'nom_jeux_creneau' => $nomjeux,
                 'date_debut' => $heureDebutAvecDate,
                 'id_jeux_creneau' => $idjeuximages,
                 'date_fin' => $heureFinAvecDate
                 ]);  
                 /* $id_jeux = $db->lastInsertId(); // Récupérer l'ID du jeu inséré

                 $q1 = $db->prepare("INSERT INTO imagejeux(images, id_jeux_images) VALUES(:images, :idjeuximages)");
                $q1->execute([
                  'images' => $imagejeux,
                 'idjeuximages' => $id_jeux
                 ]);  
                 //$password = ;
                echo" créneau enregistré : ".$_POST['nomjeux'];      
                header("location:list.php");        */  
             }

             header("location:pageCalendar.php");
         }
           else {
                echo"Probleme";
                }
    ?>
    