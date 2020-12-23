<?php
$number = 1.0;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=e, initial-scale=1.0">
    <title>exo-php Partie 3 - exercice 4</title>
</head>
<body>

<p>
## Exercice 4
Créer une variable et l'initialiser à 1.  
**Tant que** cette variable n'atteint pas 10, il faut :
- l'afficher
- l'incrementer de la moitié de sa valeur
</p>

<?php
while ($number <=10) {
    echo $number*=1.5 , "<br>";
}
?>


</body>
</html>