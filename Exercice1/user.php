<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Exercice 1</title>
</head>
<body>
    <h1>Exercice 1</h1>
    <p>
        <?php

        $regexName = '/[a-z]/';
        $subject = $_GET['name'];
        $subject2 = $_GET['lastName'];

        if (preg_match($regexName, $_GET['name']) && preg_match($regexName, $_GET['lastName'])) {
            echo htmlspecialchars($_GET['name']) . chr(10) . htmlspecialchars($_GET['lastName']);
        } else {
            echo 'Les champs ne sont pas valides';
        }

        ?>
    </p>

</body>
</html>