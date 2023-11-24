<?php 
namespace App2;


class CreneauValidator extends Validator{

    public function validates(array $date){
        parent::validates($date);

        $this->validate('date','date');
        $this->validate('heureDebut','time');
        $this->validate('heureFin','time');
        $this->validate('heureDebut','beforeTime','end');

        
        return $this->errors
    }
}




?>

