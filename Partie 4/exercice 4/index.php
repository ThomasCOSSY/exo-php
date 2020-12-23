<?php

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=e, initial-scale=1.0">
    <title>exo-php Partie 4 - exercice 4</title>
</head>
<body>

<p>
## Exercice 4
Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner :
- **Le premier nombre est plus grand** si le premier nombre est plus grand que le deuxième
- **Le premier nombre est plus petit** si le premier nombre est plus petit que le deuxième
- **Les deux nombres sont identiques** si les deux nombres sont égaux
</p>

<?php
function result(){
    $firstNumber = 2;
$secondNumber = 2;
if ($firstNumber > $secondNumber) {
    return  "Le premier nombre est plus grand";
} else if ($firstNumber < $secondNumber){
    return  "Le premier nombre est plus petit";
} else {
    return  "Les deux nombres sont identiques";
}

}
var_dump(result());

?>


</body>
</html>