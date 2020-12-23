<?php
$number = 20
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=e, initial-scale=1.0">
    <title>exo-php Partie 3 - exercice 6</title>
</head>
<body>

<p>
## Exercice 6
**En allant** de 20 à 0 avec un pas de 1, afficher le message **C'est presque bon**.
</p>

<?php
for ($number = 20; $number >=0; $number--) {
    echo $number . " C'est presque bon<br>";
}

?>


</body>
</html>