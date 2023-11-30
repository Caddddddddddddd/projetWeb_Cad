
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/cssCalendar.css" >
    <link rel="stylesheet" href="../css/styleSeconnecter.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"> 
    <title>Creneau</title>
</head>
<body>



<?php 
require_once('roleAdmin.php');
require 'pageCreneau.php';
require 'headercalendar.php';
            
            

            

$events = new App1\Creneau();

if(! isset($_GET['id'])){
    header('location: 404.php');
}
$event = $events->find($_GET['id']);
    
?>

<h1><?=  htmlentities($event['nom_jeux']); ?></h1>

<ul>
    <li>Date: <?= (new DateTime($event['date_debut']))->format('d/m/Y'); ?></li>
    <li>Heure de Demarrage: <?= (new DateTime($event['date_debut']))->format('H:i'); ?></li>
    <li>Heure de Fin: <?= (new DateTime($event['date_fin']))->format('H:i'); ?></li>
</ul>
<a href="pageCalendar.php" class="bouton_retour">
    <i class="fas fa-arrow-left"></i> Retour
</a>
<?php require 'footerCalendar.php'; ?>


</body>
</html>