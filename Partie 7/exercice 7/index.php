<?php
$user_gender = "";
$user_firstName = "";
$user_lastName = "";
$monfichier = "";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=e, initial-scale=1.0">
    <title>exo-php Partie 7 - exercice 7</title>
</head>

<body>

    <p>
        ## Exercice 7
        Au formulaire de l"exercice 5, ajouter un champ d"envoi de fichier. Afficher en plus de ce qui est demandé à l"exercice 6, le nom et l"extension du fichier.
    </p>

    <?php
    if (isset($_POST["user_firstName"]) && isset($_POST["user_lastName"]) && isset($_POST["user_gender"]) && isset($_FILES["monfichier"])) {
        $user_firstName = $_POST["user_firstName"];
        $user_lastName = $_POST["user_lastName"];
        $user_gender = $_POST["user_gender"];
        $monfichier = $_FILES["monfichier"]["name"] . "." . $_FILES["monfichier"]["type"] ;
        echo "Bonjour $user_gender $user_lastName $user_firstName !<br> le fichier envoyé est $monfichier.";
    } else { ?> <form action="index.php" method="post" enctype="multipart/form-data">
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
            <div>
                <input type="file" name="monfichier">
            </div>
            <div class="button">
                <button id="submit" type="submit">Envoyer le formulaire</button>
            </div>
        </form>
    <?php }    ?>



    <?php
    // Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
    if (isset($_FILES['monfichier']) and $_FILES['monfichier']['error'] == 0) {
        // Testons si le fichier n'est pas trop gros
        if ($_FILES['monfichier']['size'] <= 1000000) {
            // Testons si l'extension est autorisée
            $infosfichier = pathinfo($_FILES['monfichier']['name']);
            $extension_upload = $infosfichier['extension'];
            $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
            if (in_array($extension_upload, $extensions_autorisees)) {}
        }
    }
    ?>


</body>

</html>