<?php
    define('HOST','localhost');
    define('DB_NAME','projet');
    define('USER','root');
    define('PASS',' ');



    try{
        $db = new PDO("mysql:host=" . HOST . ";dbname=" . DB_NAME, USER, PASS);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        

    } catch(PDDException $e){
        echo $e;
    }

?>


