<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 8</title>
</head>
<body>
    <h1>Exercice 8</h1>
    <p>Sur le formulaire de l'exercice 6, en plus de ce qui est demandé sur les exercices précédent, vérifier que le fichier transmis est bien un fichier pdf.</p>

    <?php

    if (isset($_POST['select']) && isset($_POST['name']) && isset($_POST['lastName'])) {

        echo $_POST['select'] . chr(10) . htmlspecialchars($_POST['name']) . chr(10) . htmlspecialchars($_POST['lastName']);

        if (isset($_FILES['myFile'])) {
            $myInfo = pathinfo($_FILES['myFile']['name']);
            $extensionName = $myInfo['extension'];
            if ($extensionName == 'pdf' && $_FILES['myFile']['type'] == 'application/pdf') {
                echo '<br>C\'est un pdf';
            } else {
                echo '<br>Ce n\'est pas un pdf';
            }
            
        }
    ?>
        
        <p></p>
        <a class="btn btn-primary" href="index.php" role="button">Retour</a>

    <?php 
    
        } else { ?>

            <form method="post" action="index.php" enctype="multipart/form-data">
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
                    <!-- <input type="submit" value="Envoyer le fichier" /> -->
                </div>
                <button type="submit" class="btn btn-primary">Envoyer</button>
            </form>

        <?php } ?>
    
</body>
</html>