
        <?php 
        
        // Inclure le contenu de la nouvelle barre latérale ici
        require_once('roleAdmin.php');

        
            require 'month.php';
            require 'pageCreneau.php';
            require 'headercalendar.php';

            
            try{
                $events = new App1\Creneau();

                $month = new App\Month($_GET['month'] ?? null, $_GET['year'] ?? null);
                $start= $month->getStratingDay();
                $start = $start->format('N') == '1' ? $start : $month->getStratingDay()->modify('last monday');
                $weeks= $month->getWeeks();
                $end= (clone $start)->modify( '+' . (6 + 7 * ($weeks -1)).'days');
                $events = $events->getEventsBetweenByDay($start,$end);
            }
            catch(\Exception $e){
                $month = new App\Month();
            }
            
        
        ?>

        <div class="calendar">
            
        <div class="d-flex flex-row align-items-center justify-content-between">

                    <h2><?= $month->toString(); ?></h2>
                <div>
                    <a href="pageCalendar.php?month=<?= $month->previousMonth()->month; ?>&year=<?= $month->previousMonth()->year; ?>" class="btn btn-primary">&lt;</a>
                    <a href="pageCalendar.php?month=<?= $month->nextMonth()->month; ?>&year=<?= $month->nextMonth()->year; ?>" class="btn btn-primary">&gt;</a>

                </div>
            </div>





<table class="calendar__table calendar__table--<?= $weeks; ?>weeks" >

    <?php for($i =0; $i < $weeks; $i++): ?>
    <tr>
        <?php foreach($month->days as $k => $day): 
            $date= (clone $start)->modify("+" . ($k + $i * 7) .  "days");
            $eventsForDay = $events[$date->format('Y-m-d')] ?? [];
            ?>
        <td class="<?= $month->withinMonth($date) ? '' : 'calendar__othermonth'; ?>">
        <?php if($i == 0): ?>
        <div class="calendar__weekday"><?= $day; ?></div>
        <?php endif; ?>
        <div class="calendar__day"><?= $date->format('d'); ?></div>
        <?php foreach($eventsForDay as $event): ?>
        <div class="calendar__event">
            
        <?= (new DateTime($event['date_debut']))->format('H:i') ?> - <a href="pageaffichageCreneau.php?id=<?= $event['id_creneau'];?>">
        <?= $event['nom_jeux_creneau']; ?>
    </a>
    
    </div>
        <?php endforeach;?>  
        </td>
        <?php endforeach;?>

    </tr>
        <?php endfor; ?>
    </table>
    <a href="pageformajoutCreneau.php" class="calendar_button">+</a>

        </div>
        <?php require 'footerCalendar.php';  ?>
    
