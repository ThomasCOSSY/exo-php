<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=e, initial-scale=1.0">
    <title>exo-php Partie 8 - exercice 1</title>
</head>
<body>

<p>
## Exercice 1
Faire une page HTML permettant de donner à l'utilisateur :
- son User Agent
- son adresse ip
- le nom du serveur
</p>

<?php
// trouver son User Agent
echo "Votre User Agent est :" . $_SERVER['HTTP_USER_AGENT'] . "<br>";
// trouver l'adresse IP
echo "L adresse IP de l utilisateur est :" . $_SERVER['REMOTE_ADDR'] . "<br>";
// trouver le nom du serveur
echo "Votre nom de serveur est :" . $_SERVER['SERVER_NAME'] . "<br>";

?>
    
</body>
</html>