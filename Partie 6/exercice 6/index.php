<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=e, initial-scale=1.0">
    <title>exo-php Partie 6 - exercice 6</title>
</head>
<body>

<p>
## Exercice 6
Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent  et les afficher: **index.php?building=12&room=101**
</p>

<a href="index.php?building=12&room=101">Cliquer ici</a>
<a href="index.php">Cliquer ici pour réinitialiser les valeurs</a>

<p><?php

if(isset($_GET["building"])){
  echo "La variable building est définie" . "<br>";
}else{
  echo "La variable building n'est pas définie" . "<br>";
}
if(isset($_GET["room"])){
    echo "La variable room est définie" . "<br>";
  }else{
    echo "La variable room n'est pas définie" . "<br>";
  }

  var_dump($_GET);
?></p>


</body>
</html>