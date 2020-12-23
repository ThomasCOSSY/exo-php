<?php
$user_firstName = "";
$user_lastName = "";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=e, initial-scale=1.0">
    <title>exo-php Partie 7 - exercice 3</title>
</head>
<body>

<p>
## Exercice 3
Avec le formulaire de l'exercice 1, afficher dans la page user.php les données du formulaire transmis.
</p>

<form action="user.php" method="get">
<div>
        <label for="firstName">Nom :</label>
        <input type="text" id="firstName" name="user_firstName">
    </div>
    <div>
        <label for="lastName">prénom :</label>
        <input type="text" id="lastName" name="user_lastName">
    </div>
    <div class="button">
        <button type="submit">Envoyer le formulaire</button>
    </div>
</form>

</body>
</html>