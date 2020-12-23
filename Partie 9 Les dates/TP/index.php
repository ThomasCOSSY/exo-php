<?php
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=e, initial-scale=1.0">
    <title>exo-php Partie 9 - TP</title>
</head>

<body>

    <p>
        Faire un formulaire avec deux listes déroulantes. La première sert à choisir le mois, et le deuxième permet d'avoir l'année.
        En fonction des choix, afficher un calendrier comme celui-ci :

        http://icalendrier.fr/media/imprimer/2017/mensuel/calendrier-2017-mensuel-bigthumb.png

    </p>

    <form action="calendrier.php" method="post">
        <div>
        <?php
  // Variable qui ajoutera l'attribut selected de la liste déroulante
  $selected1 = '';
 
  // Parcours du tableau
  echo '<select name="month">',"\n";
  for($i=1; $i<=12; $i++)
  {
    //si mois en cours
    if($i == date('m'))
    {
      $selected1 = ' selected="selected"';
    }
    // Affichage de la ligne
    echo "\t",'<option value="', $i ,'"', $selected1 ,'>', $i ,'</option>',"\n";
    // Remise à zéro de $selected
    $selected1='';
  }
  echo '</select>',"\n";
?>
        </div>
        <div>
           
            <?php
  // Variable qui ajoutera l'attribut selected de la liste déroulante
  $selected2 = '';
 
  // Parcours du tableau
  echo '<select name="years">',"\n";
  for($i=2010; $i<=2030; $i++)
  {
    // L'année est-elle l'année courante ?
    if($i == date('Y'))
    {
      $selected2 = ' selected="selected"';
    }
    // Affichage de la ligne
    echo "\t",'<option value="', $i ,'"', $selected2 ,'>', $i ,'</option>',"\n";
    // Remise à zéro de $selected
    $selected2='';
  }
  echo '</select>',"\n";
?>
        </div>
        <div class="button">
            <button id="submit" type="submit">Envoyer le formulaire</button>
        </div>
    </form>




</body>

</html>