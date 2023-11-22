<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Inclure la feuille de style Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <form method="get" action="test.php">
            <div class="form-group">
                <label for="choix">Je programme en:</label>
                <select class="form-select" name="Choix" id="choix">
                    <option value="HTML">HTML</option>
                    <option value="CSS">CSS</option>
                    <option value="JAVA">JAVA</option>
                    <option value="C#">C#</option>
                </select>
            </div>
            <button type="submit" name="Envoyer" class="btn btn-primary">Valider</button>
        </form>
        <?php 
            if(isset($_GET['Envoyer'])) {
                echo "Vous avez sélectionné ".$_GET['Choix'];
                var_dump($_GET['Choix']);
            }
        ?>
    </div>

    <a href="regles_jeux/jeu-de-ludo-regle.pdf" target="_blank">Ouvrir le fichier PDF dans un nouvel onglet</a>
    
</body>
</html>
