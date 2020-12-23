<?php
if (isset($_POST['login'])) // Si le formulaire a été envoyé...
{
    setcookie('login', $_POST['login'], time() + 365 * 24 * 3600, null, null, false, true); // On créé le cookie

}
if (isset($_POST['password'])) // Si le formulaire a été envoyé...
{
    setcookie('password', $_POST['password'], time() + 365 * 24 * 3600, null, null, false, true); // On créé le cookie

}
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

    <?php
    $_COOKIE["login"] = $_POST['login'];
    $_COOKIE["password"] = $_POST['password'];

    if (isset($_COOKIE["login"])) {
        echo "Votre login de session est " . $_COOKIE["login"] . "<br>";
    } else {
        echo "votre login n'est pas définie <br>";
    }
    if (isset($_POST["password"])) {
        echo "Votre mot de passe est " . $_COOKIE["password"] . "<br>";
    } else {
        echo "votre mot de passe n'est pas définie <br>";
    }
    ?>

    <a href="modification.php">Cliquer ici pour modifier vos informations</a>

</body>

</html>