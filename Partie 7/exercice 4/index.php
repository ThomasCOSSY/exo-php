<?php
$user_firstName = "";
$user_lastName = "";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=e, initial-scale=1.0">
    <title>exo-php Partie 7 - exercice 4</title>
</head>
<body>

<p>
## Exercice 4
Avec le formulaire de l'exercice 2, afficher dans la page user.php les données du formulaire transmises.
</p>

<form action="user.php" method="post">
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