<?php

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=e, initial-scale=1.0">
    <title>exo-php Partie 4 - exercice 8</title>
</head>
<body>

<p>
## Exercice 8
Faire une fonction qui prend en paramètre trois nombres et qui renvoit la somme de ces nombres.  
Tous les paramètres doivent avoir une valeur par défaut.

</p>

<?php
function result(){
    $firstNumber = 10;
    $secondNumber = 20;
    $thirdNumber = 30;
    return $firstNumber + $secondNumber + $thirdNumber;
}

var_dump(result());
?>


</body>
</html>