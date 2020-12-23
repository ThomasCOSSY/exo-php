<?php
// On test si le POST a marché
if (isset($_POST["month"]) && isset($_POST["years"])) {
    $month = $_POST["month"];
    $years = $_POST["years"];
}

class Date
{
    // création des tableaux pour les mois et les jours
    var $months = array("Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre");
    var $days = array("Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche");

// fonction qui va creer le calendrier
    function calendrier($years)
    {
// on reteste le POST pour les integrer dans la fonction, sinon elle ne s ajoute pas
        if (isset($_POST["month"]) && isset($_POST["years"])) {
            $month = $_POST["month"];
            $years = $_POST["years"];
        }

        $result = array();
        // nouvelle date en se basant sur le POST years et month
        $date = new DateTime($years . -$month . "-01");

        // tant que la date est inférieur à l'année en cours
        while ($date->format("Y") <= $years) {
            // déclaration des formats
            setlocale(LC_TIME, 'fra_fra');
            // utf8_encode(strftime('%A %d %B %Y'));
            $y = $date->format("Y");
            $m = $date->format("F");
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
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">
        
        <?php
        $date = new Date();

        $dates = $date->calendrier($years);

        ?>
        <div class="periods">

           
            <?php $dates = current($dates); ?>
            <?php foreach ($dates as $m => $days) : ?>
                <div class="month">
                    <h1><?php echo $m . " " . $years?></h1>
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
                                <?php $end = end($days); foreach ($days as $d=>$N) : ?>
                                    <?php if($d == 1 && $N == 1) : ?>
                                    <?php echo "" ?>
                                    <?php elseif($d == 1) : ?>
                                    <td colspan="<?php echo $N-1 ?>" style="background-color: gray;"></td>
                                <?php endif  ?> 

                                    <td><?php echo $d ?> </td>

                                    <?php if($N == 7) : ?>
                                    </tr><tr>
                                <?php endif  ?> 
                                <?php endforeach ?>
                                <?php if($end != 7) : ?>
                                    <td colspan="<?php echo 7-$end ?>" style="background-color: gray;"></td>
                                    <?php endif  ?> 
                            </tr>
                        </tbody>
                    </table>
                </div>
            <?php endforeach ?>


        </div>
        

    </div>







</body>

</html>