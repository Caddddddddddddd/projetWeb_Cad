<?php
namespace App1;

include("connection.php");
error_reporting(E_ALL);
ini_set('display_errors', 1);

class Creneau {
    /**
     * Récupère les éléments entre deux dates 
     */
    public function getEventsBetween (\DateTime $start, \DateTime $end): array {
        global $db; // Utilisez le mot-clé global pour faire référence à la variable $db

        $sql = ("SELECT * FROM creneau WHERE date_debut BETWEEN '{$start->format('Y-m-d 00:00:00')}' AND '{$end->format('Y-m-d 23:59:59')}' ");
        $stmt = $db->query($sql);
        $resultat= $stmt->fetchAll();
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

    public function find (int $id): array {
        
        global $db;
            $sql1 = ("SELECT * FROM creneau WHERE id_creneau = $id LIMIT 1");
            $stmt1 = $db->query($sql1);
            $resultat1 = $stmt1 -> fetch();

        return $resultat1;
        
       // $this->db->query("SELECT * FROM creneau WHERE id_creneau = $id LIMIT 1")->fetch();
    }
    
    /* $sql = ("SELECT * FROM creneau WHERE date_debut BETWEEN '{$start->format('Y-m-d 00:00:00')}' AND '{$end->format('Y-m-d 23:59:59')}' ");
        $stmt = $db->query($sql);
        $resultat= $stmt->fetchAll();
        return $resultat;  */
}
?>
