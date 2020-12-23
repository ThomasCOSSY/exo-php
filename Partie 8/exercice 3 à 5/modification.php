<?php

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=e, initial-scale=1.0">
    <title>exo-php Partie 8 - exercice 3 à 5</title>
</head>

<body>

    <p>
        ## Exercice 3
        Faire un formulaire qui permet de récupérer le login et le mot de passe de l'utilisateur. A la validation du formulaire, stocker les informations dans un cookie.

        ## Exercice 4
        Faire une page qui va récupérer les informations du cookie créé à l'exercice 3 et qui les affiches.

        ## Exercice 5
        Faire une page qui va pouvoir modifier le contenu du cookie de l'exercice 3.
    </p>



    <form action="user.php" method="post">
        <div>
            <label for="login">Veuillez modifier votre login:</label>
            <input type="text" id="login" name="login">
        </div>
        <div>
            <label for="password">Veuillez modifier votre mot de passe :</label>
            <input type="text" id="password" name="password">
        </div>
        <div class="button">
            <button type="submit">Envoyer le formulaire</button>
        </div>
    </form>

    <?php

    ?>


</body>

</html>