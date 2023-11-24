<?php


namespace App2;


class Validator {

    
    public function validates(array $data){
        $this->errors = [];
        $this-> data = $data

        
    }
    
    
    



    public function date (string $field){

    if(\DateTime::createFormFormat('Y-m-d', $this->data[$field]) == false){
            $this->errors[$field] = "La date ne semble pas valide";

    }
}

    public function time (string $field){

    if(\DateTime::createFormFormat('H:i', $this->data[$field]) == false){
            $this->errors[$field] = "Le temps ne semble pas valide";

    }

    }

    public function beforeTime
}
?>