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

<?php
$user_firstName = $_POST["user_firstName"];
$user_lastName = $_POST["user_lastName"];
echo "Bonjour $user_lastName $user_firstName !"
?>
    
</body>
</html>