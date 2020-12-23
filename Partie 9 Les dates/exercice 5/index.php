<?php
$origin = date_create('2016-05-16');
$target = date_create('2020-12-22');
$interval = date_diff($origin, $target);
echo $interval->format('%R%a jours');
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=e, initial-scale=1.0">
    <title>exo-php Partie 9 - exercice 5</title>
</head>

<body>

    <p>
    Afficher le nombre de jour qui sépare la date du jour avec le 16 mai 2016.
    </p>

    


</body>

</html>