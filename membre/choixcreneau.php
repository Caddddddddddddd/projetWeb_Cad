<?php
    require ('sidebar.php');
?>


<div class="container">
<h1>Liste des créneaux</h1>

<form method="GET" action="traitement_inscription_creneau.php">


<select class="form-select" name="creneau" aria-label="Default select example">
<?php
    require ('selectioncreneau.php');

 
    foreach ($resultats as $row) {
        $idJeu = $row["id_jeux"];

        echo "<optgroup label='" . $row["nom_jeux"] . "'>" ;
    
        
    $ps1->bindParam(':idJeu', $row["id_jeux"], PDO::PARAM_INT);
    $ps1->execute();

    while($resultats1 = $ps1->fetch(PDO::FETCH_ASSOC))
    {
        
    echo "<option value='" . $resultats1["id_creneau"] . "'>" . $resultats1["date"] . "</option>";
}

    echo "</optgroup>";
   
}


//echo $row["id_jeux"];
?>
</select>
<input type="submit" name="inscrire" class="btn btn-success">


</form>

</div>


</body>
</html>