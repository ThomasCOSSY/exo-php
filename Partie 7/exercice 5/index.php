<?php
$user_gender = "";
$user_firstName = "";
$user_lastName = "";
?>
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

    <form action="user.php" method="post">
        <div>
            <SELECT name="user_gender" size="1">
                <OPTION>Mr
                <OPTION>Mme
                <OPTION>Obiwan Kenobi
            </SELECT>
        </div>
        <div>
            <label for="firstName">Nom :</label>
            <input type="text" id="firstName" name="user_firstName">
        </div>
        <div>
            <label for="lastName">prénom :</label>
            <input type="text" id="lastName" name="user_lastName">
        </div>
        <div class="button">
            <button type="submit">Envoyer le formulaire</button>
        </div>
    </form>


</body>

</html>