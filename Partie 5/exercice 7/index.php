<?php

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=e, initial-scale=1.0">
    <title>exo-php Partie 5 - exercice 7</title>
</head>
<body>

<p>
## Exercice 7
Avec le tableau de l'exercice 5, ajouter la ligne correspondant au département de la ville de Reims.
</p>

<?php
$departement = array(02 => "Aisne", 59 => "Nord", 60 => "Oise", 62 => "Pas-de-Calais", 80 => "Somme");
$departement[51] = "Marne";
asort($departement);
var_dump($departement);

?>


</body>
</html>