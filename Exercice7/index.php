<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 7</title>
</head>
<body>
    <h1>Exercice 7</h1>
    <p>Au formulaire de l'exercice 5, ajouter un champ d'envoi de fichier. Afficher en plus de ce qui est demandé à l'exercice 6, le nom et l'extension du fichier.</p>

    <?php

    if (isset($_GET['select']) && isset($_GET['name']) && isset($_GET['lastName']) && isset($_GET['myFile'])) {

        echo $_GET['select'] . chr(10) . htmlspecialchars($_GET['name']) . chr(10) . htmlspecialchars($_GET['lastName']) . chr(10) . $_GET['myFile'];

    ?>
        
        <p></p>
        <a class="btn btn-primary" href="index.php" role="button">Retour</a>

    <?php 
    
        } else { ?>

            <form method="get" action="index.php" enctype="multipart/form-data">
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
                <div class="form-group">
                    <label for="myFile">Envoi de fichier</label>
                    <input type="file" name="myFile" /><br />
                </div>
                <button type="submit" class="btn btn-primary">Envoyer</button>
            </form>

        <?php } ?>
    
</body>
</html>