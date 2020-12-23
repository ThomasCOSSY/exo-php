<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=e, initial-scale=1.0">
    <title>exo-php Partie 6 - exercice 2</title>
</head>
<body>

<p>
## Exercice 2
Faire une page index.php. Tester sur cette page que le paramètre **age** existe et si c"est le cas l"afficher sinon le signaler : **index.php?lastname=Nemare&firstname=Jean**

</p>
<a href="index.php?lastname=Nemare&firstname=Jean">Cliquer ici</a>
<a href="index.php">Cliquer ici pour réinitialiser les valeurs</a>

<p><?php

if(isset($_GET["age"])){
  
  echo "La variable age est définie" . "<br>";
}else{
  echo "La variable age n'est pas définie" . "<br>";
}

var_dump($_GET);
?></p>
    
</body>
</html>