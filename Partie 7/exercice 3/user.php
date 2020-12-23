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

<?php
$user_firstName = $_GET["user_firstName"];
$user_lastName = $_GET["user_lastName"];
echo "Bonjour $user_lastName $user_firstName !"
?>
    
</body>
</html>