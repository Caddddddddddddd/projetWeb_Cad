<?php
namespace App1;
require_once('roleAdmin.php');


            // Inclure le contenu de la nouvelle barre latérale ici
            

    
include("connection.php");
error_reporting(E_ALL);
ini_set('display_errors', 1);

class Creneau {
    /**
     * Récupère les éléments entre deux dates 
     */
    public function getEventsBetween(\DateTime $start, \DateTime $end): array {
        global $db;
    
        $sql = "SELECT creneau.*, jeux.nom_jeux
                FROM creneau
                LEFT JOIN jeux ON creneau.id_jeux_creneau = jeux.id_jeux
                WHERE creneau.date_debut BETWEEN '{$start->format('Y-m-d 00:00:00')}' AND '{$end->format('Y-m-d 23:59:59')}'";
    
        $stmt = $db->query($sql);
        $resultat = $stmt->fetchAll();
    
        return $resultat;
    }
    

    /**
     * Récupère les éléments entre deux dates index par jour
     */
    public function getEventsBetweenByDay (\DateTime $start, \DateTime $end): array {
        $events = $this->getEventsBetween($start, $end);
        $days = [];
        foreach($events as $event){
            $date = explode( ' ',$event['date_debut'])[0];
            if(!isset($days[$date])){
                $days[$date] = [$event];
            } else {
                $days[$date][] = $event;
            }
        }
        return $days;
    }

    public function find(int $id): array {
    global $db;
    $sql = "SELECT creneau.*, jeux.nom_jeux
            FROM creneau
            LEFT JOIN jeux ON creneau.id_jeux_creneau = jeux.id_jeux
            WHERE creneau.id_creneau = :id
            LIMIT 1";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':id', $id, \PDO::PARAM_INT);
    $stmt->execute();
    $resultat = $stmt->fetch();

    return $resultat;
}

     // $this->db->query("SELECT * FROM creneau WHERE id_creneau = $id LIMIT 1")->fetch();
    
    /* $sql = ("SELECT * FROM creneau WHERE date_debut BETWEEN '{$start->format('Y-m-d 00:00:00')}' AND '{$end->format('Y-m-d 23:59:59')}' ");
        $stmt = $db->query($sql);
        $resultat= $stmt->fetchAll();
        return $resultat;  */
}
?>
