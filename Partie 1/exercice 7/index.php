<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=e, initial-scale=1.0">
    <title>exo-php Partie 1 - exercice 7</title>
</head>
<body>

<p>
## Exercice 7
Créer trois variables **lastname** , **firstname** et **age** et les initialiser avec les valeurs de votre choix.  
**Attention** age est de type entier.  
Afficher : "Bonjour" + **lastname** + **firstname** + ",tu as" + **age** + "ans".
</p>

<?php
$firstname = "toto";
$lastname = "tata";
$age = 30;
$result = "Bonjour $firstname $lastname, tu as $age ans";
echo $result;
?>


</body>
</html>