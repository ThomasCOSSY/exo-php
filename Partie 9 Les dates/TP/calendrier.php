<?php
// On test si le POST a marché
if (isset($_POST["month"]) && isset($_POST["years"])) {
    $month = $_POST["month"];
    $years = $_POST["years"];
}


class Date
{
    // création des tableaux pour les mois et les jours



    //  var $months = array(
    // "Janvier" => 1,
    // "Février" => 2,
    // "Mars" => 3,
    // "Avril" => 4,
    // "Mai" => 5,
    // "Juin" => 6,
    // "Juillet" => 7,
    // "Août" => 8,
    // "Septembre" => 9,
    // "Octobre" => 10,
    // "Novembre" => 11,
    // "Décembre" => 12
    //   );
    var $days = array("Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche");

    // fonction qui va creer le calendrier
    function calendrier($years)
    {
        // on reteste le POST pour les integrer dans la fonction, sinon elle ne s ajoute pas
        if (isset($_POST["month"]) && isset($_POST["years"])) {
            $month = $_POST["month"];
            $years = $_POST["years"];
        }
        // on réattribue des valeurs numérique à $month pour qu'il entre dans le format "m"
        if ($month == "Janvier") {
            $month = 01;
        };
        if ($month == "Février") {
            $month = 02;
        };
        if ($month == "Mars") {
            $month = 03;
        };
        if ($month == "Avril") {
            $month = 04;
        };
        if ($month == "Mai") {
            $month = 05;
        };
        if ($month == "Juin") {
            $month = 06;
        };
        if ($month == "Juillet") {
            $month = 07;
        };
        if ($month == "Août") {
            $month = 8;
        };
        if ($month == "Septembre") {
            $month = 9;
        };
        if ($month == "Octobre") {
            $month = 10;
        };
        if ($month == "Novembre") {
            $month = 11;
        };
        if ($month == "Décembre") {
            $month = 12;
        };


        $result = array();

        // nouvelle date en se basant sur le POST years, month et on se met au premier jour "-01"
        $date = new DateTime($years . -$month . "-01"); 

        // tant que la date est inférieur au mois en cours                  
        while ($date->format("m") == $month) {

            // déclaration des formats
            $y = $date->format("Y");
            $m = $date->format("m");
            $d = $date->format("j");
            // N pour les jours de la semaine
            $N = $date->format("N");

            // je veux un tableau qui montre l année, le mois et les jours 
            $result[$y][$m][$d] = $N;
            // augmenter $date d'un jour avec DateInterval Period 1 Day rajoute une peridode de 1 jour
            $date->add(new DateInterval("P1D"));   
               
        }
        return $result;     
         
    }
}
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

    <div class="container m-auto d-flex align-content-center justify-content-center">

        <?php
        // création d"une nouvelle date
        $date = new Date();
//lancement de la fonction calendrier
        $dates = $date->calendrier($month);
        
        ?>
        <div class="periods text-center">


            <?php $dates = current($dates); ?>
            
            <?php foreach ($dates as $m => $days) : ?>
                <div class="month">
                    <h1><?php echo $_POST["month"] . " " . $years ?></h1>
                    <table>
                        <thead>
                            <tr>
                                <?php foreach ($date->days as $d) : ?>
                                    <th><?php echo $d ?>
                                    <?php endforeach ?>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php $end = end($days);
                                foreach ($days as $d => $N) : ?>
                                    <?php if ($d == 1 && $N == 1) : ?>
                                        <?php echo "" ?>
                                    <?php elseif ($d == 1) : ?>
                                        <td colspan="<?php echo $N - 1 ?>" style="background-color: gray;"></td>
                                    <?php endif  ?>

                                    <td><?php echo $d ?> </td>

                                    <?php if ($N == 7) : ?>
                            </tr>
                            <tr>
                            <?php endif  ?>
                        <?php endforeach ?>
                        <?php if ($end != 7) : ?>
                            <td colspan="<?php echo 7 - $end ?>" style="background-color: gray;"></td>
                        <?php endif  ?>
                            </tr>
                        </tbody>
                    </table>
                </div>
            <?php endforeach ?>


        </div>


    </div>



    <div class="d-flex justify-content-center mt-5">

<form action="calendrier.php" method="post" class="formulaire col-2 ">
  <h2 class="text-center mt-3">autre calendrier ?</h2>
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