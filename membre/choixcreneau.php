
<?php
    require 'sidebar.php';
?>

<?php
    require 'selectioncreneau.php';
?>



<div class="container">
<h1>List des jeux</h1>

<form action="" method="post">

<select class="form-select" aria-label="Default select example">
  <option selected>Open this select menu</option>
  <?php 
 
  foreach($rows as $row){ ?>
    <option value="<?=$row['id_creneau'] ?>"><?= $row['date'] ?></option>
<?php 

}  
?>
</select>
</form>
<?php
        var_dump($rows);
    ?>
</div>


</body>
</html>