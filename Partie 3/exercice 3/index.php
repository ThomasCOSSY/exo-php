<?php
$firstNumber = 100;
$secondNumber = 50;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=e, initial-scale=1.0">
    <title>exo-php Partie 3 - exercice 3</title>
</head>
<body>

<p>
## Exercice 3
Créer deux variables. Initialiser la première à 100 et la deuxième avec un nombre compris en 1 et 100.  
**Tant que** la première variable n'est pas inférieure ou égale à 10 :
- multiplier la première variable avec la deuxième
- afficher le résultat
- décrémenter la première variable
</p>

<?php
while ($firstNumber >=10) {
    echo $firstNumber-- * $secondNumber . "<br>";
}
?>

</body>
</html>