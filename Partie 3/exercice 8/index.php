<?php
$number = 200
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=e, initial-scale=1.0">
    <title>exo-php Partie 3 - exercice 8</title>
</head>
<body>

<p>
## Exercice 8
**En allant** de 200 à 0 avec un pas de 12, afficher le message **Enfin !!!!**.
</p>

<?php
for ($number = 200; $number >=0; $number-=12) {
    echo $number . " Enfin !!!!<br>";
}

?>


</body>
</html>