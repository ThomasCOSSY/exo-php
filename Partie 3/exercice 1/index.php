<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=e, initial-scale=1.0">
    <title>exo-php Partie 3 - exercice 1</title>
</head>
<body>

<p>
## Exercice 1
Créer une variable et l'initialiser à 0.  
**Tant que** cette variable n'atteint pas 10, il faut :
- l'afficher
- l'incrementer
</p>

<?php
$number = 0;
while ($number <= 10) {
    echo $number++ ."<br>";
}

?>
    
</body>
</html>