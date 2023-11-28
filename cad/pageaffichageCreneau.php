<?php 
require_once('roleAdmin.php');
require 'pageCreneau.php';
require 'headercalendar.php';

            // Inclure le contenu de la nouvelle barre latérale ici
            
            

            

$events = new App1\Creneau();

if(! isset($_GET['id'])){
    header('location: 404.php');
}
$event = $events->find($_GET['id']);
    
?>

<h1><?=  htmlentities($event['nom_jeux_creneau']); ?></h1>

<ul>
    <li>Date: <?= (new DateTime($event['date_debut']))->format('d/m/Y'); ?></li>
    <li>Heure de Demarrage: <?= (new DateTime($event['date_debut']))->format('H:i'); ?></li>
    <li>Heure de Fin: <?= (new DateTime($event['date_fin']))->format('H:i'); ?></li>
</ul>

<?php require 'footerCalendar.php'; ?>
