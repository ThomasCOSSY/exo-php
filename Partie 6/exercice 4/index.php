<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=e, initial-scale=1.0">
    <title>exo-php Partie 6 - exercice 4</title>
</head>
<body>

<p>
## Exercice 4
Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent  et les afficher: **index.php?language=PHP&server=LAMP**
</p>

<a href="index.php?language=PHP&server=LAMP">Cliquer ici</a>
<a href="index.php">Cliquer ici pour réinitialiser les valeurs</a>

<p><?php

if(isset($_GET["language"])){
  echo "La variable language est définie" . "<br>";
}else{
  echo "La variable language n'est pas définie" . "<br>";
}
if(isset($_GET["server"])){
  echo "La variable server est définie" . "<br>";
}else{
  echo "La variable server n'est pas définie" . "<br>";
}

var_dump($_GET);
?></p>


</body>
</html>