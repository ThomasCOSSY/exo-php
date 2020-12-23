<?php

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=e, initial-scale=1.0">
    <title>exo-php Partie 4 - exercice 6</title>
</head>
<body>

<p>
## Exercice 6
Faire une fonction qui prend trois paramètres : **le nom, le prénom et l'âge d'une personne**. Elle doit renvoyer une chaine de la forme :  
"Bonjour" + **nom** + **prénom** + ",tu as" + **age** + "ans".
</p>

<?php
function result(){
    $firstName = "COSSY";
    $lastName = "Thomas";
    $age = 37;
    return "Bonjour $firstName $lastName, tu as $age ans.";
}
var_dump(result());

?>


</body>
</html>