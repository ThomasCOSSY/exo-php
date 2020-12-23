<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=e, initial-scale=1.0">
    <title>exo-php Partie 6 - exercice 1</title>
</head>
<body>

<p>
## Exercice 1
Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: **index.php?lastname=Nemare&firstname=Jean**
</p>

<a href="index.php?lastname=Nemare&firstname=Jean">Cliquer ici pour ajouter les valeurs</a>
<a href="index.php">Cliquer ici pour réinitialiser les valeurs</a>

<p><?php

if(isset($_GET["lastname"])){
  $lastname = "Nemare";
  echo "La variable lastname est définie et est $lastname." . "<br>";
}else{
  echo "La variable lastname n'est pas définie" . "<br>";
}
if(isset($_GET["firstname"])){
  $firstname = "Jean";
  echo "La variable firstname est définie et est $firstname" . "<br>";
}else{
  echo "La variable firstname n'est pas définie" . "<br>";
}

var_dump($_GET);
?></p>
    
</body>
</html>