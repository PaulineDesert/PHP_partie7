<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Exercice 3</title>
</head>
<body>
    <h1>Exercice 3</h1>
    <p><?= htmlspecialchars($_GET['name']) . chr(10) . htmlspecialchars($_GET['lastName']); ?></p>

</body>
</html>