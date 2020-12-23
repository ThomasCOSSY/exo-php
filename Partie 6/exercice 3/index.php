<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=e, initial-scale=1.0">
    <title>exo-php Partie 6 - exercice 3</title>
</head>
<body>

<p>
## Exercice 3
Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent  et les afficher: **index.php?startDate=2/05/2016&endDate=27/11/2016**
</p>

<a href="index.php?startDate=2/05/2016&endDate=27/11/2016">Cliquer ici</a>
<a href="index.php">Cliquer ici pour réinitialiser les valeurs</a>

<p><?php

if(isset($_GET["startDate"])){
  
  echo "La variable startDate est définie" . "<br>";
}else{
  echo "La variable startDate n'est pas définie" . "<br>";
}
if(isset($_GET["endDate"])){
  
  echo "La variable endDate est définie" . "<br>";
}else{
  echo "La variable endDate n'est pas définie" . "<br>";
}

var_dump($_GET);
?></p>
  
</body>
</html>