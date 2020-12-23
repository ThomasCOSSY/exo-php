<?php
session_start();

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=e, initial-scale=1.0">
    <title>exo-php Partie 8 - exercice 2</title>
</head>
<body>

<p>
## Exercice 2
Sur la page index, faire un liens vers une autre page. Passer d'une page à l'autre le contenu des variables **lastname**, **firstname** et **age** grâce aux sessions. Ces variables auront été définies directement dans le code.  
Il faudra afficher le contenu de ces variables sur la deuxième page.
</p>

<?php
$user_firstName = $_SESSION["firstName"];
$user_lastName = $_SESSION["lastName"];
$user_age = $_SESSION["age"];
echo "Bonjour $user_lastName $user_firstName ! Vous avez $user_age ans"
?>
    
</body>
</html>