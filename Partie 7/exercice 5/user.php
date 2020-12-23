<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=e, initial-scale=1.0">
    <title>exo-php Partie 7 - exercice 5</title>
</head>
<body>

<p>
        ## Exercice 5
        Créer un formulaire sur la page **index.php** avec :
        - Une liste déroulante pour la civilité (Mr ou Mme)
        - Un champ texte pour le nom
        - Un champ texte pour le prénom

        Ce formulaire doit rediriger vers la page **index.php**.
        Vous avez le choix de la méthode.
    </p>

<?php
$user_firstName = $_POST["user_firstName"];
$user_lastName = $_POST["user_lastName"];
$user_gender = $_POST["user_gender"];
echo "Bonjour $user_gender $user_lastName $user_firstName !"
?>
    
</body>
</html>