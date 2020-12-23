<?php
$firstNumber = 0;
$secondNumber = 50;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=e, initial-scale=1.0">
    <title>exo-php Partie 3 - exercice 2</title>
</head>
<body>

<p>
## Exercice 2
Créer deux variables. Initialiser la première à 0 et la deuxième avec un nombre compris en 1 et 100.  
**Tant que** la première variable n'est pas supérieure à 20 :
- multiplier la première variable avec la deuxième
- afficher le résultat
- incrementer la première variable
</p>

<?php
while ($firstNumber <=20) {
    echo $firstNumber++ * $secondNumber . "<br>";
}

?>
    
</body>
</html>