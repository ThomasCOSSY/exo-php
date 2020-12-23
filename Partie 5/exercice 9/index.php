<?php

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=e, initial-scale=1.0">
    <title>exo-php Partie 5 - exercice 9</title>
</head>
<body>

<p>
## Exercice 9
Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau.

</p>

<?php
$departement = array(02 => "Aisne", 59 => "Nord", 60 => "Oise", 62 => "Pas-de-Calais", 80 => "Somme");
foreach ($departement as $value){
    echo $value . "<br>";
    }
?>


</body>
</html>