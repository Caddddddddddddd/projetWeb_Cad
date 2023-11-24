<?php

namespace App; 

class Month {
    public $days = ['Lundi','Mardi','Mercredi',"Jeudi",'Vendredi','Samedi','Dimanche'];

    private $months = ['Janvier', 'Fevrier', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Décembre'];
    public $month;
    public $year;

    /**
     * @param int|null $month le mois est compris entre 1 & 12
     * @param int|null $year l'année
     * @throws \Exception si le mois ou l'année ne sont pas valides
     */
    public function __construct($month = null, $year = null) {
        if ($month === null) {
            $month = intval(date('m'));
        }
        if ($year === null) {
            $year = intval(date('Y'));
        }

        if ($month < 1 || $month > 12) {
            throw new \Exception("Le mois $month n'est pas valide. Le mois doit être compris entre 1 et 12.");
        }

        if ($year < 1970) {
            throw new \Exception("L'année $year est inférieure à 1970. L'année doit être égale ou supérieure à 1970.");
        }

        $this->month = $month;
        $this->year = $year;
    }

    /**
     * Retourne le premier jour du mois 
     * @return string
     */
    public function getStratingDay ():\DateTime {
 
        return new \DateTime("{$this->year}-{$this->month}-01");
    }

    /**
     * Retourne le mois en toute lettre ex Mars2023
     * @return string
     */
    public function toString(): string {
        return $this->months[$this->month - 1].' '. $this->year;
    }

    public function getWeeks(): int {
        $start = $this-> getStratingDay();// \DateTime parce que cette methode n'est pas de notre classe est est de la classe php
        $end = (clone $start)->modify('+1 month -1 day');
        $weeks = intval($end->format('W')) - intval($start->format('W')) + 1;
        if($weeks < 0){
            $weeks = intval($end->format('W'));
        }
        return $weeks;
    }



    /**
     * Retourne si le jour est dans le mois en cours ou pas
     */
    public function withinMonth (\DateTime $date): bool {
        return $this->getStratingDay()->format('Y-m') == $date->format('Y-m');
    }


    /**
     * Retourne le mois suivant
     */
    public function nextMonth(): Month
    {
        $month = $this->month + 1;
        $year = $this->year;
        if($month > 12){
            $month = 1;
            $year = $year + 1;
        }
        return new Month($month, $year);
    }


    /**
     * Retourne le mois precedent
     */
    public function previousMonth(): Month
    {
        $month = $this->month - 1;
        $year = $this->year;
        if($month < 1){
            $month = 12;
            $year -= 1;
        }
        return new Month($month, $year);
    }
}
?>
