<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=e, initial-scale=1.0">
    <title>exo-php Partie 7 - exercice 1</title>
</head>
<body>

<p>
## Exercice 1
Créer un formulaire demandant **le nom** et **le prénom**. Ce formulaire doit rediriger vers la page **user.php** avec la méthode **GET**.
</p>

<?php
$user_firstName = $_GET["user_firstName"];
$user_lastName = $_GET["user_lastName"];
echo "Bonjour $user_lastName $user_firstName !"
?>
    
</body>
</html>