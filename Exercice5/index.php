<?php

    if (!empty($_GET)) {
        echo $_GET['select'] . chr(10) . htmlspecialchars($_GET['name']) . chr(10) . htmlspecialchars($_GET['lastName']);
    } 

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Exercice 5</title>
</head>
<body>
    <h1>Exercice 5</h1>
    <p>
    Créer un formulaire sur la page index.php avec :  
Une liste déroulante pour la civilité (Mr ou Mme)
Un champ texte pour le nom
Un champ texte pour le prénom 

Ce formulaire doit rediriger vers la page index.php. 
Vous avez le choix de la méthode.
    </p>

    <form method="get" action="index.php">
        <div class="form-group">
            <label for="mrMrs">Civilité</label>
            <select class="form-control" name="select" id="mrMrs">
                <option>Mr</option>
                <option>Mme</option>
            </select>
        </div>
        <div class="form-group">
            <label for="name">Nom</label>
            <input type="text" class="form-control" name="name" id="name" aria-describedby="name">
        </div>
        <div class="form-group">
            <label for="lastName">Prénom</label>
            <input type="text" class="form-control" name="lastName" id="lastName" aria-describedby="lastName">
        </div>
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>