<?php

?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=e, initial-scale=1.0">
  <title>exo-php Partie 9 - TP</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <p>
    Faire un formulaire avec deux listes déroulantes. La première sert à choisir le mois, et le deuxième permet d'avoir l'année.
    En fonction des choix, afficher un calendrier comme celui-ci :

    http://icalendrier.fr/media/imprimer/2017/mensuel/calendrier-2017-mensuel-bigthumb.png

  </p>
  <div class="d-flex justify-content-center">

    <form action="calendrier.php" method="post" class="formulaire col-2 ">
      <h2 class="text-center mt-3">Votre calendrier</h2>
      <div class="text-center d-flex justify-content-center m-5">
        <div class="m-3">

          <select name="month">
            <option selected="selected"><?php
                                        setlocale(LC_TIME, 'fra_fra');
                                        echo ucwords(utf8_encode(strftime('%B')));
                                        ?></option>
            <?php
            $months = array(
              "Janvier" => 1,
              "Février" => 2,
              "Mars" => 3,
              "Avril" => 4,
              "Mai" => 5,
              "Juin" => 6,
              "Juillet" => 7,
              "Août" => 8,
              "Septembre" => 9,
              "Octobre" => 10,
              "Novembre" => 11,
              "Décembre" => 12
            );

            // pour chaque valeur dans le tableau months
            foreach ($months as $key => $value) {
            ?>
              <option value="<?php echo $key; ?>"><?php echo $key; ?></option>
            <?php
            }
            ?>
          </select>
        </div>

        <div class="m-3">
          <?php
          // Variable qui ajoutera l'attribut selected de la liste déroulante
          $selected2 = '';

          // Parcours du tableau
          echo '<select name="years">', "\n";
          for ($i = 2010; $i <= 2030; $i++) {
            // L'année est-elle l'année courante ?
            if ($i == date('Y')) {
              $selected2 = ' selected="selected"';
            }
            // Affichage de la ligne
            echo "\t", '<option value="', $i, '"', $selected2, '>', $i, '</option>', "\n";
            // Remise à zéro de $selected
            $selected2 = '';
          }
          echo '</select>', "\n";
          ?>
        </div>
      </div>

      <div class="text-center">
      <?php
$nbimages= 8;

$nomimages[1]="image1.jpg";
$nomimages[2]="image2.jpg";
$nomimages[3]="image3.jpg";
$nomimages[4]="image4.jpg";
$nomimages[5]="image5.jpg";
$nomimages[6]="image6.jpg";
$nomimages[7]="image7.jpg";
$nomimages[8]="image8.jpg";

srand((double)microtime()*1000000);
$affimage=rand(1,$nbimages);
?>

<img src="img/<?php echo $nomimages[$affimage]; ?>" width="90%" alt="Image aléatoire">
      </div>

      <div class="button text-center m-3">
        <button id="submit" type="submit">Envoyer le formulaire</button>
      </div>
    </form>

  </div>


</body>

</html>