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
    <title>exo-php Partie 7 - exercice 6</title>
</head>

<body>

    <p>
        ## Exercice 6
        Avec le formulaire de l'exercice 5, Si des données sont passées en **POST** ou en **GET**, le formulaire ne doit pas être affiché. Par contre les données transmises doivent l'être. Dans le cas contraire, c'est l'inverse.
        Utiliser qu'une seule page.
    </p>

    <!-- <form action="index.php" method="post">
        <div>
            <SELECT name="user_gender" size="1">
                <OPTION>Mr
                <OPTION>Mme
                <OPTION>Obiwan Kenobi
            </SELECT>
        </div>
        <div>
            <label for="firstName">Nom :</label>
            <input type="text" id="firstName" name="user_firstName" required>
        </div>
        <div>
            <label for="lastName">prénom :</label>
            <input type="text" id="lastName" name="user_lastName" required>
        </div>
        <div class="button">
            <button id="submit" type="submit">Envoyer le formulaire</button>
        </div>
    </form> -->

    <?php
if (isset($_POST["user_firstName"]) && isset($_POST["user_lastName"]) && isset($_POST["user_gender"])) {
        $user_firstName = $_POST["user_firstName"];
        $user_lastName = $_POST["user_lastName"];
        $user_gender = $_POST["user_gender"];
        echo "Bonjour $user_gender $user_lastName $user_firstName !";
    } else {?> <form action="index.php" method="post">
        <div>
            <SELECT name="user_gender" size="1">
                <OPTION>Mr
                <OPTION>Mme
                <OPTION>Obiwan Kenobi
            </SELECT>
        </div>
        <div>
            <label for="firstName">Nom :</label>
            <input type="text" id="firstName" name="user_firstName" required>
        </div>
        <div>
            <label for="lastName">prénom :</label>
            <input type="text" id="lastName" name="user_lastName" required>
        </div>
        <div class="button">
            <button id="submit" type="submit">Envoyer le formulaire</button>
        </div>
    </form>        
    <?php }
   
    ?>


</body>

</html>