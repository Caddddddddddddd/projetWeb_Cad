<?php
        
        // Inclure le contenu de la nouvelle barre latérale ici
        session_start();
        require_once('roleAdmin.php');

        
    


    $titre = "Liste des jeux";
    include 'navbar.html';
    //include 'menu.inc.php';

?>
<div class="container">
<h1>List des jeux</h1>



<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nom</th>
      <th scope="col">Photo</th>
      
  </thead>
  <tbody>
  
  <?php

// Connexion :
require_once("connection.php");
$req="SELECT * FROM jeux";
$ps=$db->prepare($req);
$ps->execute();



  while($row=$ps->fetch()) 
  {     
    echo '<tr>';     
    echo  '<th scope="row">'.$row['ID'].'</th>';
    echo'<td>'.$row['NOM'].'</td>';
    echo '<td><img src="images/'.$row['FILE'].'" width="100px" height="100px"></td>';
    echo '</tr>';
  
}


?>

</tbody>

</table>


</div>
<?php
    include 'footer.inc.php';
?>
