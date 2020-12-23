<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=e, initial-scale=1.0">
    <title>exo-php Partie 6 - exercice 5</title>
</head>
<body>

<p>
## Exercice 5
Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent  et les afficher: **index.php?week=12**
</p>

<a href="index.php?week=12">Cliquer ici</a>
<a href="index.php">Cliquer ici pour réinitialiser les valeurs</a>

<p><?php

if(isset($_GET["week"])){
  echo "La variable week est définie" . "<br>";
}else{
  echo "La variable week n'est pas définie" . "<br>";
}

var_dump($_GET);
?></p>


</body>
</html>