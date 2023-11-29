<?php
try {
    session_start();
    // Connexion à la base de données
    include('connection.php');
    
    // Variables représentant l'id_creneau et le statut recherchés
    $id_creneau = 13; // Remplacez 123 par la valeur que vous souhaitez
    $statut = "accepte(e)";
    
    // Préparation et exécution de la requête SQL
    $sql = "SELECT COUNT(id_membre) AS count FROM membre_creneau WHERE id_creneau = :id_creneau AND statut = :statut";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':id_creneau', $id_creneau, PDO::PARAM_INT);
    $stmt->bindParam(':statut', $statut, PDO::PARAM_STR);
    $stmt->execute();
    
    // Récupération du résultat
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    
    // Affichage du nombre d'occurrences
    echo "Le nombre d'occurrences pour id_creneau $id_creneau et statut '$statut' est : " . $result['count'];

    if($result['count']<9){
        
    }
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
?>
