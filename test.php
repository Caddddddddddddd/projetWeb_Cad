<!DOCTYPE html>
<html>
<head>
    <title>Remplir un select avec PHP et MySQL (PDO)</title>
</head>
<body>

<form>
    <label for="choix">Sélectionnez une option :</label>
    <select id="choix" name="choix">
        <?php
            try {
                // Connexion à la base de données avec PDO
                require ('cad/connection.php');
               
                // Requête SQL pour récupérer les données de la table
                $requete = "SELECT * FROM creneau";
                
                // Préparer la requête
                $stmt = $db->prepare($requete);
                
                // Exécuter la requête
                $stmt->execute();
               
                // Récupérer les résultats
                $resultats = $stmt->fetchAll(PDO::FETCH_ASSOC);
                
                // Afficher les options du select
                foreach ($resultats as $row) {
                    
                    echo "<option value='" . $row["id_creneau"] . "'>" . $row["date"] . "</option>";
                }
                
                
                // Fermer la connexion à la base de données
                $db = null;
            } catch (PDOException $e) {
                die("Erreur : " . $e->getMessage());
            }
        ?>
    </select>
</form>

</body>
</html>
