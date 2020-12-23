<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=e, initial-scale=1.0">
    <title>exo-php Partie 7 - exercice 2</title>
</head>
<body>

<p>
## Exercice 2
Créer un formulaire demandant **le nom** et **le prénom**. Ce formulaire doit rediriger vers la page **user.php** avec la méthode **POST**.
</p>

<?php
$user_firstName = $_POST["user_firstName"];
$user_lastName = $_POST["user_lastName"];
echo "Bonjour $user_lastName $user_firstName !"
?>
    
</body>
</html>